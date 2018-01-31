<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;
use PHPUnit\Framework\TestCase;
use Faker\Provider\Image\LoremPixelProvider;
use Faker\Provider\Image\RandImgProvider;

class ImageTest extends TestCase
{
    public function testImageUrlUses640x680AsTheDefaultSizeLoremPixel()
    {
        $this->assertRegExp('#^https://lorempixel.com/640/480/#', Image::imageUrl(new LoremPixelProvider()));
    }

    public function testImageUrlAcceptsCustomWidthAndHeightLoremPixel()
    {
        $this->assertRegExp('#^https://lorempixel.com/800/400/#', Image::imageUrl(new LoremPixelProvider(), 800, 400));
    }

    public function testImageUrlAcceptsCustomCategoryLoremPixel()
    {
        $this->assertRegExp('#^https://lorempixel.com/800/400/nature/#', Image::imageUrl(new LoremPixelProvider(), 800, 400, 'nature'));
    }

    public function testImageUrlAcceptsCustomTextLoremPixel()
    {
        $this->assertRegExp('#^https://lorempixel.com/800/400/nature/Faker#', Image::imageUrl(new LoremPixelProvider(), 800, 400, 'nature', false, 'Faker'));
    }

    public function testImageUrlAddsARandomGetParameterByDefaultLoremPixel()
    {
        $url = Image::imageUrl(new LoremPixelProvider(), 800, 400);
        $splitUrl = preg_split('/\?/', $url);

        $this->assertEquals(count($splitUrl), 2);
        $this->assertRegexp('#\d{5}#', $splitUrl[1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testUrlWithDimensionsAndBadCategoryLoremPixel()
    {
        Image::imageUrl(new LoremPixelProvider(), 800, 400, 'bullhonky');
    }

    public function testImageUrlUses640x680AsTheDefaultSizeRandImg()
    {
        $this->assertRegExp('#^http://www.rand-img.com/640/480/#', Image::imageUrl(new RandImgProvider()));
    }

    public function testImageUrlAcceptsCustomWidthAndHeightRandImg()
    {
        $this->assertRegExp('#^http://www.rand-img.com/800/400/#', Image::imageUrl(new RandImgProvider(), 800, 400));
    }

    public function testImageUrlAcceptsCustomCategoryRandImg()
    {
        $this->assertRegExp('#^http://www.rand-img.com/800/400/nature/#', Image::imageUrl(new RandImgProvider(), 800, 400, 'nature'));
    }

    public function testImageUrlAcceptsCustomTextRandImg()
    {
        $this->assertRegExp('#^http://www.rand-img.com/800/400/nature/#', Image::imageUrl(new RandImgProvider(), 800, 400, 'nature', false, 'Faker'));
    }

    public function testImageUrlAddsARandomGetParameterByDefaultRandImg()
    {
        $url = Image::imageUrl(new RandImgProvider(), 800, 400);
        $splitUrl = preg_split('/\?rand\=/', $url);

        $this->assertEquals(count($splitUrl), 2);
        $this->assertRegexp('#\d{5}#', $splitUrl[1]);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testUrlWithDimensionsAndBadCategoryRandImg()
    {
        Image::imageUrl(new RandImgProvider(), 800, 400, 'bullhonky');
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
