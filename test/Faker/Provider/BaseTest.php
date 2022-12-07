<?php

namespace Faker\Test\Provider;

use Faker\Provider\Base as BaseProvider;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class BaseTest extends TestCase
{
    public function testRandomDigitReturnsInteger(): void
    {
        self::assertIsInt(BaseProvider::randomDigit());
    }

    public function testRandomDigitReturnsDigit(): void
    {
        self::assertGreaterThanOrEqual(0, BaseProvider::randomDigit());
        self::assertLessThan(10, BaseProvider::randomDigit());
    }

    public function testRandomDigitNotNullReturnsNotNullDigit(): void
    {
        self::assertGreaterThan(0, BaseProvider::randomDigitNotNull());
        self::assertLessThan(10, BaseProvider::randomDigitNotNull());
    }

    public function testRandomDigitNotReturnsValidDigit(): void
    {
        for ($i = 0; $i <= 9; ++$i) {
            self::assertGreaterThanOrEqual(0, BaseProvider::randomDigitNot($i));
            self::assertLessThan(10, BaseProvider::randomDigitNot($i));
            self::assertNotSame(BaseProvider::randomDigitNot($i), $i);
        }
    }

    public function testRandomNumberThrowsExceptionWhenCalledWithAMax(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        BaseProvider::randomNumber(5, 200);
    }

    public function testRandomNumberThrowsExceptionWhenCalledWithATooHighNumberOfDigits(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        BaseProvider::randomNumber(10);
    }

    public function testRandomNumberReturnsInteger(): void
    {
        self::assertIsInt(BaseProvider::randomNumber());
        self::assertIsInt(BaseProvider::randomNumber(5, false));
    }

    public function testRandomNumberReturnsDigit(): void
    {
        self::assertGreaterThanOrEqual(0, BaseProvider::randomNumber(3));
        self::assertLessThan(1000, BaseProvider::randomNumber(3));
    }

    public function testRandomNumberAcceptsStrictParamToEnforceNumberSize(): void
    {
        self::assertEquals(5, strlen((string) BaseProvider::randomNumber(5, true)));
    }

    public function testNumberBetween(): void
    {
        $min = 5;
        $max = 6;

        self::assertGreaterThanOrEqual($min, BaseProvider::numberBetween($min, $max));
        self::assertGreaterThanOrEqual(BaseProvider::numberBetween($min, $max), $max);
    }

    public function testNumberBetweenAcceptsZeroAsMax(): void
    {
        self::assertEquals(0, BaseProvider::numberBetween(0, 0));
    }

    public function testRandomFloat(): void
    {
        $min = 4;
        $max = 10;
        $nbMaxDecimals = 8;

        $result = BaseProvider::randomFloat($nbMaxDecimals, $min, $max);

        $parts = explode('.', $result);

        self::assertIsFloat($result);
        self::assertGreaterThanOrEqual($min, $result);
        self::assertLessThanOrEqual($max, $result);
        self::assertLessThanOrEqual($nbMaxDecimals, strlen($parts[1]));
    }

    public function testRandomLetterReturnsString(): void
    {
        self::assertIsString(BaseProvider::randomLetter());
    }

    public function testRandomLetterReturnsSingleLetter(): void
    {
        self::assertEquals(1, strlen(BaseProvider::randomLetter()));
    }

    public function testRandomLetterReturnsLowercaseLetter(): void
    {
        $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
        self::assertNotFalse(strpos($lowercaseLetters, BaseProvider::randomLetter()));
    }

    public function testRandomAsciiReturnsString(): void
    {
        self::assertIsString(BaseProvider::randomAscii());
    }

    public function testRandomAsciiReturnsSingleCharacter(): void
    {
        self::assertEquals(1, strlen(BaseProvider::randomAscii()));
    }

    public function testRandomAsciiReturnsAsciiCharacter(): void
    {
        $lowercaseLetters = '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        self::assertNotFalse(strpos($lowercaseLetters, BaseProvider::randomAscii()));
    }

    public function testRandomElementReturnsNullWhenArrayEmpty(): void
    {
        self::assertNull(BaseProvider::randomElement([]));
    }

    public function testRandomElementReturnsNullWhenCollectionEmpty(): void
    {
        self::assertNull(BaseProvider::randomElement(new Collection([])));
    }

    public function testRandomElementReturnsElementFromArray(): void
    {
        $elements = ['23', 'e', 32, '#'];
        self::assertContains(BaseProvider::randomElement($elements), $elements);
    }

    public function testRandomElementReturnsElementFromAssociativeArray(): void
    {
        $elements = ['tata' => '23', 'toto' => 'e', 'tutu' => 32, 'titi' => '#'];
        self::assertContains(BaseProvider::randomElement($elements), $elements);
    }

    public function testRandomElementReturnsElementFromCollection(): void
    {
        $collection = new Collection(['one', 'two', 'three']);
        self::assertContains(BaseProvider::randomElement($collection), $collection);
    }

    public function testShuffleReturnsStringWhenPassedAStringArgument(): void
    {
        self::assertIsString(BaseProvider::shuffle('foo'));
    }

    public function testShuffleReturnsArrayWhenPassedAnArrayArgument(): void
    {
        self::assertIsArray(BaseProvider::shuffle([1, 2, 3]));
    }

    public function testShuffleThrowsExceptionWhenPassedAnInvalidArgument(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        BaseProvider::shuffle(false);
    }

    public function testShuffleArraySupportsEmptyArrays(): void
    {
        self::assertEquals([], BaseProvider::shuffleArray([]));
    }

    public function testShuffleArrayReturnsAnArrayOfTheSameSize(): void
    {
        $array = [1, 2, 3, 4, 5];
        self::assertSameSize($array, BaseProvider::shuffleArray($array));
    }

    public function testShuffleArrayReturnsAnArrayWithSameElements(): void
    {
        $array = [2, 4, 6, 8, 10];
        $shuffleArray = BaseProvider::shuffleArray($array);
        self::assertContains(2, $shuffleArray);
        self::assertContains(4, $shuffleArray);
        self::assertContains(6, $shuffleArray);
        self::assertContains(8, $shuffleArray);
        self::assertContains(10, $shuffleArray);
    }

    public function testShuffleArrayReturnsADifferentArrayThanTheOriginal(): void
    {
        $arr = [1, 2, 3, 4, 5];
        $shuffledArray = BaseProvider::shuffleArray($arr);
        self::assertNotEquals($arr, $shuffledArray);
    }

    public function testShuffleArrayLeavesTheOriginalArrayUntouched(): void
    {
        $arr = [1, 2, 3, 4, 5];
        BaseProvider::shuffleArray($arr);
        self::assertEquals($arr, [1, 2, 3, 4, 5]);
    }

    public function testShuffleStringSupportsEmptyStrings(): void
    {
        self::assertEquals('', BaseProvider::shuffleString(''));
    }

    public function testShuffleStringReturnsAnStringOfTheSameSize(): void
    {
        $string = 'abcdef';
        self::assertEquals(strlen($string), strlen(BaseProvider::shuffleString($string)));
    }

    public function testShuffleStringReturnsAnStringWithSameElements(): void
    {
        $string = 'acegi';
        $shuffleString = BaseProvider::shuffleString($string);
        self::assertStringContainsString('a', $shuffleString);
        self::assertStringContainsString('c', $shuffleString);
        self::assertStringContainsString('e', $shuffleString);
        self::assertStringContainsString('g', $shuffleString);
        self::assertStringContainsString('i', $shuffleString);
    }

    public function testShuffleStringReturnsADifferentStringThanTheOriginal(): void
    {
        $string = 'abcdef';
        $shuffledString = BaseProvider::shuffleString($string);
        self::assertNotEquals($string, $shuffledString);
    }

    public function testShuffleStringLeavesTheOriginalStringUntouched(): void
    {
        $string = 'abcdef';
        BaseProvider::shuffleString($string);
        self::assertEquals($string, 'abcdef');
    }

    public function testNumerifyReturnsSameStringWhenItContainsNoHashSign(): void
    {
        self::assertEquals('fooBar?', BaseProvider::numerify('fooBar?'));
    }

    public function testNumerifyReturnsStringWithHashSignsReplacedByDigits(): void
    {
        self::assertMatchesRegularExpression('/foo\dBa\dr/', BaseProvider::numerify('foo#Ba#r'));
    }

    public function testNumerifyReturnsStringWithPercentageSignsReplacedByDigits(): void
    {
        self::assertMatchesRegularExpression('/foo\dBa\dr/', BaseProvider::numerify('foo%Ba%r'));
    }

    public function testNumerifyReturnsStringWithPercentageSignsReplacedByNotNullDigits(): void
    {
        self::assertNotEquals('0', BaseProvider::numerify('%'));
    }

    public function testNumerifyCanGenerateALargeNumberOfDigits(): void
    {
        $largePattern = str_repeat('#', 20); // definitely larger than PHP_INT_MAX on all systems
        self::assertEquals(20, strlen(BaseProvider::numerify($largePattern)));
    }

    public function testLexifyReturnsSameStringWhenItContainsNoQuestionMark(): void
    {
        self::assertEquals('fooBar#', BaseProvider::lexify('fooBar#'));
    }

    public function testLexifyReturnsStringWithQuestionMarksReplacedByLetters(): void
    {
        self::assertMatchesRegularExpression('/foo[a-z]Ba[a-z]r/', BaseProvider::lexify('foo?Ba?r'));
    }

    public function testBothifyCombinesNumerifyAndLexify(): void
    {
        self::assertMatchesRegularExpression('/foo[a-z]Ba\dr/', BaseProvider::bothify('foo?Ba#r'));
    }

    public function testBothifyAsterisk(): void
    {
        self::assertMatchesRegularExpression('/foo([a-z]|\d)Ba([a-z]|\d)r/', BaseProvider::bothify('foo*Ba*r'));
    }

    public function testBothifyUtf(): void
    {
        $utf = 'œ∑´®†¥¨ˆøπ“‘和製╯°□°╯︵ ┻━┻🐵 🙈 ﺚﻣ ﻦﻔﺳ ﺲﻘﻄﺗ ﻮﺑﺎﻠﺘﺣﺪﻳﺩ،, ﺝﺰﻳﺮﺘﻳ ﺏﺎﺴﺘﺧﺩﺎﻣ ﺄﻧ ﺪﻧﻭ. ﺇﺫ ﻪﻧﺍ؟ ﺎﻠﺴﺗﺍﺭ ﻮﺘ';
        self::assertMatchesRegularExpression('/' . $utf . 'foo\dB[a-z]a([a-z]|\d)r/u', BaseProvider::bothify($utf . 'foo#B?a*r'));
    }

    public function testAsciifyReturnsSameStringWhenItContainsNoStarSign(): void
    {
        self::assertEquals('fooBar?', BaseProvider::asciify('fooBar?'));
    }

    public function testAsciifyReturnsStringWithStarSignsReplacedByAsciiChars(): void
    {
        self::assertMatchesRegularExpression('/foo.Ba.r/', BaseProvider::asciify('foo*Ba*r'));
    }

    public function regexifyBasicDataProvider()
    {
        return [
            ['azeQSDF1234', 'azeQSDF1234', 'does not change non regex chars'],
            ['foo(bar){1}', 'foobar', 'replaces regex characters'],
            ['', '', 'supports empty string'],
            ['/^foo(bar){1}$/', 'foobar', 'ignores regex delimiters'],
            ['/[.]/', '.', 'leaves literal dot in braces'],
        ];
    }

    /**
     * @dataProvider regexifyBasicDataProvider
     */
    public function testRegexifyBasicFeatures($input, $output, $message): void
    {
        self::assertEquals($output, BaseProvider::regexify($input), $message);
    }

    public function regexifyDataProvider()
    {
        return [
            ['\d', 'numbers'],
            ['\w', 'letters'],
            ['(a|b)', 'alternation'],
            ['[aeiou]', 'basic character class'],
            ['[a-z]', 'character class range'],
            ['[a-z1-9]', 'multiple character class range'],
            ['[a-z\-]{4}', 'character class range with quantifier and escaped character'],
            ['a*b+c?', 'single character quantifiers'],
            ['a{2}', 'brackets quantifiers'],
            ['a{2,3}', 'min-max brackets quantifiers'],
            ['[aeiou]{2,3}', 'brackets quantifiers on basic character class'],
            ['[a-z]{2,3}', 'brackets quantifiers on character class range'],
            ['(a|b){2,3}', 'brackets quantifiers on alternation'],
            ['\.\*\?\+', 'escaped characters'],
            ['[.]', 'literal dot in character class'],
            ['.', 'catch-all dot'],
            ['\\\\', 'escaped backslash'],
            ['[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}', 'complex regex'],
        ];
    }

    /**
     * @dataProvider regexifyDataProvider
     */
    public function testRegexifySupportedRegexSyntax($pattern, $message): void
    {
        self::assertMatchesRegularExpression('/' . $pattern . '/', BaseProvider::regexify($pattern), 'Regexify supports ' . $message);
    }

    public function testOptionalReturnsProviderValueWhenCalledWithWeight1(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        self::assertNotNull($faker->optional(100)->randomDigit);
    }

    public function testOptionalReturnsNullWhenCalledWithWeight0(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        self::assertNull($faker->optional(0)->randomDigit);
    }

    public function testOptionalAllowsChainingPropertyAccess(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \ArrayObject([1])); // hack because method_exists forbids stubs
        self::assertEquals(1, $faker->optional(100)->count);
        self::assertNull($faker->optional(0)->count);
    }

    public function testOptionalAllowsChainingMethodCall(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \ArrayObject([1])); // hack because method_exists forbids stubs
        self::assertEquals(1, $faker->optional(100)->count());
        self::assertNull($faker->optional(0)->count());
    }

    public function testOptionalAllowsChainingProviderCallRandomlyReturnNull(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $values = [];

        for ($i = 0; $i < 10; ++$i) {
            $values[] = $faker->optional()->randomDigit;
        }
        self::assertContains(null, $values);

        $values = [];

        for ($i = 0; $i < 10; ++$i) {
            $values[] = $faker->optional(0.5)->randomDigit;
        }
        self::assertContains(null, $values);
    }

    /**
     * @see https://github.com/fzaninotto/Faker/issues/265
     */
    public function testOptionalPercentageAndWeight(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \Faker\Provider\Miscellaneous($faker));

        $valuesOld = [];
        $valuesNew = [];

        for ($i = 0; $i < 10000; ++$i) {
            $valuesOld[] = $faker->optional(0.5)->boolean(100);
            $valuesNew[] = $faker->optional(50)->boolean(100);
        }

        self::assertEquals(
            round(array_sum($valuesOld) / 10000, 2),
            round(array_sum($valuesNew) / 10000, 2),
        );
    }

    public function testUniqueAllowsChainingPropertyAccess(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \ArrayObject([1])); // hack because method_exists forbids stubs
        self::assertEquals(1, $faker->unique()->count);
    }

    public function testUniqueAllowsChainingMethodCall(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $faker->addProvider(new \ArrayObject([1])); // hack because method_exists forbids stubs
        self::assertEquals(1, $faker->unique()->count());
    }

    public function testUniqueReturnsOnlyUniqueValues(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $values = [];

        for ($i = 0; $i < 10; ++$i) {
            $values[] = $faker->unique()->randomDigit;
        }
        sort($values);
        self::assertEquals([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $values);
    }

    public function testUniqueThrowsExceptionWhenNoUniqueValueCanBeGenerated(): void
    {
        $this->expectException(\OverflowException::class);
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));

        for ($i = 0; $i < 11; ++$i) {
            $faker->unique()->randomDigit;
        }
    }

    public function testUniqueCanResetUniquesWhenPassedTrueAsArgument(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $values = [];

        for ($i = 0; $i < 10; ++$i) {
            $values[] = $faker->unique()->randomDigit;
        }
        $values[] = $faker->unique(true)->randomDigit;

        for ($i = 0; $i < 9; ++$i) {
            $values[] = $faker->unique()->randomDigit;
        }
        sort($values);
        self::assertEquals([0, 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9], $values);
    }

    public function testValidAllowsChainingPropertyAccess(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        self::assertLessThan(10, $faker->valid()->randomDigit);
    }

    public function testValidAllowsChainingMethodCall(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        self::assertLessThan(10, $faker->valid()->numberBetween(5, 9));
    }

    public function testValidReturnsOnlyValidValues(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $values = [];
        $evenValidator = static function ($digit) {
            return $digit % 2 === 0;
        };

        for ($i = 0; $i < 50; ++$i) {
            $values[$faker->valid($evenValidator)->randomDigit] = true;
        }
        $uniqueValues = array_keys($values);
        sort($uniqueValues);
        self::assertEquals([0, 2, 4, 6, 8], $uniqueValues);
    }

    public function testValidThrowsExceptionWhenNoValidValueCanBeGenerated(): void
    {
        $this->expectException(\OverflowException::class);
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $evenValidator = static function ($digit) {
            return $digit % 2 === 0;
        };

        for ($i = 0; $i < 11; ++$i) {
            $faker->valid($evenValidator)->randomElement([1, 3, 5, 7, 9]);
        }
    }

    public function testValidThrowsExceptionWhenParameterIsNotCallable(): void
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Base($faker));
        $this->expectException(\TypeError::class);
        $faker->valid(12)->randomElement([1, 3, 5, 7, 9]);
    }

    public function testRandomElementsThrowsWhenRequestingTooManyKeys(): void
    {
        $this->expectException(\LengthException::class);
        $this->expectExceptionMessage('Cannot get 2 elements, only 1 in array');
        BaseProvider::randomElements(['foo'], 2);
    }

    public function testRandomElements(): void
    {
        self::assertCount(1, BaseProvider::randomElements(), 'Should work without any input');

        $empty = BaseProvider::randomElements([], 0);
        self::assertIsArray($empty);
        self::assertCount(0, $empty);

        $shuffled = BaseProvider::randomElements(['foo', 'bar', 'baz'], 3);
        self::assertContains('foo', $shuffled);
        self::assertContains('bar', $shuffled);
        self::assertContains('baz', $shuffled);

        $allowDuplicates = BaseProvider::randomElements(['foo', 'bar'], 3, true);
        self::assertCount(3, $allowDuplicates);
        self::assertContainsOnly('string', $allowDuplicates);
    }
}

/**
 * @group legacy
 */
final class Collection extends \ArrayObject
{
}
