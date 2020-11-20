<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;
use Faker\Test\TestCase;

final class ImageTest extends TestCase
{
    public function testImageUrlUses640x680AsTheDefaultSize()
    {
        $this->assertMatchesRegularExpression(
            '#^https://via.placeholder.com/640x480.png/#', 
            Image::imageUrl()
        );
    }

    public function testImageUrlAcceptsCustomWidthAndHeight()
    {
        $this->assertMatchesRegularExpression(
            '#^https://via.placeholder.com/800x400.png/#', 
            Image::imageUrl(800, 400)
        );
    }

    public function testImageUrlAcceptsCustomCategory()
    {
        $this->assertMatchesRegularExpression(
            '#^https://via.placeholder.com/800x400.png/[\w]{6}\?text=nature\+.*#', 
            Image::imageUrl(800, 400, 'nature')
        );
    }

    public function testImageUrlAcceptsCustomText()
    {
        $this->assertMatchesRegularExpression(
            '#^https://via.placeholder.com/800x400.png/[\w]{6}\?text=nature\+Faker#', 
            Image::imageUrl(800, 400, 'nature', false, 'Faker')
        );
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

        $this->assertMatchesRegularExpression(
            '#^https://via.placeholder.com/800x400.png/[\w]{6}\?text=nature\+Faker#', 
            $imageUrl
        );
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

        $this->assertMatchesRegularExpression(
            '#^https://via.placeholder.com/800x400.png/CCCCCC\?text=nature\+Faker#', 
            $imageUrl
        );
    }

    public function testImageUrlAddsARandomGetParameterByDefault()
    {
        $url = Image::imageUrl(800, 400);
        $splitUrl = preg_split('/\?text=/', $url);

        $this->assertEquals(count($splitUrl), 2);
        $this->assertMatchesRegularExpression('#\w*#', $splitUrl[1]);
    }

    public function testDownloadWithDefaults()
    {
        $curlPing = curl_init(Image::BASE_URL);
        curl_setopt($curlPing, CURLOPT_TIMEOUT, 5);
        curl_setopt($curlPing, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($curlPing, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlPing, CURLOPT_FOLLOWLOCATION, true);
        $data = curl_exec($curlPing);
        $httpCode = curl_getinfo($curlPing, CURLINFO_HTTP_CODE);
        curl_close($curlPing);

        if ($httpCode < 200 | $httpCode > 300) {
            $this->markTestSkipped("Placeholder.com is offline, skipping image download");
        }

        $file = Image::image(sys_get_temp_dir());
        $this->assertFileExists($file);
        if (function_exists('getimagesize')) {
            list($width, $height, $type, $attr) = getimagesize($file);
            $this->assertEquals(640, $width);
            $this->assertEquals(480, $height);
            $this->assertEquals(constant('IMAGETYPE_PNG'), $type);
        } else {
            $this->assertEquals('png', pathinfo($file, PATHINFO_EXTENSION));
        }
        if (file_exists($file)) {
            unlink($file);
        }
    }
}
