<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Luhn;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class LuhnTest extends TestCase
{
    public static function checkDigitProvider(): array
    {
        return [
            ['7992739871', '3'],
            ['3852000002323', '7'],
            ['37144963539843', '1'],
            ['561059108101825', '0'],
            ['601100099013942', '4'],
            ['510510510510510', '0'],
            [7992739871, '3'],
            [3852000002323, '7'],
            ['37144963539843', '1'],
            ['561059108101825', '0'],
            ['601100099013942', '4'],
            ['510510510510510', '0'],
        ];
    }

    #[DataProvider('checkDigitProvider')]
    public function testComputeCheckDigit($partialNumber, $checkDigit): void
    {
        $this->assertIsString($checkDigit);
        $this->assertEquals($checkDigit, Luhn::computeCheckDigit($partialNumber));
    }

    public static function validatorProvider(): array
    {
        return [
            ['79927398710', false],
            ['79927398711', false],
            ['79927398712', false],
            ['79927398713', true],
            ['79927398714', false],
            ['79927398715', false],
            ['79927398716', false],
            ['79927398717', false],
            ['79927398718', false],
            ['79927398719', false],
            [79927398713, true],
            [79927398714, false],
        ];
    }

    #[DataProvider('validatorProvider')]
    public function testIsValid($number, $isValid): void
    {
        $this->assertEquals($isValid, Luhn::isValid($number));
    }

    public function testGenerateLuhnNumberWithInvalidPrefix(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument should be an integer.');
        Luhn::generateLuhnNumber('abc');
    }
}
