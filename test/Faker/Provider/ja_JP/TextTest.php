<?php

namespace Faker\Test\Provider\ja_JP;

use ReflectionClass;
use ReflectionMethod;
use Faker\Provider\ja_JP\Text;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    /** @var ReflectionClass */
    private $textClass;
    /** @var Text */
    private $textObject;

    public function setUp()
    {
        $this->textClass = new ReflectionClass('\Faker\Provider\ja_JP\Text');
        $generator = new Generator();
        $this->textObject = new Text($generator);
    }

    /**
     * @param string $name
     * @return ReflectionMethod
     */
    protected function getMethod($name)
    {
        $method = $this->textClass->getMethod($name);
        $method->setAccessible(true);

        return $method;
    }

    protected function strlen($text)
    {
        return $this->getMethod('strlen')->invokeArgs(null, array($text));
    }

    protected function split($text)
    {
        return $this->getMethod('split')->invokeArgs(null, array($text));
    }

    protected function explode($text)
    {
        return $this->getMethod('explode')->invokeArgs(null, array($text));
    }

    protected function appendEnd($text)
    {
        return $this->getMethod('appendEnd')->invokeArgs(null, array($text));
    }

    protected function text($maxLength)
    {
        return $this->textObject->text($maxLength);
    }

    protected function realText($maxLength, $indexSize = null)
    {
        if ($indexSize === null) {
            return $this->textObject->realText($maxLength);
        }
        return $this->textObject->realText($maxLength, $indexSize);
    }

    /** @test */
    public function testBasis()
    {
        $len = $this->strlen('あいうえおアイウエオaiueo阿伊宇江男「」『』。');
        $this->assertEquals(25, $len);

        $split = $this->split('あアa愛」。');
        $this->assertEquals(array('あ', 'ア', 'a', '愛', '」', '。'), $split);

        $explode = $this->explode('こんにちは、いい天気ですね。ご機嫌いかが？');
        $this->assertEquals(array('こんにちは、', 'いい天気ですね。', 'ご機嫌いかが？'), $explode);

        $explode = $this->explode('ええ！ジョパンニは今日も良い天気だと言ったのかい？！');
        $this->assertEquals(array('ええ！', 'ジョパンニは', '今日も良い天気だと', '言ったのかい？！'), $explode);

        $texts = $this->getMethod('getExplodedText')->invokeArgs($this->textObject, array());
        foreach ($texts as $i => $text) {
            $this->assertLessThanOrEqual(Text::MAX_LENGTH, $this->strlen($text));
        }
    }

    /** @test appendEnd */
    public function testAppendEnd()
    {
        $method = $this->getMethod('appendEnd');

        $this->assertEquals(
            'こんにちは。',
            $this->appendEnd('こんにちは')
        );

        $this->assertEquals(
            '「こんにちは」',
            $this->appendEnd('「こんにちは」')
        );

        $this->assertEquals(
            '「こんにちは」',
            $this->appendEnd('「こんにちは。')
        );

        $this->assertEquals(
            '「ぼくは」',
            $this->appendEnd('「ぼくは、')
        );

        $this->assertEquals(
            '『ぼくは』',
            $this->appendEnd('『ぼくは、')
        );
    }

    /** @test realText */
    public function testRealText()
    {
        $text = null;

        try {
            $this->realText(0);
            throw new \Exception();
        } catch (\Exception $e) {
            $text = $e->getMessage();
        }
        $this->assertEquals('maxNbChars must be at least 10', $text);

        try {
            $this->realText(200, 0);
            throw new \Exception();
        } catch (\Exception $e) {
            $text = $e->getMessage();
        }
        $this->assertEquals('indexSize must be at least 1', $text);

        try {
            $this->realText(200, 6);
            throw new \Exception();
        } catch (\Exception $e) {
            $text = $e->getMessage();
        }
        $this->assertEquals('indexSize must be at most 5', $text);

        \mt_srand(microtime(true));

        foreach (range(10, 500) as $i) {
            $text = $this->realText($i, 1);
            $this->assertLessThanOrEqual($i, $this->strlen($text));

            $text = $this->realText($i, 5);
            $this->assertLessThanOrEqual($i, $this->strlen($text));
        }
    }

    /** @test text */
    public function testText()
    {
        $text = null;

        try {
            $this->text(9);
            throw new \Exception();
        } catch (\Exception $e) {
            $text = $e->getMessage();
        }
        $this->assertEquals('maxNbChars must be at least 10', $text);

        \mt_srand(microtime(true));
        foreach (range(10, 500) as $i) {
            $text = $this->text($i);
            $this->assertLessThanOrEqual($i, $this->strlen($text));

            $this->assertEquals(false, strpos($text, "\n"));
        }
    }
}
