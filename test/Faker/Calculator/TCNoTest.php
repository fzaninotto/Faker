<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\TCNo;
use PHPUnit\Framework\TestCase;

class TCNoTest extends TestCase
{
    public function checksumProvider()
    {
        return array(
            array('553006348', '82'),
            array('350630743', '78'),
            array('550600932', '88'),
            array('487932947', '70'),
            array('168113862', '40')
        );
    }

    /**
     * @dataProvider checksumProvider
     * @param $tcNo
     * @param $checksum
     */
    public function testChecksum($tcNo, $checksum)
    {
        $this->assertEquals($checksum, TCNo::checksum($tcNo), $tcNo);
    }

    public function validatorProvider()
    {
        return array(
            array('22978160678', true),
            array('26480045324', true),
            array('47278360658', true),
            array('34285002510', true),
            array('19874561012', true),

            array('11111111111', false),
            array('11234567899', false),
        );
    }

    /**
     * @dataProvider validatorProvider
     * @param $tcNo
     * @param $isValid
     */
    public function testIsValid($tcNo, $isValid)
    {
        $this->assertEquals($isValid, TCNo::isValid($tcNo), $tcNo);
    }
}
