<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Ean;
use PHPUnit\Framework\TestCase;

class EanTest extends TestCase
{
    public function ean8checksumProvider()
    {
        return [
            ['1234567', '0'],
            ['2345678', '5'],
            ['3456789', '0'],
        ];
    }

    public function ean8ValidationProvider()
    {
        return [
            ['1234567891231', true],
            ['2354698521469', true],
            ['3001092650834', false],
            ['3921092190838', false],
        ];
    }

    /**
     * @dataProvider ean8checksumProvider
     */
    public function testChecksumEan8($partial, $checksum)
    {
        $this->assertEquals($checksum, Ean::checksum($partial));
    }

    /**
     * @dataProvider ean8ValidationProvider
     */
    public function testEan8Validation($ean8, $valid)
    {
        $this->assertTrue(Ean::isValid($ean8) === $valid);
    }

    public function ean13checksumProvider()
    {
        return [
            ['123456789123', '1'],
            ['978020137962', '4'],
            ['235469852146', '9'],
            ['300109265083', '5'],
            ['392109219083', '7'],
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
     * @dataProvider ean13checksumProvider
     */
    public function testChecksumEan13($partial, $checksum)
    {
        $this->assertEquals($checksum, Ean::checksum($partial));
    }

    /**
     * @dataProvider ean13ValidationProvider
     */
    public function testEan13Validation($ean13, $valid)
    {
        $this->assertTrue(Ean::isValid($ean13) === $valid);
    }
}
