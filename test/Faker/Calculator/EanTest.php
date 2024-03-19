<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Ean;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class EanTest extends TestCase
{
    public static function Ean8checksumProvider(): array
    {
        return [
            ['1234567', '0'],
            ['2345678', '5'],
            ['3456789', '0'],
        ];
    }

    public static function ean8ValidationProvider(): array
    {
        return [
            ['1234567891231', true],
            ['2354698521469', true],
            ['3001092650834', false],
            ['3921092190838', false],
        ];
    }

    #[DataProvider('Ean8checksumProvider')]
    public function testChecksumEan8($partial, $checksum): void
    {
        $this->assertEquals($checksum, Ean::checksum($partial));
    }

    #[DataProvider('ean8ValidationProvider')]
    public function testEan8Validation($ean8, $valid): void
    {
        $this->assertSame(Ean::isValid($ean8), $valid);
    }

    public static function Ean13checksumProvider(): array
    {
        return [
            ['123456789123', '1'],
            ['978020137962', '4'],
            ['235469852146', '9'],
            ['300109265083', '5'],
            ['392109219083', '7'],
        ];
    }

    public static function ean13ValidationProvider(): array
    {
        return [
            ['1234567891231', true],
            ['2354698521469', true],
            ['3001092650834', false],
            ['3921092190838', false],
        ];
    }

    #[DataProvider('Ean13checksumProvider')]
    public function testChecksumEan13($partial, $checksum): void
    {
        $this->assertEquals($checksum, Ean::checksum($partial));
    }

    #[DataProvider('ean13ValidationProvider')]
    public function testEan13Validation($ean13, $valid): void
    {
        $this->assertSame(Ean::isValid($ean13), $valid);
    }
}
