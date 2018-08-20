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
    /** @var Text*/
    private $textObject;

    public function setUp()
    {
        $this->textClass = new ReflectionClass(Text::class);
        $generator = new Generator();
        $this->textObject = new Text($generator);
    }

    /**
     * @param string $name
     * @return ReflectionMethod
     */
    protected function getMethod(string $name)
    {
        $method = $this->textClass->getMethod($name);
        $method->setAccessible(true);

        return $method;
    }

    protected function strlen($text)
    {
        return $this->getMethod('strlen')->invokeArgs(null, [$text]);
    }

    protected function split($text) : array
    {
        return $this->getMethod('split')->invokeArgs(null, [$text]);
    }

    protected function explode($text) : array
    {
        return $this->getMethod('explode')->invokeArgs(null, [$text]);
    }

    protected function text($maxLength) : string
    {
        return $this->textObject->text($maxLength);
    }

    protected function realText($maxLength, $indexSize = null) : string
    {
        if ($indexSize === null) {
            return $this->textObject->realText($maxLength);
        }
        return $this->textObject->realText($maxLength, $indexSize);
    }

    function testBasis()
    {
        $len = $this->strlen('あいうえおアイウエオaiueo阿伊宇江男「」『』。');
        $this->assertEquals(25, $len);

        $split = $this->split('あアa愛」。');
        $this->assertEquals(['あ','ア','a','愛','」','。'], $split);

        $explode = $this->explode('こんにちは、いい天気ですね。ご機嫌いかが？');
        $this->assertEquals(['こんにちは、','いい天気ですね。','ご機嫌いかが？'], $explode);

        $explode = $this->explode('ええ！ジョパンニは今日も良い天気だと言ったのかい？！');
        $this->assertEquals(['ええ！', 'ジョパンニは','今日も良い天気だと言ったのかい？！'], $explode);

        $texts = $this->getMethod('getExplodedText')->invokeArgs($this->textObject, []);
        foreach ($texts as $i => $text) {
            $this->assertLessThanOrEqual(Text::MAX_LENGTH, $this->strlen($text));
        }
    }

    /** @test */
    function testAppendEnd()
    {
        $method = $this->getMethod('appendEnd');
        $trueConverted = function ($from, $to) use($method) {
            $this->assertEquals(
                $to,
                $method->invokeArgs(null, [$from])
            );
        };

        $trueConverted(
            'こんにちは',
            'こんにちは。'
        );
        $trueConverted(
            '「こんにちは」',
            '「こんにちは」'
        );
        $trueConverted(
            '「こんにちは。',
            '「こんにちは」'
        );
        $trueConverted(
            '「ぼくは、',
            '「ぼくは」'
        );
        $trueConverted(
            '『ぼくは、',
            '『ぼくは』'
        );
    }

    /** @test */
    function testRealText()
    {
        $text = null;

        try { $this->realText(0); throw new \Exception(); }
        catch (\Exception $e) { $text = $e->getMessage(); }
        $this->assertEquals('maxNbChars must be at least 10', $text);

        try { $this->realText(200, 0); throw new \Exception(); }
        catch (\Exception $e) { $text = $e->getMessage(); }
        $this->assertEquals('indexSize must be at least 1', $text);

        try { $this->realText(200, 6); throw new \Exception(); }
        catch (\Exception $e) { $text = $e->getMessage(); }
        $this->assertEquals('indexSize must be at most 5', $text);

        \mt_srand(microtime(true));

        $text = $this->realText(1000);
        $this->assertNotEquals(false, strpos($text, "\n"));

        foreach (range(10,500) as $i) {
            $text = $this->realText($i, 1);
            $this->assertLessThanOrEqual($i, $this->strlen($text));

            $text = $this->realText($i, 5);
            $this->assertLessThanOrEqual($i, $this->strlen($text));
        }

    }

    /** @test */
    function testText()
    {
        $text = null;

        try { $this->text(9); throw new \Exception(); }
        catch (\Exception $e) { $text = $e->getMessage(); }
        $this->assertEquals('maxNbChars must be at least 10', $text);

        \mt_srand(microtime(true));
        foreach (range(10,500) as $i) {
            $text = $this->text($i);
            $this->assertLessThanOrEqual($i, $this->strlen($text));

            $this->assertEquals(false, strpos($text, "\n"));
        }
    }
}
