<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;

class ImageTest extends \PHPUnit_Framework_TestCase
{
    public function testUrlWithDefaults()
    {
        $this->assertEquals(Image::imageUrl(), 'http://lorempixel.com/640/480/');
    }

    public function testUrlWithDimensions()
    {
        $this->assertEquals(Image::imageUrl(800, 400), 'http://lorempixel.com/800/400/');
    }

    public function testUrlWithDimensionsAndCategory()
    {
        $this->assertEquals(Image::imageUrl(800, 400, 'nature'), 'http://lorempixel.com/800/400/nature/');
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
