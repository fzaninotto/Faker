<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Inn;
use PHPUnit\Framework\TestCase;

class InnTest extends TestCase
{

    public function checksumProvider()
    {
        return [
            ['143525744', '4'],
            ['500109285', '3'],
            ['500109285', '3'],
            ['500109285', '3'],
            ['027615723', '1'],
            ['500100732259', '5'],
            ['7830002293', '3']
        ];
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
        return [
            ['5902179757', true],
            ['5408294405', true],
            ['2724164617', true],
            ['0726000515', true],
            ['6312123552', true],

            ['1111111111', false],
            ['0123456789', false],
        ];
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid($inn, $isValid)
    {
        $this->assertEquals($isValid, Inn::isValid($inn), $inn);
    }
}
