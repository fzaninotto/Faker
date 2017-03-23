<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;

class ImageTest extends \PHPUnit_Framework_TestCase
{
    public function testImageUrlUses640x480AsTheDefaultSize()
    {
        $this->assertRegExp('#^http://lorempixel.com/640/480/#', Image::imageUrl());
    }

    public function testImageUrlAcceptsCustomWidthAndHeight()
    {
        $this->assertRegExp('#^http://lorempixel.com/800/400/#', Image::imageUrl(800, 400));
    }

    public function testImageUrlAcceptsCustomCategory()
    {
        $this->assertRegExp('#^http://lorempixel.com/640/480/nature/#', Image::imageUrl(640, 480, 'nature'));
    }

    /**
     * Test if the url contains the custom text as the last url path part if images are randomized.
     */
    public function testImageUrlAcceptsCustomText()
    {
        $this->assertRegExp('#^http://lorempixel.com/640/480/nature/Faker#', Image::imageUrl(640, 480, 'nature', true, 'Faker'));
    }

    /**
     * Test if the url contains a resource id following the category if images are not randomized.
     * The id is a digit between 1 and 10.
     */
    public function testImageUrlAddsResourceId()
    {
        $this->assertRegExp('#^http:\/\/lorempixel.com\/640\/480\/nature\/[1-9]0?#', Image::imageUrl(640, 480, 'nature', false));
    }

    /**
     * Test if the url has custom text after the resource id.
     */
    public function testImageUrlAddsResourceIdAndCustomText()
    {
        $this->assertRegExp('#^http:\/\/lorempixel.com\/640\/480\/nature\/([1-9]0?)/Faker#', Image::imageUrl(640, 480, 'nature', false, 'Faker'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testUrlWithDimensionsAndBadCategory()
    {
        Image::imageUrl(800, 400, 'bullhonky');
    }

    public function testDownloadWithDefaults()
    {
        $url = "http://www.lorempixel.com/";
        $curlPing = curl_init($url);
        curl_setopt($curlPing, CURLOPT_TIMEOUT, 5);
        curl_setopt($curlPing, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curlPing, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($curlPing);
        $httpCode = curl_getinfo($curlPing, CURLINFO_HTTP_CODE);
        curl_close($curlPing);

        if ($httpCode < 200 | $httpCode > 300) {
            $this->markTestSkipped("LoremPixel is offline, skipping image download");
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
