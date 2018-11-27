<?php

namespace Faker\Test\Calculator;

use Faker\Calculator\Inn;
use Faker\Calculator\Snils;
use PHPUnit\Framework\TestCase;

class SnilsTest extends TestCase
{
    public function checksumProvider()
    {
        return array(
            array('796842147', '69'),
            array('372232426', '53'),
            array('120148300', '92'),
            array('530139835', '60'),
            array('516675385', '14')
         );
    }

    /**
     * @dataProvider checksumProvider
     */
    public function testChecksum($snils, $checksum)
    {
        $this->assertEquals($checksum, Snils::checksum($snils), $snils);
    }

    public function validatorProvider()
    {
        return array(
            array('82188340409', true),
            array('77208613509', true),
            array('92410081763', true),
            array('96270974654', true),
            array('49649324447', true),

            array('83599909587', false),
            array('11111111111', false),
            array('12345678910', false)
        );
    }

    /**
     * @dataProvider validatorProvider
     */
    public function testIsValid($snils, $isValid)
    {
        $this->assertEquals($isValid, Snils::isValid($snils), $snils);
    }
}
