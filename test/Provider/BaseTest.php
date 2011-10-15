<?php

namespace Faker\Test\Provider;

require_once __DIR__ . '/../../src/Provider/Base.php';

use Faker\Provider\Base as BaseProvider;

class BaseTest extends \PHPUnit_Framework_TestCase
{
	public function testRandomDigitReturnsInteger()
	{
		$this->assertTrue(is_integer(TestProvider::randomDigit()));
	}

	public function testRandomDigitReturnsDigit()
	{
		$this->assertTrue(TestProvider::randomDigit() >= 0);
		$this->assertTrue(TestProvider::randomDigit() < 10);
	}

	public function testRandomLetterReturnsString()
	{
		$this->assertTrue(is_string(TestProvider::randomLetter()));
	}

	public function testRandomLetterReturnsSingleLetter()
	{
		$this->assertEquals(1, strlen(TestProvider::randomLetter()));
	}

	public function testRandomLetterReturnsLowercaseLetter()
	{
		$lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
		$this->assertTrue(strpos($lowercaseLetters, TestProvider::randomLetter()) !== false);
	}
	
	public function testRandomElementReturnsElementFromArray()
	{
		$elements = array('23', 'e', 32, '#');
		$this->assertContains(TestProvider::randomElement($elements), $elements);
	}

	public function testNumerifyReturnsSameStringWhenItContainsNoHashSign()
	{
		$this->assertEquals('fooBar?', TestProvider::numerify('fooBar?'));
	}

	public function testNumerifyReturnsStringWithHashSignsReplacedByDigits()
	{
		$this->assertRegExp('/foo\dBa\dr/', TestProvider::numerify('foo#Ba#r'));
	}

	public function testLexifyReturnsSameStringWhenItContainsNoQuestionMark()
	{
		$this->assertEquals('fooBar#', TestProvider::lexify('fooBar#'));
	}

	public function testNumerifyReturnsStringWithQuestionMarksReplacedByLetters()
	{
		$this->assertRegExp('/foo[a-z]Ba[a-z]r/', TestProvider::lexify('foo?Ba?r'));
	}
	
	public function testBothifyCombinesNumerifyAndLexify()
	{
		$this->assertRegExp('/foo[a-z]Ba\dr/', TestProvider::bothify('foo?Ba#r'));
	}
	
}

class TestProvider extends BaseProvider
{
	public static function randomDigit()
	{
		return parent::randomDigit();
	}
	
	public static function randomLetter()
	{
		return parent::randomLetter();
	}

	public static function randomElement($array)
	{
		return parent::randomElement($array);
	}

	public static function numerify($string)
	{
		return parent::numerify($string);
	}
	
	public static function lexify($string)
	{
		return parent::lexify($string);
	}
	
	public static function bothify($string)
	{
		return parent::bothify($string);
	}

}