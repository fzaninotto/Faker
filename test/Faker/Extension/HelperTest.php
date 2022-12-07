<?php

namespace Faker\Test\Extension;

use Faker\Extension\Helper;
use PHPUnit\Framework\TestCase;

final class HelperTest extends TestCase
{
    public function testRandomElementReturnsNullWhenArrayEmpty(): void
    {
        self::assertNull(Helper::randomElement([]));
    }

    public function testRandomElementReturnsElementFromArray(): void
    {
        $elements = ['23', 'e', 32, '#'];
        self::assertContains(Helper::randomElement($elements), $elements);
    }

    public function testRandomElementReturnsElementFromAssociativeArray(): void
    {
        $elements = ['tata' => '23', 'toto' => 'e', 'tutu' => 32, 'titi' => '#'];
        self::assertContains(Helper::randomElement($elements), $elements);
    }

    public function testNumerifyReturnsSameStringWhenItContainsNoHashSign(): void
    {
        self::assertEquals('fooBar?', Helper::numerify('fooBar?'));
    }

    public function testNumerifyReturnsStringWithHashSignsReplacedByDigits(): void
    {
        self::assertMatchesRegularExpression('/foo\dBa\dr/', Helper::numerify('foo#Ba#r'));
    }

    public function testNumerifyReturnsStringWithPercentageSignsReplacedByDigits(): void
    {
        self::assertMatchesRegularExpression('/foo\dBa\dr/', Helper::numerify('foo%Ba%r'));
    }

    public function testNumerifyReturnsStringWithPercentageSignsReplacedByNotNullDigits(): void
    {
        self::assertNotEquals('0', Helper::numerify('%'));
    }

    public function testNumerifyCanGenerateALargeNumberOfDigits(): void
    {
        $largePattern = str_repeat('#', 20); // definitely larger than PHP_INT_MAX on all systems
        self::assertEquals(20, strlen(Helper::numerify($largePattern)));
    }

    public function testNumerifyReturnsLargeNumber(): void
    {
        $result = Helper::numerify(str_repeat('#', 10));
        self::assertGreaterThan(100, (int) $result);
    }

    public function testLexifyReturnsSameStringWhenItContainsNoQuestionMark(): void
    {
        self::assertEquals('fooBar#', Helper::lexify('fooBar#'));
    }

    public function testLexifyReturnsStringWithQuestionMarksReplacedByLetters(): void
    {
        self::assertMatchesRegularExpression('/foo[a-z]Ba[a-z]r/', Helper::lexify('foo?Ba?r'));
    }

    public function testBothifyCombinesNumerifyAndLexify(): void
    {
        self::assertMatchesRegularExpression('/foo[a-z]Ba\dr/', Helper::bothify('foo?Ba#r'));
    }

    public function testBothifyAsterisk(): void
    {
        self::assertMatchesRegularExpression('/foo([a-z]|\d)Ba([a-z]|\d)r/', Helper::bothify('foo*Ba*r'));
    }

    public function testBothifyUtf(): void
    {
        $utf = 'œ∑´®†¥¨ˆøπ“‘和製╯°□°╯︵ ┻━┻🐵 🙈 ﺚﻣ ﻦﻔﺳ ﺲﻘﻄﺗ ﻮﺑﺎﻠﺘﺣﺪﻳﺩ،, ﺝﺰﻳﺮﺘﻳ ﺏﺎﺴﺘﺧﺩﺎﻣ ﺄﻧ ﺪﻧﻭ. ﺇﺫ ﻪﻧﺍ؟ ﺎﻠﺴﺗﺍﺭ ﻮﺘ';
        self::assertMatchesRegularExpression('/' . $utf . 'foo\dB[a-z]a([a-z]|\d)r/u', Helper::bothify($utf . 'foo#B?a*r'));
    }
}
