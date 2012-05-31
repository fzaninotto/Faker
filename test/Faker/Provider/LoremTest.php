<?php

namespace Faker\Test\Provider;

use Faker\Provider\Lorem;
use Faker\Generator;

class LoremTest extends \PHPUnit_Framework_TestCase
{
	public function testText()
	{
		$generator = new Generator();
		$provider = new TestableLorem($generator);
		$singleParagraph = 'This is a test paragraph.';
		$this->assertEquals($singleParagraph, $provider->text(51));
		$this->assertEquals($singleParagraph . "\n" . $singleParagraph, $provider->text(52));
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
}

class TestableLorem extends Lorem
{
	public static function paragraph($nbSentences = 3)
	{
		// 25 characters
		return 'This is a test paragraph.';
	}
}