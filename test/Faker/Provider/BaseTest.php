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

    public function testRandomNumberAcceptsMinMax()
    {
        $min = 5;
        $max = 6;

        $this->assertGreaterThanOrEqual($min, BaseProvider::randomNumber($min, $max));
        $this->assertGreaterThanOrEqual(BaseProvider::randomNumber($min, $max), $max);
    }

    public function testNumberBetween()
    {
        $min = 5;
        $max = 6;

        $this->assertGreaterThanOrEqual($min, BaseProvider::numberBetween($min, $max));
        $this->assertGreaterThanOrEqual(BaseProvider::numberBetween($min, $max), $max);
    }

    public function testRandomFloat()
    {
        $min = 4;
        $max = 10;
        $nbMaxDecimals = 8;

        $result = BaseProvider::randomFloat($nbMaxDecimals, $min, $max);

        $parts = explode('.', $result);

        $this->assertInternalType('float', $result);
        $this->assertGreaterThanOrEqual($min, $result);
        $this->assertLessThanOrEqual($max, $result);
        $this->assertLessThanOrEqual($nbMaxDecimals, strlen($parts[1]));
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

    public function testRandomElementReturnsElementFromAssociativeArray()
    {
        $elements = array('tata' => '23', 'toto' => 'e', 'tutu' => 32, 'titi' => '#');
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

    public function testOptionalReturnsProviderValueWhenCalledWithWeight1()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $this->assertNotNull($faker->optional(1)->randomDigit);
    }

    public function testOptionalReturnsNullWhenCalledWithWeight0()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $this->assertNull($faker->optional(0)->randomDigit);
    }

    public function testOptionalAllowsChainingPropertyAccess()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \ArrayObject(array(1))); // hack because method_exists forbids stubs
        $this->assertEquals(1, $faker->optional(1)->count);
        $this->assertNull($faker->optional(0)->count);
    }

    public function testOptionalAllowsChainingMethodCall()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \ArrayObject(array(1))); // hack because method_exists forbids stubs
        $this->assertEquals(1, $faker->optional(1)->count());
        $this->assertNull($faker->optional(0)->count());
    }

    public function testOptionalAllowsChainingProviderCallRandomlyReturnNull()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $values = array();
        for ($i=0; $i < 10; $i++) {
            $values[]= $faker->optional()->randomDigit;
        }
        $this->assertContains(null, $values);
    }

    public function testUniqueAllowsChainingPropertyAccess()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \ArrayObject(array(1))); // hack because method_exists forbids stubs
        $this->assertEquals(1, $faker->unique()->count);
    }

    public function testUniqueAllowsChainingMethodCall()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \ArrayObject(array(1))); // hack because method_exists forbids stubs
        $this->assertEquals(1, $faker->unique()->count());
    }

    public function testUniqueReturnsOnlyUniqueValues()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $values = array();
        for ($i=0; $i < 10; $i++) {
            $values[]= $faker->unique()->randomDigit;
        }
        sort($values);
        $this->assertEquals(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9), $values);
    }

    /**
     * @expectedException OverflowException
     */
    public function testUniqueThrowsExceptionWhenNoUniqueValueCanBeGenerated()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        for ($i=0; $i < 11; $i++) {
            $faker->unique()->randomDigit;
        }
    }

    public function testUniqueCanResetUniquesWhenPassedTrueAsArgument()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $values = array();
        for ($i=0; $i < 10; $i++) {
            $values[]= $faker->unique()->randomDigit;
        }
        $values[]= $faker->unique(true)->randomDigit;
        for ($i=0; $i < 9; $i++) {
            $values[]= $faker->unique()->randomDigit;
        }
        sort($values);
        $this->assertEquals(array(0, 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9), $values);
    }
}
