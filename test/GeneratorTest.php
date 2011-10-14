<?php

require_once __DIR__ . '/../src/Generator.php';

use Faker\Generator;

class GeneratorTest extends PHPUnit_Framework_TestCase
{
	public function testGetFormatterReturnsCallable()
	{
		$generator = new Generator;
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$expected = array($provider, 'fooFormatter');
		$this->assertTrue(is_callable($generator->getFormatter('fooFormatter')));
	}

	public function testGetFormatterReturnsCorrectFormatter()
	{
		$generator = new Generator;
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$expected = array($provider, 'fooFormatter');
		$this->assertEquals($expected, $generator->getFormatter('fooFormatter'));
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testGetFormatterThrowsExceptionOnIncorrectProvider()
	{
		$generator = new Generator;
		$generator->getFormatter('fooFormatter');
	}

	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testGetFormatterThrowsExceptionOnIncorrectFormatter()
	{
		$generator = new Generator;
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$generator->getFormatter('barFormatter');
	}
	
	public function testFormatCallsFormatterOnProvider()
	{
		$generator = new Generator;
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$this->assertEquals('foobar', $generator->format('fooFormatter'));
	}

	public function testFormatTransfersArgumentsToFormatter()
	{
		$generator = new Generator;
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$this->assertEquals('bazfoo', $generator->format('fooFormatterWithArguments', array('foo')));
	}

	public function testRandomDigitReturnsInteger()
	{
		$this->assertTrue(is_integer(Generator::randomDigit()));
	}

	public function testRandomDigitReturnsDigit()
	{
		$this->assertTrue(Generator::randomDigit() >= 0);
		$this->assertTrue(Generator::randomDigit() < 10);
	}

	public function testRandomLetterReturnsString()
	{
		$this->assertTrue(is_string(Generator::randomLetter()));
	}

	public function testRandomLetterReturnsSingleLetter()
	{
		$this->assertEquals(1, strlen(Generator::randomLetter()));
	}

	public function testRandomLetterReturnsLowercaseLetter()
	{
		$lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
		$this->assertTrue(strpos($lowercaseLetters, Generator::randomLetter()) !== false);
	}
	
	public function testRandomElementReturnsElementFromArray()
	{
		$elements = array('23', 'e', 32, '#');
		$this->assertContains(Generator::randomElement($elements), $elements);
	}

	public function testNumerifyReturnsSameStringWhenItContainsNoHashSign()
	{
		$this->assertEquals('fooBar?', Generator::numerify('fooBar?'));
	}

	public function testNumerifyReturnsStringWithHashSignsReplacedByDigits()
	{
		$this->assertRegExp('/foo\dBa\dr/', Generator::numerify('foo#Ba#r'));
	}

	public function testLexifyReturnsSameStringWhenItContainsNoQuestionMark()
	{
		$this->assertEquals('fooBar#', Generator::lexify('fooBar#'));
	}

	public function testNumerifyReturnsStringWithQuestionMarksReplacedByLetters()
	{
		$this->assertRegExp('/foo[a-z]Ba[a-z]r/', Generator::lexify('foo?Ba?r'));
	}
	
	public function testBothifyCombinesNumerifyAndLexify()
	{
		$this->assertRegExp('/foo[a-z]Ba\dr/', Generator::bothify('foo?Ba#r'));
	}
	
	public function testParseReturnsSameStringWhenItContainsNoCurlyBraces()
	{
		$generator = new Generator();
		$this->assertEquals('fooBar#?', $generator->parse('fooBar#?'));
	}

	public function testParseReturnsStringWithTokensReplacedByFormatters()
	{
		$generator = new Generator();
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$this->assertEquals('This is foobar a text with foobar', $generator->parse('This is {{fooFormatter}} a text with {{ fooFormatter }}'));
	}

	public function testMagicGetCallsFormat()
	{
		$generator = new Generator;
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$this->assertEquals('foobar', $generator->fooFormatter);
	}

	public function testMagicCallCallsFormat()
	{
		$generator = new Generator;
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$this->assertEquals('foobar', $generator->fooFormatter());
	}

	public function testMagicCallCallsFormatWithArguments()
	{
		$generator = new Generator;
		$provider = new FooProvider();
		$generator->addProvider($provider);
		$this->assertEquals('bazfoo', $generator->fooFormatterWithArguments('foo'));
	}

}

class FooProvider
{
	public function fooFormatter()
	{
		return 'foobar';
	}
	
	public function fooFormatterWithArguments($value = '')
	{
		return 'baz' . $value;
	}
}