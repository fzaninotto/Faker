<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Base as BaseProvider;
use Faker\Provider\Miscellaneous;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class BaseTest extends TestCase
{
    public function testRandomDigitReturnsInteger(): void
    {
        $this->assertIsInt(BaseProvider::randomDigit());
    }

    public function testRandomDigitReturnsDigit(): void
    {
        $this->assertGreaterThanOrEqual(0, BaseProvider::randomDigit());
        $this->assertLessThan(10, BaseProvider::randomDigit());
    }

    public function testRandomDigitNotNullReturnsNotNullDigit(): void
    {
        $this->assertGreaterThan(0, BaseProvider::randomDigitNotNull());
        $this->assertLessThan(10, BaseProvider::randomDigitNotNull());
    }

    public function testRandomDigitNotReturnsValidDigit(): void
    {
        for ($i = 0; $i <= 9; ++$i) {
            $this->assertGreaterThanOrEqual(0, BaseProvider::randomDigitNot($i));
            $this->assertLessThan(10, BaseProvider::randomDigitNot($i));
            $this->assertNotSame(BaseProvider::randomDigitNot($i), $i);
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
        $this->assertIsInt(BaseProvider::randomNumber());
        $this->assertIsInt(BaseProvider::randomNumber(5, false));
    }

    public function testRandomNumberReturnsDigit(): void
    {
        $this->assertGreaterThanOrEqual(0, BaseProvider::randomNumber(3));
        $this->assertLessThan(1000, BaseProvider::randomNumber(3));
    }

    public function testRandomNumberAcceptsStrictParamToEnforceNumberSize(): void
    {
        $this->assertEquals(5, \strlen((string) BaseProvider::randomNumber(5, true)));
    }

    public function testNumberBetween(): void
    {
        $min = 5;
        $max = 6;

        $this->assertGreaterThanOrEqual($min, BaseProvider::numberBetween($min, $max));
        $this->assertGreaterThanOrEqual(BaseProvider::numberBetween($min, $max), $max);
    }

    public function testNumberBetweenAcceptsZeroAsMax(): void
    {
        $this->assertEquals(0, BaseProvider::numberBetween(0, 0));
    }

    public function testRandomFloat(): void
    {
        $min = 4;
        $max = 10;
        $nbMaxDecimals = 8;

        $result = BaseProvider::randomFloat($nbMaxDecimals, $min, $max);

        $parts = \explode('.', $result);

        $this->assertIsFloat($result);
        $this->assertGreaterThanOrEqual($min, $result);
        $this->assertLessThanOrEqual($max, $result);
        $this->assertLessThanOrEqual($nbMaxDecimals, \strlen($parts[1]));
    }

    public function testRandomLetterReturnsString(): void
    {
        $this->assertIsString(BaseProvider::randomLetter());
    }

    public function testRandomLetterReturnsSingleLetter(): void
    {
        $this->assertEquals(1, \strlen(BaseProvider::randomLetter()));
    }

    public function testRandomLetterReturnsLowercaseLetter(): void
    {
        $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
        $this->assertNotFalse(\strpos($lowercaseLetters, BaseProvider::randomLetter()));
    }

    public function testRandomAsciiReturnsString(): void
    {
        $this->assertIsString(BaseProvider::randomAscii());
    }

    public function testRandomAsciiReturnsSingleCharacter(): void
    {
        $this->assertEquals(1, \strlen(BaseProvider::randomAscii()));
    }

    public function testRandomAsciiReturnsAsciiCharacter(): void
    {
        $lowercaseLetters = '!"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $this->assertNotFalse(\strpos($lowercaseLetters, BaseProvider::randomAscii()));
    }

    public function testRandomElementReturnsNullWhenArrayEmpty(): void
    {
        $this->assertNull(BaseProvider::randomElement([]));
    }

    public function testRandomElementReturnsNullWhenCollectionEmpty(): void
    {
        $this->assertNull(BaseProvider::randomElement(new Collection([])));
    }

    public function testRandomElementReturnsElementFromArray(): void
    {
        $elements = ['23', 'e', 32, '#'];
        $this->assertContains(BaseProvider::randomElement($elements), $elements);
    }

    public function testRandomElementReturnsElementFromAssociativeArray(): void
    {
        $elements = ['tata' => '23', 'toto' => 'e', 'tutu' => 32, 'titi' => '#'];
        $this->assertContains(BaseProvider::randomElement($elements), $elements);
    }

    public function testRandomElementReturnsElementFromCollection(): void
    {
        $collection = new Collection(['one', 'two', 'three']);
        $this->assertContains(BaseProvider::randomElement($collection), $collection);
    }

    public function testShuffleReturnsStringWhenPassedAStringArgument(): void
    {
        $this->assertIsString(BaseProvider::shuffle('foo'));
    }

    public function testShuffleReturnsArrayWhenPassedAnArrayArgument(): void
    {
        $this->assertIsArray(BaseProvider::shuffle([1, 2, 3]));
    }

    public function testShuffleThrowsExceptionWhenPassedAnInvalidArgument(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        BaseProvider::shuffle(false);
    }

    public function testShuffleArraySupportsEmptyArrays(): void
    {
        $this->assertEquals([], BaseProvider::shuffleArray([]));
    }

    public function testShuffleArrayReturnsAnArrayOfTheSameSize(): void
    {
        $array = [1, 2, 3, 4, 5];
        $this->assertSameSize($array, BaseProvider::shuffleArray($array));
    }

    public function testShuffleArrayReturnsAnArrayWithSameElements(): void
    {
        $array = [2, 4, 6, 8, 10];
        $shuffleArray = BaseProvider::shuffleArray($array);
        $this->assertContains(2, $shuffleArray);
        $this->assertContains(4, $shuffleArray);
        $this->assertContains(6, $shuffleArray);
        $this->assertContains(8, $shuffleArray);
        $this->assertContains(10, $shuffleArray);
    }

    public function testShuffleArrayReturnsADifferentArrayThanTheOriginal(): void
    {
        $arr = [1, 2, 3, 4, 5];
        $shuffledArray = BaseProvider::shuffleArray($arr);
        $this->assertNotEquals($arr, $shuffledArray);
    }

    public function testShuffleArrayLeavesTheOriginalArrayUntouched(): void
    {
        $arr = [1, 2, 3, 4, 5];
        BaseProvider::shuffleArray($arr);
        $this->assertEquals([1, 2, 3, 4, 5], $arr);
    }

    public function testShuffleStringSupportsEmptyStrings(): void
    {
        $this->assertEquals('', BaseProvider::shuffleString(''));
    }

    public function testShuffleStringReturnsAnStringOfTheSameSize(): void
    {
        $string = 'abcdef';
        $this->assertEquals(\strlen($string), \strlen(BaseProvider::shuffleString($string)));
    }

    public function testShuffleStringReturnsAnStringWithSameElements(): void
    {
        $string = 'acegi';
        $shuffleString = BaseProvider::shuffleString($string);
        $this->assertStringContainsStringIgnoringCase('a', $shuffleString);
        $this->assertStringContainsStringIgnoringCase('c', $shuffleString);
        $this->assertStringContainsStringIgnoringCase('e', $shuffleString);
        $this->assertStringContainsStringIgnoringCase('g', $shuffleString);
        $this->assertStringContainsStringIgnoringCase('i', $shuffleString);
    }

    public function testShuffleStringReturnsADifferentStringThanTheOriginal(): void
    {
        $string = 'abcdef';
        $shuffledString = BaseProvider::shuffleString($string);
        $this->assertNotEquals($string, $shuffledString);
    }

    public function testShuffleStringLeavesTheOriginalStringUntouched(): void
    {
        $string = 'abcdef';
        BaseProvider::shuffleString($string);
        $this->assertEquals('abcdef', $string);
    }

    public function testNumerifyReturnsSameStringWhenItContainsNoHashSign(): void
    {
        $this->assertEquals('fooBar?', BaseProvider::numerify('fooBar?'));
    }

    public function testNumerifyReturnsStringWithHashSignsReplacedByDigits(): void
    {
        $this->assertMatchesRegularExpression('/foo\dBa\dr/', BaseProvider::numerify('foo#Ba#r'));
    }

    public function testNumerifyReturnsStringWithPercentageSignsReplacedByDigits(): void
    {
        $this->assertMatchesRegularExpression('/foo\dBa\dr/', BaseProvider::numerify('foo%Ba%r'));
    }

    public function testNumerifyReturnsStringWithPercentageSignsReplacedByNotNullDigits(): void
    {
        $this->assertNotEquals('0', BaseProvider::numerify('%'));
    }

    public function testNumerifyCanGenerateALargeNumberOfDigits(): void
    {
        $largePattern = \str_repeat('#', 20); // definitely larger than PHP_INT_MAX on all systems
        $this->assertEquals(20, \strlen(BaseProvider::numerify($largePattern)));
    }

    public function testLexifyReturnsSameStringWhenItContainsNoQuestionMark(): void
    {
        $this->assertEquals('fooBar#', BaseProvider::lexify('fooBar#'));
    }

    public function testLexifyReturnsStringWithQuestionMarksReplacedByLetters(): void
    {
        $this->assertMatchesRegularExpression('/foo[a-z]Ba[a-z]r/', BaseProvider::lexify('foo?Ba?r'));
    }

    public function testBothifyCombinesNumerifyAndLexify(): void
    {
        $this->assertMatchesRegularExpression('/foo[a-z]Ba\dr/', BaseProvider::bothify('foo?Ba#r'));
    }

    public function testBothifyAsterisk(): void
    {
        $this->assertMatchesRegularExpression('/foo([a-z]|\d)Ba([a-z]|\d)r/', BaseProvider::bothify('foo*Ba*r'));
    }

    public function testBothifyUtf(): void
    {
        $utf = 'œ∑´®†¥¨ˆøπ“‘和製╯°□°╯︵ ┻━┻🐵 🙈 ﺚﻣ ﻦﻔﺳ ﺲﻘﻄﺗ ﻮﺑﺎﻠﺘﺣﺪﻳﺩ،, ﺝﺰﻳﺮﺘﻳ ﺏﺎﺴﺘﺧﺩﺎﻣ ﺄﻧ ﺪﻧﻭ. ﺇﺫ ﻪﻧﺍ؟ ﺎﻠﺴﺗﺍﺭ ﻮﺘ';
        $this->assertMatchesRegularExpression('/'.$utf.'foo\dB[a-z]a([a-z]|\d)r/u', BaseProvider::bothify($utf.'foo#B?a*r'));
    }

    public function testAsciifyReturnsSameStringWhenItContainsNoStarSign(): void
    {
        $this->assertEquals('fooBar?', BaseProvider::asciify('fooBar?'));
    }

    public function testAsciifyReturnsStringWithStarSignsReplacedByAsciiChars(): void
    {
        $this->assertMatchesRegularExpression('/foo.Ba.r/', BaseProvider::asciify('foo*Ba*r'));
    }

    public static function regexifyBasicDataProvider(): array
    {
        return [
            ['azeQSDF1234', 'azeQSDF1234', 'does not change non regex chars'],
            ['foo(bar){1}', 'foobar', 'replaces regex characters'],
            ['', '', 'supports empty string'],
            ['/^foo(bar){1}$/', 'foobar', 'ignores regex delimiters'],
        ];
    }

    #[DataProvider('regexifyBasicDataProvider')]
    public function testRegexifyBasicFeatures($input, $output, $message): void
    {
        $this->assertEquals($output, BaseProvider::regexify($input), $message);
    }

    public static function regexifyDataProvider(): array
    {
        return [
            ['\d', 'numbers'],
            ['\w', 'letters'],
            ['(a|b)', 'alternation'],
            ['[aeiou]', 'basic character class'],
            ['[a-z]', 'character class range'],
            ['[a-z1-9]', 'multiple character class range'],
            ['a*b+c?', 'single character quantifiers'],
            ['a{2}', 'brackets quantifiers'],
            ['a{2,3}', 'min-max brackets quantifiers'],
            ['[aeiou]{2,3}', 'brackets quantifiers on basic character class'],
            ['[a-z]{2,3}', 'brackets quantifiers on character class range'],
            ['(a|b){2,3}', 'brackets quantifiers on alternation'],
            ['\.\*\?\+', 'escaped characters'],
            ['[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}', 'complex regex'],
        ];
    }

    #[DataProvider('regexifyDataProvider')]
    public function testRegexifySupportedRegexSyntax($pattern, $message): void
    {
        $this->assertMatchesRegularExpression('/'.$pattern.'/', BaseProvider::regexify($pattern), 'Regexify supports '.$message);
    }

    public function testOptionalReturnsProviderValueWhenCalledWithWeight1(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $this->assertNotNull($faker->optional(100)->randomDigit);
    }

    public function testOptionalReturnsNullWhenCalledWithWeight0(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $this->assertNull($faker->optional(0)->randomDigit);
    }

    public function testOptionalAllowsChainingPropertyAccess(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $faker->addProvider(new \ArrayObject([1])); // hack because method_exists forbids stubs
        $this->assertEquals(1, $faker->optional(100)->count);
        $this->assertNull($faker->optional(0)->count);
    }

    public function testOptionalAllowsChainingMethodCall(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $faker->addProvider(new \ArrayObject([1])); // hack because method_exists forbids stubs
        $this->assertEquals(1, $faker->optional(100)->count());
        $this->assertNull($faker->optional(0)->count());
    }

    public function testOptionalAllowsChainingProviderCallRandomlyReturnNull(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $values = [];
        for ($i = 0; $i < 10; ++$i) {
            $values[] = $faker->optional()->randomDigit;
        }
        $this->assertContains(null, $values);

        $values = [];
        for ($i = 0; $i < 10; ++$i) {
            $values[] = $faker->optional(50)->randomDigit;
        }
        $this->assertContains(null, $values);
    }

    /**
     * @see https://github.com/fzaninotto/Faker/issues/265
     */
    public function testOptionalPercentageAndWeight(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $faker->addProvider(new Miscellaneous($faker));

        $valuesOld = [];
        $valuesNew = [];

        for ($i = 0; $i < 10000; ++$i) {
            $valuesOld[] = $faker->optional(0.5)->boolean(100);
            $valuesNew[] = $faker->optional(50)->boolean(100);
        }

        $this->assertEquals(
            \round(\array_sum($valuesOld) / 10000, 2),
            \round(\array_sum($valuesNew) / 10000, 2)
        );
    }

    public function testUniqueAllowsChainingPropertyAccess(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $faker->addProvider(new \ArrayObject([1])); // hack because method_exists forbids stubs
        $this->assertEquals(1, $faker->unique()->count);
    }

    public function testUniqueAllowsChainingMethodCall(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $faker->addProvider(new \ArrayObject([1])); // hack because method_exists forbids stubs
        $this->assertEquals(1, $faker->unique()->count());
    }

    public function testUniqueReturnsOnlyUniqueValues(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $values = [];
        for ($i = 0; $i < 10; ++$i) {
            $values[] = $faker->unique()->randomDigit;
        }
        \sort($values);
        $this->assertEquals([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $values);
    }

    public function testUniqueThrowsExceptionWhenNoUniqueValueCanBeGenerated(): void
    {
        $this->expectException(\OverflowException::class);
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        for ($i = 0; $i < 11; ++$i) {
            $faker->unique()->randomDigit;
        }
    }

    public function testUniqueCanResetUniquesWhenPassedTrueAsArgument(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $values = [];
        for ($i = 0; $i < 10; ++$i) {
            $values[] = $faker->unique()->randomDigit;
        }
        $values[] = $faker->unique(true)->randomDigit;
        for ($i = 0; $i < 9; ++$i) {
            $values[] = $faker->unique()->randomDigit;
        }
        \sort($values);
        $this->assertEquals([0, 0, 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8, 9, 9], $values);
    }

    public function testValidAllowsChainingPropertyAccess(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $this->assertLessThan(10, $faker->valid()->randomDigit);
    }

    public function testValidAllowsChainingMethodCall(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $this->assertLessThan(10, $faker->valid()->numberBetween(5, 9));
    }

    public function testValidReturnsOnlyValidValues(): void
    {
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $values = [];
        $evenValidator = static function($digit) {
            return 0 === $digit % 2;
        };
        for ($i = 0; $i < 50; ++$i) {
            $values[$faker->valid($evenValidator)->randomDigit] = true;
        }
        $uniqueValues = \array_keys($values);
        \sort($uniqueValues);
        $this->assertEquals([0, 2, 4, 6, 8], $uniqueValues);
    }

    public function testValidThrowsExceptionWhenNoValidValueCanBeGenerated(): void
    {
        $this->expectException(\OverflowException::class);
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
        $evenValidator = static function($digit) {
            return 0 === $digit % 2;
        };
        for ($i = 0; $i < 11; ++$i) {
            $faker->valid($evenValidator)->randomElement([1, 3, 5, 7, 9]);
        }
    }

    public function testValidThrowsExceptionWhenParameterIsNotCollable(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $faker = new Generator();
        $faker->addProvider(new BaseProvider($faker));
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
        $this->assertCount(1, BaseProvider::randomElements(), 'Should work without any input');

        $empty = BaseProvider::randomElements([], 0);
        $this->assertIsArray($empty);
        $this->assertCount(0, $empty);

        $shuffled = BaseProvider::randomElements(['foo', 'bar', 'baz'], 3);
        $this->assertContains('foo', $shuffled);
        $this->assertContains('bar', $shuffled);
        $this->assertContains('baz', $shuffled);

        $allowDuplicates = BaseProvider::randomElements(['foo', 'bar'], 3, true);
        $this->assertCount(3, $allowDuplicates);
        $this->assertContainsOnly('string', $allowDuplicates);
    }
}

final class Collection extends \ArrayObject
{
}
