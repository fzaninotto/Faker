<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;
use PHPUnit\Framework\TestCase;

final class ImageTest extends TestCase
{
    public function testImageUrlUses640x680AsTheDefaultSize(): void
    {
        $this->assertMatchesRegularExpression('#^https://lorempixel.com/640/480/#', Image::imageUrl());
    }

    public function testImageUrlAcceptsCustomWidthAndHeight(): void
    {
        $this->assertMatchesRegularExpression('#^https://lorempixel.com/800/400/#', Image::imageUrl(800, 400));
    }

    public function testImageUrlAcceptsCustomCategory(): void
    {
        $this->assertMatchesRegularExpression('#^https://lorempixel.com/800/400/nature/#', Image::imageUrl(800, 400, 'nature'));
    }

    public function testImageUrlAcceptsCustomText(): void
    {
        $this->assertMatchesRegularExpression('#^https://lorempixel.com/800/400/nature/Faker#', Image::imageUrl(800, 400, 'nature', false, 'Faker'));
    }

    public function testImageUrlReturnsLinkToRegularImageWhenGrayIsFalse(): void
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

    public function testImageUrlReturnsLinkToRegularImageWhenGrayIsTrue(): void
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

    public function testImageUrlAddsARandomGetParameterByDefault(): void
    {
        $url = Image::imageUrl(800, 400);
        $splitUrl = \preg_split('/\?/', $url);

        $this->assertEquals(2, \count($splitUrl));
        $this->assertMatchesRegularExpression('#\d{5}#', $splitUrl[1]);
    }

    public function testUrlWithDimensionsAndBadCategory(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Image::imageUrl(800, 400, 'bullhonky');
    }

    public function testDownloadWithDefaults(): void
    {
        $this->markTestSkipped('Skipped due to unstable service prior 1.9.0 release');

        $url = 'http://lorempixel.com/';
        $curlPing = \curl_init($url);
        \curl_setopt($curlPing, \CURLOPT_TIMEOUT, 5);
        \curl_setopt($curlPing, \CURLOPT_CONNECTTIMEOUT, 5);
        \curl_setopt($curlPing, \CURLOPT_RETURNTRANSFER, true);
        $data = \curl_exec($curlPing);
        $httpCode = \curl_getinfo($curlPing, \CURLINFO_HTTP_CODE);
        \curl_close($curlPing);

        if ($httpCode < 200 | $httpCode > 300) {
            $this->markTestSkipped('LoremPixel is offline, skipping image download');
        }

        $file = Image::image(\sys_get_temp_dir());
        $this->assertFileExists($file);
        if (\function_exists('getimagesize')) {
            [$width, $height, $type, $attr] = \getimagesize($file);
            $this->assertEquals(640, $width);
            $this->assertEquals(480, $height);
            $this->assertEquals(\constant('IMAGETYPE_JPEG'), $type);
        } else {
            $this->assertEquals('jpg', \pathinfo($file, \PATHINFO_EXTENSION));
        }
        if (\file_exists($file)) {
            \unlink($file);
        }
    }
}
