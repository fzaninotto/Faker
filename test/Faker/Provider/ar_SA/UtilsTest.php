<?php

namespace Faker\Test\Provider\ar_SA;

use Faker\Generator;
use Faker\Provider\ar_SA\Utils;
use Faker\Calculator\Luhn;

class UtilsTest extends \PHPUnit_Framework_TestCase
{

    public function testGeneretedNumber()
    {
        $this->assertNotEmpty(Utils::generateLuhnNumber(1, 5));
    }

    public function testIfGeneretedNumberIsLuhnien()
    {
        $this->assertTrue(Luhn::isValid(Utils::generateLuhnNumber(443, 10)));
        $this->assertTrue(Luhn::isValid(Utils::generateLuhnNumber(5, 15)));
        $this->assertTrue(Luhn::isValid(Utils::generateLuhnNumber(203, 25)));
    }
}
