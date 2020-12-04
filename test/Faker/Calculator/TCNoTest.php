<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\TCNo;
use Faker\Test\TestCase;

final class TCNoTest extends TestCase
{
    public function checksumProvider()
    {
        return [
            ['553006348', '82'],
            ['350630743', '78'],
            ['550600932', '88'],
            ['487932947', '70'],
            ['168113862', '40']
        ];
    }

    /**
     * @dataProvider checksumProvider
     * @param $tcNo
     * @param $checksum
     */
    public function testChecksum($tcNo, $checksum)
    {
        self::assertSame($checksum, TCNo::checksum($tcNo), $tcNo);
    }

    public function validatorProvider()
    {
        return [
            ['22978160678', true],
            ['26480045324', true],
            ['47278360658', true],
            ['34285002510', true],
            ['19874561012', true],

            ['11111111111', false],
            ['11234567899', false],
        ];
    }

    /**
     * @dataProvider validatorProvider
     * @param $tcNo
     * @param $isValid
     */
    public function testIsValid($tcNo, $isValid)
    {
        self::assertSame($isValid, TCNo::isValid($tcNo), $tcNo);
    }
}
