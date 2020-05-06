<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Inn;
use PHPUnit\Framework\TestCase;

class InnTest extends TestCase
{

    public function checksumProvider()
    {
        return [
            ['143525744', '4', 'company'],
            ['500109285', '3', 'company'],
            ['500109285', '3', 'company'],
            ['500109285', '3', 'company'],
            ['027615723', '1', 'company'],
            ['500100732259', '59', 'person'],
            ['7830002293', '3', 'company']
        ];
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testChecksum($inn, $checksum, $type)
    {
        $this->assertEquals($checksum, Inn::checksum($inn, $type), $inn);
    }

    /**
     * @dataProvider innMaskProvider
     */
    public function testGenerate($strlen, $mask)
    {
        $this->assertEquals($strlen, strlen(Inn::generate("", $mask)));
    }

    public function testGenerateMaskException()
    {
        $this->expectException(\LogicException::class);
        Inn::generate("", '#');
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

    public function innMaskProvider()
    {
        return [
            [10, 'company'],
            [12, 'person'],
        ];
    }
}
