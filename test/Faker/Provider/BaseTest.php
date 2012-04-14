<?php

namespace Faker\Test\Provider;

use Faker\Provider\Base as BaseProvider;

class BaseTest extends \PHPUnit_Framework_TestCase
{
	public function testRandomDigitReturnsInteger()
	{
		$this->assertTrue(is_integer(BaseProvider::randomDigit()));
	}

	public function testRandomDigitReturnsDigit()
	{
		$this->assertTrue(BaseProvider::randomDigit() >= 0);
		$this->assertTrue(BaseProvider::randomDigit() < 10);
	}

	public function testRandomDigitNotNullReturnsNotNullDigit()
	{
		$this->assertTrue(BaseProvider::randomDigitNotNull() > 0);
		$this->assertTrue(BaseProvider::randomDigitNotNull() < 10);
	}
	
	public function testRandomNumberReturnsInteger()
	{
		$this->assertTrue(is_integer(BaseProvider::randomNumber()));
	}

	public function testRandomNumberReturnsDigit()
	{
		$this->assertTrue(BaseProvider::randomNumber(3) >= 0);
		$this->assertTrue(BaseProvider::randomNumber(3) < 1000);
	}

	public function testRandomLetterReturnsString()
	{
		$this->assertTrue(is_string(BaseProvider::randomLetter()));
	}

	public function testRandomLetterReturnsSingleLetter()
	{
		$this->assertEquals(1, strlen(BaseProvider::randomLetter()));
	}

	public function testRandomLetterReturnsLowercaseLetter()
	{
		$lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
		$this->assertTrue(strpos($lowercaseLetters, BaseProvider::randomLetter()) !== false);
	}
	
	public function testRandomElementReturnsElementFromArray()
	{
		$elements = array('23', 'e', 32, '#');
		$this->assertContains(BaseProvider::randomElement($elements), $elements);
	}

	public function testNumerifyReturnsSameStringWhenItContainsNoHashSign()
	{
		$this->assertEquals('fooBar?', BaseProvider::numerify('fooBar?'));
	}

	public function testNumerifyReturnsStringWithHashSignsReplacedByDigits()
	{
		$this->assertRegExp('/foo\dBa\dr/', BaseProvider::numerify('foo#Ba#r'));
	}

	public function testNumerifyReturnsStringWithPercentageSignsReplacedByDigits()
	{
		$this->assertRegExp('/foo\dBa\dr/', BaseProvider::numerify('foo%Ba%r'));
	}

	public function testNumerifyReturnsStringWithPercentageSignsReplacedByNotNullDigits()
	{
		$this->assertNotEquals('0', BaseProvider::numerify('%'));
	}

	public function testLexifyReturnsSameStringWhenItContainsNoQuestionMark()
	{
		$this->assertEquals('fooBar#', BaseProvider::lexify('fooBar#'));
	}

	public function testNumerifyReturnsStringWithQuestionMarksReplacedByLetters()
	{
		$this->assertRegExp('/foo[a-z]Ba[a-z]r/', BaseProvider::lexify('foo?Ba?r'));
	}
	
	public function testBothifyCombinesNumerifyAndLexify()
	{
		$this->assertRegExp('/foo[a-z]Ba\dr/', BaseProvider::bothify('foo?Ba#r'));
	}
	
}