<?php

namespace Faker\Test\Provider;

use Faker\Provider\Lorem;
use PHPUnit\Framework\TestCase;

final class LoremTest extends TestCase
{
    public function testTextThrowsExceptionWhenAskedTextSizeLessThan5(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Lorem::text(4);
    }

    public function testTextReturnsWordsWhenAskedSizeLessThan25(): void
    {
        $this->assertEquals('Word word word word.', TestableLorem::text(24));
    }

    public function testTextReturnsSentencesWhenAskedSizeLessThan100(): void
    {
        $this->assertEquals('This is a test sentence. This is a test sentence. This is a test sentence.', TestableLorem::text(99));
    }

    public function testTextReturnsParagraphsWhenAskedSizeGreaterOrEqualThanThan100(): void
    {
        $this->assertEquals('This is a test paragraph. It has three sentences. Exactly three.', TestableLorem::text(100));
    }

    public function testSentenceWithZeroNbWordsReturnsEmptyString(): void
    {
        $this->assertEquals('', Lorem::sentence(0));
    }

    public function testSentenceWithNegativeNbWordsReturnsEmptyString(): void
    {
        $this->assertEquals('', Lorem::sentence(-1));
    }

    public function testParagraphWithZeroNbSentencesReturnsEmptyString(): void
    {
        $this->assertEquals('', Lorem::paragraph(0));
    }

    public function testParagraphWithNegativeNbSentencesReturnsEmptyString(): void
    {
        $this->assertEquals('', Lorem::paragraph(-1));
    }

    public function testSentenceWithPositiveNbWordsReturnsAtLeastOneWord(): void
    {
        $sentence = Lorem::sentence(1);

        $this->assertGreaterThan(1, \strlen($sentence));
        $this->assertGreaterThanOrEqual(1, \count(\explode(' ', $sentence)));
    }

    public function testParagraphWithPositiveNbSentencesReturnsAtLeastOneWord(): void
    {
        $paragraph = Lorem::paragraph(1);

        $this->assertGreaterThan(1, \strlen($paragraph));
        $this->assertGreaterThanOrEqual(1, \count(\explode(' ', $paragraph)));
    }

    public function testWordssAsText(): void
    {
        $words = TestableLorem::words(2, true);

        $this->assertEquals('word word', $words);
    }

    public function testSentencesAsText(): void
    {
        $sentences = TestableLorem::sentences(2, true);

        $this->assertEquals('This is a test sentence. This is a test sentence.', $sentences);
    }

    public function testParagraphsAsText(): void
    {
        $paragraphs = TestableLorem::paragraphs(2, true);

        $expected = "This is a test paragraph. It has three sentences. Exactly three.\n\nThis is a test paragraph. It has three sentences. Exactly three.";
        $this->assertEquals($expected, $paragraphs);
    }
}

final class TestableLorem extends Lorem
{
    public static function word(): string
    {
        return 'word';
    }

    public static function sentence($nbWords = 5, $variableNbWords = true): string
    {
        return 'This is a test sentence.';
    }

    public static function paragraph($nbSentences = 3, $variableNbSentences = true): string
    {
        return 'This is a test paragraph. It has three sentences. Exactly three.';
    }
}
