<?php

namespace Faker\Test\Provider;

use Faker\Provider\Lorem;
use Faker\Test\Fixture;
use PHPUnit\Framework\TestCase;

class LoremTest extends TestCase
{

    public function testTextThrowsExceptionWhenAskedTextSizeLessThan5()
    {
        $this->expectException(\InvalidArgumentException::class);

        Lorem::text(4);
    }

    public function testTextReturnsWordsWhenAskedSizeLessThan25()
    {
        $this->assertEquals('Word word word word.', Fixture\Provider\Lorem\TestableLorem::text(24));
    }

    public function testTextReturnsSentencesWhenAskedSizeLessThan100()
    {
        $this->assertEquals('This is a test sentence. This is a test sentence. This is a test sentence.', Fixture\Provider\Lorem\TestableLorem::text(99));
    }

    public function testTextReturnsParagraphsWhenAskedSizeGreaterOrEqualThanThan100()
    {
        $this->assertEquals('This is a test paragraph. It has three sentences. Exactly three.', Fixture\Provider\Lorem\TestableLorem::text(100));
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
        $words = Fixture\Provider\Lorem\TestableLorem::words(2, true);

        $this->assertEquals('word word', $words);
    }

    public function testSentencesAsText()
    {
        $sentences = Fixture\Provider\Lorem\TestableLorem::sentences(2, true);

        $this->assertEquals('This is a test sentence. This is a test sentence.', $sentences);
    }

    public function testParagraphsAsText()
    {
        $paragraphs = Fixture\Provider\Lorem\TestableLorem::paragraphs(2, true);

        $expected = "This is a test paragraph. It has three sentences. Exactly three.\n\nThis is a test paragraph. It has three sentences. Exactly three.";
        $this->assertEquals($expected, $paragraphs);
    }
}
