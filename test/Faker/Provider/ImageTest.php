<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    protected $host = 'source.unsplash.com';

    public function testImageUrlUses640x680AsTheDefaultSize()
    {
        $this->assertRegExp("#^https://{$this->host}/640x480/#", Image::imageUrl());
    }

    public function testImageUrlAcceptsCustomWidthAndHeight()
    {
        $this->assertRegExp("#^https://{$this->host}/800x400/#", Image::imageUrl(800, 400));
    }

    public function testImageUrlAcceptsCustomCategory()
    {
        $this->assertRegExp("#^https://{$this->host}/800x400/\?nature#", Image::imageUrl(800, 400, 'nature'));
    }

    public function testImageUrlAcceptsCustomText()
    {
        $this->assertRegExp("#^https://{$this->host}/800x400/\?nature,Faker#", Image::imageUrl(800, 400, 'nature', false, 'Faker'));
    }

    public function testImageUrlAcceptsGrayscale()
    {
        $this->assertRegExp("#^https://{$this->host}/800x400/\?grayscale,nature#", Image::imageUrl(
            800, 400, 'nature', true, null, true
        ));
    }

    public function testImageUrlRequestsRandomCategoryIfNoneSpecified()
    {
        $this->assertRegExp("#^https://{$this->host}/800x400/\?\w+\&\d+$#", Image::imageUrl(
            800, 400, null, true
        ));
    }

    public function testImageUrlAddsARandomGetParameterByDefault()
    {
        $url = Image::imageUrl(800, 400);
        $splitUrl = preg_split('/\?/', $url);

        $this->assertEquals(count($splitUrl), 2);
        $this->assertRegexp('#\d{5}#', $splitUrl[1]);
    }

    public function testDownloadWithDefaults()
    {
        $url = "https://{$this->host}/";
        $curlPing = curl_init($url);
        curl_setopt($curlPing, CURLOPT_HEADER, true);
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
