<?php

namespace Faker\Test\Provider\zh_CN;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    protected static function getEncoding()
    {
        return static::readAttribute('Faker\Provider\zh_CN\Text', 'encoding');
    }

    public static function getGenerator()
    {
        return Factory::create('zh_CN');
    }

    public function testRealTextNoSpacing()
    {
        $faker = static::getGenerator();
        $this->assertNotRegExp('/\\s/u', $faker->realText());
    }

    public function testRealTextEndPunctuation()
    {
        $notEndPunct = $this->readAttribute('Faker\Provider\zh_CN\Text', 'notEndPunct');
        $endPunct = $this->readAttribute('Faker\Provider\zh_CN\Text', 'endPunct');
        $faker = static::getGenerator();

        $this->assertTrue(in_array(mb_substr($faker->realText(), -1, 1, static::getEncoding()), $endPunct));
        $this->assertFalse(in_array(mb_substr($faker->realText(), -1, 1, static::getEncoding()), $notEndPunct));
    }

    public function testRealTextBeginPunctuation()
    {
        $notBeginPunct = $this->readAttribute('Faker\Provider\zh_CN\Text', 'notBeginPunct');
        $faker = static::getGenerator();

        $this->assertFalse(in_array(mb_substr($faker->realText(), 0, 1, static::getEncoding()), $notBeginPunct));
    }
}
