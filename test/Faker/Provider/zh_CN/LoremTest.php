<?php

namespace Faker\Test\Provider\zh_CN;

use Faker\Provider\zh_CN\Lorem;
use PHPUnit\Framework\TestCase;

class LoremTest extends TestCase
{
    public function testWordCharacterNumberLessThanOrEqual4()
    {
        $this->assertLessThanOrEqual(4, mb_strlen(Lorem::word()));
    }

    public function testWordCharacterNumberEquals()
    {
        $this->assertEquals(1, mb_strlen(Lorem::word(1)));
        $this->assertEquals(2, mb_strlen(Lorem::word(2)));
        $this->assertEquals(3, mb_strlen(Lorem::word(3)));
        $this->assertEquals(4, mb_strlen(Lorem::word(4)));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWordThrowsExceptionWhenAskedCharacterNumberMoreThan7()
    {
        Lorem::word(8);
    }

    public function testWordCharacterNumberFrequencyDistribution()
    {
        $count = array(0, 0, 0, 0, 0);
        for ($i = 0; $i < 10000; ++$i)
        {
            ++$count[mb_strlen(Lorem::word())];
        }
        $this->assertLessThan(1500, $count[1]);
        $this->assertLessThan(6500, $count[2]);
        $this->assertLessThan(1500, $count[3]);
        $this->assertLessThan(2500, $count[4]);
        $this->assertGreaterThan(500, $count[1]);
        $this->assertGreaterThan(5500, $count[2]);
        $this->assertGreaterThan(500, $count[3]);
        $this->assertGreaterThan(1500, $count[4]);
    }

    public function testWordNoSpacing()
    {
        $this->assertNotContains('/\\s/u', Lorem::word());
    }

    public function testSentenceNoSpacing()
    {
        $this->assertNotRegExp('/\\s/u', Lorem::word());
    }

    public function testParagraphNoSpacing()
    {
        $this->assertNotContains('/\\s/u', Lorem::word());
    }

    public function testTextNoSpacing()
    {
        $this->assertNotContains('/\\s/u', Lorem::text(5));
        $this->assertNotContains('/\\s/u', Lorem::text(15));
        $this->assertNotContains('/\\s/u', Lorem::text(50));
        $this->assertNotContains('/\\s/u', Lorem::text(100));
        $this->assertNotContains('/\\s/u', Lorem::text(200));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testTextThrowsExceptionWhenAskedTextSizeLessThan2()
    {
        Lorem::text(1);
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
        $this->assertGreaterThan(1, mb_strlen($sentence));
    }

    public function testParagraphWithPositiveNbSentencesReturnsAtLeastOneWord()
    {
        $paragraph = Lorem::paragraph(1);
        $this->assertGreaterThan(1, mb_strlen($paragraph));
    }

    public function testWordsAsText()
    {
        $this->assertInternalType('string', Lorem::words(3, true));
    }

    public function testSentencesAsText()
    {
        $this->assertInternalType('string', Lorem::sentences(3, true));
    }

    public function testParagraphsAsText()
    {
        $this->assertInternalType('string', Lorem::paragraphs(3, true));
    }

    public function testTextLengthLessThanOrEqualMaxCharacter()
    {
        $this->assertLessThanOrEqual(5, mb_strlen(Lorem::text(5)));
        $this->assertLessThanOrEqual(15, mb_strlen(Lorem::text(15)));
        $this->assertLessThanOrEqual(50, mb_strlen(Lorem::text(50)));
        $this->assertLessThanOrEqual(100, mb_strlen(Lorem::text(100)));
        $this->assertLessThanOrEqual(200, mb_strlen(Lorem::text(200)));
    }

    public function testWordNotEndsWithPeriod()
    {
        $this->assertStringEndsNotWith('。', Lorem::word());
    }

    public function testSentenceEndsWithPeriod()
    {
        $this->assertStringEndsWith('。', Lorem::sentence());
    }

    public function testParagraphEndsWithPeriod()
    {
        $this->assertStringEndsWith('。', Lorem::paragraph());
    }

    public function testTextEndsWithPeriod()
    {
        $this->assertStringEndsWith('。', Lorem::text(5));
        $this->assertStringEndsWith('。', Lorem::text(15));
        $this->assertStringEndsWith('。', Lorem::text(50));
        $this->assertStringEndsWith('。', Lorem::text(100));
        $this->assertStringEndsWith('。', Lorem::text(200));
    }
}