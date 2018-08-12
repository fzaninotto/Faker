<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    public function testImageUrlUses640x680AsTheDefaultSize()
    {
        $this->assertEquals('https://source.unsplash.com/640x480/', Image::imageUrl());
    }

    public function testImageUrlAcceptsCustomWidthAndHeight()
    {
        $this->assertEquals('https://source.unsplash.com/800x400/', Image::imageUrl(800, 400));
    }

    public function testImageUrlAcceptsKeyword()
    {
        $this->assertEquals('https://source.unsplash.com/800x400/?nature', Image::imageUrl(800, 400, 'nature'));
    }


    public function testImageUrlAcceptsMultipleKeywords()
    {
        $this->assertEquals('https://source.unsplash.com/800x400/?nature,water', Image::imageUrl(800, 400, 'nature,water'));
    }

    public function testDownloadWithDefaults()
    {
        $url = "https://source.unsplash.com/";
        $curlPing = curl_init($url);
        curl_setopt($curlPing, CURLOPT_TIMEOUT, 5);
        curl_setopt($curlPing, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curlPing, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curlPing);
        $httpCode = curl_getinfo($curlPing, CURLINFO_HTTP_CODE);
        curl_close($curlPing);

        if ($httpCode < 200 | $httpCode > 300) {
            $this->markTestSkipped("Unsplash is offline, skipping image download");
        }

        $file = Image::image(sys_get_temp_dir());

        $this->assertFileExists($file);
        if (function_exists('getimagesize')) {
            list($width, $height, $type, $attr) = getimagesize($file);
            $this->assertEquals(640, $width);
            $this->assertEquals(480, $height);
            $this->assertEquals(constant('IMAGETYPE_JPEG'), $type);
        } else {
            $this->assertEquals('jpg', pathinfo($file, PATHINFO_EXTENSION));
        }
        if (file_exists($file)) {
            unlink($file);
        }
    }
}
