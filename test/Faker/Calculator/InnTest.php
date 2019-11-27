<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Inn;
use PHPUnit\Framework\TestCase;

final class InnTest extends TestCase
{

    public function checksumProvider()
    {
        return array(
            array('143525744', '4'),
            array('500109285', '3'),
            array('500109285', '3'),
            array('500109285', '3'),
            array('027615723', '1')
        );
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testChecksum($inn, $checksum)
    {
        $this->assertEquals($checksum, Inn::checksum($inn), $inn);
    }

    public function validatorProvider()
    {
        return array(
            array('5902179757', true),
            array('5408294405', true),
            array('2724164617', true),
            array('0726000515', true),
            array('6312123552', true),

            array('1111111111', false),
            array('0123456789', false),
        );
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid($inn, $isValid)
    {
        $this->assertEquals($isValid, Inn::isValid($inn), $inn);
    }
}
