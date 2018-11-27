<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Inn;
use PHPUnit\Framework\TestCase;

class InnTest extends TestCase
{
    public function checksumProvider()
    {
        return array(
            array('143525744', '4'),
            array('500109285', '3'),
            array('500109285', '3'),
            array('500109285', '3'),
            array('027615723', '1'),

            array('7811530407', '57'),
            array('3879174687', '54'),
            array('4781039463', '36'),
            array('7126814691', '66'),
            array('2254163870', '34')
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

            array('224314434124', true),
            array('190368316756', true),
            array('842873734726', true),
            array('137038665182', true),
            array('497605302008', true),

            array('1111111111', false),
            array('0123456789', false),

            array('111111111111', false),
            array('012345678910', false)
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
