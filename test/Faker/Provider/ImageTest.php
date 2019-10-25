<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    public function testImageUrlUses640x680AsTheDefaultSize()
    {
        $this->assertRegExp('#^https://lorempixel.com/640/480/#', Image::imageUrl());
    }

    public function testImageUrlAcceptsCustomWidthAndHeight()
    {
        $this->assertRegExp('#^https://lorempixel.com/800/400/#', Image::imageUrl(800, 400));
    }

    public function testImageUrlAcceptsCustomCategory()
    {
        $this->assertRegExp('#^https://lorempixel.com/800/400/nature/#', Image::imageUrl(800, 400, 'nature'));
    }

    public function testImageUrlAcceptsCustomText()
    {
        $this->assertRegExp('#^https://lorempixel.com/800/400/nature/Faker#', Image::imageUrl(800, 400, 'nature', false, 'Faker'));
    }

    public function testImageUrlReturnsLinkToRegularImageWhenGrayIsFalse()
    {
        $imageUrl = Image::imageUrl(
            800,
            400,
            'nature',
            false,
            'Faker',
            false
        );

        $this->assertSame('https://lorempixel.com/800/400/nature/Faker/', $imageUrl);
    }

    public function testImageUrlReturnsLinkToRegularImageWhenGrayIsTrue()
    {
        $imageUrl = Image::imageUrl(
            800,
            400,
            'nature',
            false,
            'Faker',
            true
        );

        $this->assertSame('https://lorempixel.com/gray/800/400/nature/Faker/', $imageUrl);
    }

    public function testImageUrlAddsARandomGetParameterByDefault()
    {
        $url = Image::imageUrl(800, 400);
        $splitUrl = preg_split('/\?/', $url);

        $this->assertEquals(count($splitUrl), 2);
        $this->assertRegexp('#\d{5}#', $splitUrl[1]);
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
        $url = "http://lorempixel.com/";
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
            $errorNumber = null;
            $errorMessage = null;

            set_error_handler(function ($errno, $errstr) use (&$errorNumber, &$errorMessage) {
                $errorNumber = $errno;
                $errorMessage = $errstr;
            });

            $imageSize = getimagesize($file);

            restore_error_handler();

            if (null !== $errorMessage) {
                $this->markTestSkipped(sprintf(
                    'Failed interpreting image file downloaded from LoremPixel using getimagesize() with error number "%d" and message "%s".',
                    $errorNumber,
                    $errorMessage
                ));
            }

            list($width, $height, $type, $attr) = $imageSize;

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
