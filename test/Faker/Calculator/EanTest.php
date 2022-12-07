<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Ean;
use Faker\Test\TestCase;

final class EanTest extends TestCase
{
    public function Ean8checksumProvider()
    {
        return [
            ['1234567', 0],
            ['2345678', 5],
            ['3456789', 0],
        ];
    }

    public function ean8ValidationProvider()
    {
        return [
            ['1234567891231', true],
            ['2354698521469', true],
            ['3001092650834', false],
            ['3921092190838', false],
            ['39210921908381', false],
        ];
    }

    /**
     * @dataProvider Ean8checksumProvider
     */
    public function testChecksumEan8($partial, $checksum): void
    {
        self::assertSame($checksum, Ean::checksum($partial));
    }

    /**
     * @dataProvider ean8ValidationProvider
     */
    public function testEan8Validation($ean8, $valid): void
    {
        self::assertSame($valid, Ean::isValid($ean8));
    }

    public function Ean13checksumProvider()
    {
        return [
            ['123456789123', 1],
            ['978020137962', 4],
            ['235469852146', 9],
            ['300109265083', 5],
            ['392109219083', 7],
        ];
    }

    public function ean13ValidationProvider()
    {
        return [
            ['1234567891231', true],
            ['2354698521469', true],
            ['3001092650834', false],
            ['3921092190838', false],
        ];
    }

    /**
     * @dataProvider Ean13checksumProvider
     */
    public function testChecksumEan13($partial, $checksum): void
    {
        self::assertSame($checksum, Ean::checksum($partial));
    }

    /**
     * @dataProvider ean13ValidationProvider
     */
    public function testEan13Validation($ean13, $valid): void
    {
        self::assertSame($valid, Ean::isValid($ean13));
    }
}
