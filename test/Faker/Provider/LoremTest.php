<?php

namespace Faker\Test\Provider;

use Faker\Provider\Lorem;
use PHPUnit\Framework\TestCase;

class LoremTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextThrowsExceptionWhenAskedTextSizeLessThan5()
    {
        Lorem::text(4);
    }

    public function testTextReturnsWordsWhenAskedSizeLessThan25()
    {
        $this->assertEquals('Word word word word.', TestableLorem::text(24));
    }

    public function testTextReturnsSentencesWhenAskedSizeLessThan100()
    {
        $this->assertEquals('This is a test sentence. This is a test sentence. This is a test sentence.', TestableLorem::text(99));
    }

    public function testTextReturnsParagraphsWhenAskedSizeGreaterOrEqualThanThan100()
    {
        $this->assertEquals('This is a test paragraph. It has three sentences. Exactly three.', TestableLorem::text(100));
    }

    public function testSentenceWithZeroNbWordsReturnsEmptyString()
    {
        $this->assertEquals('', Lorem::sentence(0));
    }

    public function testSentenceWithNegativeNbWordsReturnsEmptyString()
    {
        $this->assertEquals('', Lorem::sentence(-1));
    }

    public function testParagraphWithZeroNbSentencesReturnsEmptyString()
    {
        $this->assertEquals('', Lorem::paragraph(0));
    }

    public function testParagraphWithNegativeNbSentencesReturnsEmptyString()
    {
        $this->assertEquals('', Lorem::paragraph(-1));
    }

    public function testSentenceWithPositiveNbWordsReturnsAtLeastOneWord()
    {
         $sentence = Lorem::sentence(1);

        $this->assertGreaterThan(1, strlen($sentence));
        $this->assertGreaterThanOrEqual(1, count(explode(' ', $sentence)));
    }

    public function testParagraphWithPositiveNbSentencesReturnsAtLeastOneWord()
    {
        $paragraph = Lorem::paragraph(1);

        $this->assertGreaterThan(1, strlen($paragraph));
        $this->assertGreaterThanOrEqual(1, count(explode(' ', $paragraph)));
    }

    public function testWordssAsText()
    {
        $words = TestableLorem::words(2, true);

        $this->assertEquals('word word', $words);
    }

    public function testSentencesAsText()
    {
        $sentences = TestableLorem::sentences(2, true);

        $this->assertEquals('This is a test sentence. This is a test sentence.', $sentences);
    }

    public function testParagraphsAsText()
    {
        $paragraphs = TestableLorem::paragraphs(2, true);

        $expected = "This is a test paragraph. It has three sentences. Exactly three.\n\nThis is a test paragraph. It has three sentences. Exactly three.";
        $this->assertEquals($expected, $paragraphs);
    }

    public function testTextMinLengthReturnsParagraphsWhenAskedSizeGreaterThanOrEqualTo100()
    {
        $text = TestableLorem::textMinLength(100);
        $paragraph = 'This is a test paragraph. It has three sentences. Exactly three.';
        $this->assertEquals($paragraph.' '.$paragraph, $text);
    }

    public function testTextMinLengthReturnsSentencesWhenAskedSizeLessThan100AndGreaterThanOrEqualTo25()
    {
        $text = TestableLorem::textMinLength(99);
        $sentence = 'This is a test sentence.';
        $expected = $sentence.' '.$sentence.' '.$sentence.' '.$sentence;
        $this->assertEquals($expected, $text);
    }

    public function testTextMinLengthReturnsWordsWhenAskedSizeLessThan25()
    {
        $text = TestableLorem::textMinLength(24);
        $this->assertEquals('Word word word word word.', $text);
    }

    public function testTextMinLengthReturnsStringsLongerOrEqualToThanAskedSize()
    {
        $sizes = range(1,101,25);
        foreach($sizes AS $size){
            $text = TestableLorem::textMinLength($size);
            $this->assertGreaterThanOrEqual($size, strlen($text));
        }
    }
}

class TestableLorem extends Lorem
{

    public static function word()
    {
        return 'word';
    }

    public static function sentence($nbWords = 5, $variableNbWords = true)
    {
        return 'This is a test sentence.';
    }

    public static function paragraph($nbSentences = 3, $variableNbSentences = true)
    {
        return 'This is a test paragraph. It has three sentences. Exactly three.';
    }
}
