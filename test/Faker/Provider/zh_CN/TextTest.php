<?php

namespace Faker\Test\Provider\zh_CN;

use Faker\Factory;
use Faker\Provider\zh_CN\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    protected static $class = 'Faker\Provider\zh_CN\Text';

    protected static function getEncoding()
    {
        return static::readAttribute(static::$class, 'encoding');
    }

    protected static function getBaseText()
    {
        return static::readAttribute(static::$class, 'baseText');
    }

    public static function getGenerator()
    {
        return Factory::create('zh_CN');
    }

    protected static function mb_substr($str, $start, $length = null)
    {
        return mb_substr($str, $start, $length, static::getEncoding());
    }

    protected static function mb_strlen($str)
    {
        return mb_strlen($str, static::getEncoding());
    }

    public function testUtf8Len()
    {
        $baseText = static::getBaseText();
        $this->assertEquals(static::mb_strlen($baseText), TextProxy::utf8_strlen_public($baseText));
    }

    public function testRealTextNoSpacing()
    {
        $faker = static::getGenerator();
        $this->assertNotRegExp('/\\s/u', $faker->realText());
    }

    public function testRealTextEndPunctuation()
    {
        $faker = static::getGenerator();

        $notEndPunctuations = static::readAttribute(static::$class, 'notEndPunctuations');
        $this->assertFalse(in_array(static::mb_substr($faker->realText(), -1, 1), $notEndPunctuations));

        $punctuations = static::readAttribute(static::$class, 'punctuations');
        $this->assertTrue(in_array(static::mb_substr($faker->realText(), -1, 1), $punctuations));
    }

    public function testRealTextBeginPunctuation()
    {
        $faker = static::getGenerator();

        $notBeginPunctuations = static::readAttribute(static::$class, 'notBeginPunctuations');
        $this->assertFalse(in_array(static::mb_substr($faker->realText(), 0, 1), $notBeginPunctuations));
    }

    public function testRealTextPunctuationPair()
    {
        $faker = static::getGenerator();

        $text = $faker->realText();
        $punctuationPairs = static::readAttribute(static::$class, 'punctuationPairs');
        foreach ($punctuationPairs as $left => $right) {
            $leftCount = substr_count($text, $left);
            $rightCount = substr_count($text, $right);
            $this->assertEquals($leftCount, $rightCount);
        }
    }
}

class TextProxy extends Text
{
    public static function utf8_strlen_public($text)
    {
        return static::utf8Strlen($text);
    }
}
