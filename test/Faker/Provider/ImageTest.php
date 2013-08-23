<?php

namespace Faker\Test\Provider;

use Faker\Provider\Image;

class ImageTest extends \PHPUnit_Framework_TestCase
{

    public function testUrlWithDefaults()
    {
        $this->assertEquals(Image::imageUrl(), 'http://lorempixel.com/1160/1160/');
    }
    
    public function testUrlWithDimensions()
    {
        $this->assertEquals(Image::imageUrl(800, 400), 'http://lorempixel.com/800/400/');
    }
    
    public function testUrlWithDimensionsAndCategory()
    {
        $this->assertEquals(Image::imageUrl(800, 400, 'nature'), 'http://lorempixel.com/800/400/nature/');
    }
    
    public function testUrlWithDimensionsAndBadCategory()
    {
        $this->assertEquals(Image::imageUrl(800, 400, 'bullhonky'), 'http://lorempixel.com/800/400/');
    }
    
    public function testDownloadWithDefaults() {
        $file = Image::image('/tmp');
        $this->assertFileExists($file);
        if (file_exists($file)) unlink($file);
    }
    
    public function testMagicCategory() {
        $this->assertEquals(Image::peopleImageUrl(800, 400, 'nature'), 'http://lorempixel.com/800/400/nature/');
        // $faker = \Faker\Factory::create();
        // $this->assertEquals(Image::peopleImageUrl(800, 400, 'nature'), 'http://lorempixel.com/800/400/nature/');
        
    }

}
