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

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testRandomNumberThrowsExceptionWhenCalledWithAMax()
    {
        BaseProvider::randomNumber(5, 200);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testRandomNumberThrowsExceptionWhenCalledWithATooHighNumberOfDigits()
    {
        BaseProvider::randomNumber(10);
    }

    public function testRandomNumberReturnsInteger()
    {
        $this->assertTrue(is_integer(BaseProvider::randomNumber()));
        $this->assertTrue(is_integer(BaseProvider::randomNumber(5, false)));
    }

    public function testRandomNumberReturnsDigit()
    {
        $this->assertTrue(BaseProvider::randomNumber(3) >= 0);
        $this->assertTrue(BaseProvider::randomNumber(3) < 1000);
    }

    public function testRandomNumberAcceptsStrictParamToEnforceNumberSize()
    {
        $this->assertEquals(5, strlen((string) BaseProvider::randomNumber(5, true)));
    }

    public function testNumberBetween()
    {
        $min = 5;
        $max = 6;

        $this->assertGreaterThanOrEqual($min, BaseProvider::numberBetween($min, $max));
        $this->assertGreaterThanOrEqual(BaseProvider::numberBetween($min, $max), $max);
    }

    public function testNumberBetweenAcceptsZeroAsMax()
    {
        $this->assertEquals(0, BaseProvider::numberBetween(0, 0));
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

    public function testRandomAsciiReturnsString()
    {
        $this->assertTrue(is_string(BaseProvider::randomAscii()));
    }

    public function testRandomAsciiReturnsSingleCharacter()
    {
        $this->assertEquals(1, strlen(BaseProvider::randomAscii()));
    }

    public function testRandomAsciiReturnsAsciiCharacter()
    {
        $lowercaseLetters = '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $this->assertTrue(strpos($lowercaseLetters, BaseProvider::randomAscii()) !== false);
    }

    public function testRandomElementReturnsNullWhenArrayEmpty()
    {
        $this->assertNull(BaseProvider::randomElement(array()));
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

    public function testShuffleReturnsStringWhenPassedAStringArgument()
    {
        $this->assertInternalType('string', BaseProvider::shuffle('foo'));
    }

    public function testShuffleReturnsArrayWhenPassedAnArrayArgument()
    {
        $this->assertInternalType('array', BaseProvider::shuffle(array(1, 2, 3)));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testShuffleThrowsExceptionWhenPassedAnInvalidArgument()
    {
        BaseProvider::shuffle(false);
    }

    public function testShuffleArraySupportsEmptyArrays()
    {
        $this->assertEquals(array(), BaseProvider::shuffleArray(array()));
    }

    public function testShuffleArrayReturnsAnArrayOfTheSameSize()
    {
        $array = array(1, 2, 3, 4, 5);
        $this->assertSameSize($array, BaseProvider::shuffleArray($array));
    }

    public function testShuffleArrayReturnsAnArrayWithSameElements()
    {
        $array = array(2, 4, 6, 8, 10);
        $shuffleArray = BaseProvider::shuffleArray($array);
        $this->assertContains(2, $shuffleArray);
        $this->assertContains(4, $shuffleArray);
        $this->assertContains(6, $shuffleArray);
        $this->assertContains(8, $shuffleArray);
        $this->assertContains(10, $shuffleArray);
    }

    public function testShuffleArrayReturnsADifferentArrayThanTheOriginal()
    {
        $arr = array(1, 2, 3, 4, 5);
        $shuffledArray = BaseProvider::shuffleArray($arr);
        $this->assertNotEquals($arr, $shuffledArray);
    }

    public function testShuffleArrayLeavesTheOriginalArrayUntouched()
    {
        $arr = array(1, 2, 3, 4, 5);
        BaseProvider::shuffleArray($arr);
        $this->assertEquals($arr, array(1, 2, 3, 4, 5));
    }

    public function testShuffleStringSupportsEmptyStrings()
    {
        $this->assertEquals('', BaseProvider::shuffleString(''));
    }

    public function testShuffleStringReturnsAnStringOfTheSameSize()
    {
        $string = 'abcdef';
        $this->assertEquals(strlen($string), strlen(BaseProvider::shuffleString($string)));
    }

    public function testShuffleStringReturnsAnStringWithSameElements()
    {
        $string = 'acegi';
        $shuffleString = BaseProvider::shuffleString($string);
        $this->assertContains('a', $shuffleString);
        $this->assertContains('c', $shuffleString);
        $this->assertContains('e', $shuffleString);
        $this->assertContains('g', $shuffleString);
        $this->assertContains('i', $shuffleString);
    }

    public function testShuffleStringReturnsADifferentStringThanTheOriginal()
    {
        $string = 'abcdef';
        $shuffledString = BaseProvider::shuffleString($string);
        $this->assertNotEquals($string, $shuffledString);
    }

    public function testShuffleStringLeavesTheOriginalStringUntouched()
    {
        $string = 'abcdef';
        BaseProvider::shuffleString($string);
        $this->assertEquals($string, 'abcdef');
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

    public function testNumerifyCanGenerateALargeNumberOfDigits()
    {
        $largePattern = str_repeat('#', 20); // definitely larger than PHP_INT_MAX on all systems
        $this->assertEquals(20, strlen(BaseProvider::numerify($largePattern)));
    }

    public function testLexifyReturnsSameStringWhenItContainsNoQuestionMark()
    {
        $this->assertEquals('fooBar#', BaseProvider::lexify('fooBar#'));
    }

    public function testLexifyReturnsStringWithQuestionMarksReplacedByLetters()
    {
        $this->assertRegExp('/foo[a-z]Ba[a-z]r/', BaseProvider::lexify('foo?Ba?r'));
    }

    public function testBothifyCombinesNumerifyAndLexify()
    {
        $this->assertRegExp('/foo[a-z]Ba\dr/', BaseProvider::bothify('foo?Ba#r'));
    }

    public function testAsciifyReturnsSameStringWhenItContainsNoStarSign()
    {
        $this->assertEquals('fooBar?', BaseProvider::asciify('fooBar?'));
    }

    public function testAsciifyReturnsStringWithStarSignsReplacedByAsciiChars()
    {
        $this->assertRegExp('/foo.Ba.r/', BaseProvider::asciify('foo*Ba*r'));
    }

    public function regexifyBasicDataProvider()
    {
        return array(
            array('azeQSDF1234', 'azeQSDF1234', 'does not change non regex chars'),
            array('foo(bar){1}', 'foobar', 'replaces regex characters'),
            array('', '', 'supports empty string'),
            array('/^foo(bar){1}$/', 'foobar', 'ignores regex delimiters')
        );
    }

    /**
     * @dataProvider regexifyBasicDataProvider
     */
    public function testRegexifyBasicFeatures($input, $output, $message)
    {
        $this->assertEquals($output, BaseProvider::regexify($input), $message);
    }

    public function regexifyDataProvider()
    {
        return array(
            array('\d', 'numbers'),
            array('\w', 'letters'),
            array('(a|b)', 'alternation'),
            array('[aeiou]', 'basic character class'),
            array('[a-z]', 'character class range'),
            array('[a-z1-9]', 'multiple character class range'),
            array('a*b+c?', 'single character quantifiers'),
            array('a{2}', 'brackets quantifiers'),
            array('a{2,3}', 'min-max brackets quantifiers'),
            array('[aeiou]{2,3}', 'brackets quantifiers on basic character class'),
            array('[a-z]{2,3}', 'brackets quantifiers on character class range'),
            array('(a|b){2,3}', 'brackets quantifiers on alternation'),
            array('\.\*\?\+', 'escaped characters'),
            array('[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}', 'complex regex')
        );
    }

    /**
     * @dataProvider regexifyDataProvider
     */
    public function testRegexifySupportedRegexSyntax($pattern, $message)
    {
        $this->assertRegExp('/' . $pattern . '/', BaseProvider::regexify($pattern), 'Regexify supports ' . $message);
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

    /**
     * @expectedException LengthException
     * @expectedExceptionMessage Cannot get 2 elements, only 1 in array
     */
    public function testRandomElementsThrowsWhenRequestingTooManyKeys()
    {
        BaseProvider::randomElements(array('foo'), 2);
    }

    public function testRandomElements()
    {
        $this->assertCount(1, BaseProvider::randomElements(), 'Should work without any input');

        $empty = BaseProvider::randomElements(array(), 0);
        $this->assertInternalType('array', $empty);
        $this->assertCount(0, $empty);

        $shuffled = BaseProvider::randomElements(array('foo', 'bar', 'baz'), 3);
        $this->assertContains('foo', $shuffled);
        $this->assertContains('bar', $shuffled);
        $this->assertContains('baz', $shuffled);
    }
}
