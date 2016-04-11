<?php

namespace Faker\Test\Provider\ar_SA;

use Faker\Provider\ar_SA\Utils;
use Faker\Calculator\Luhn;

class UtilsTest extends \PHPUnit_Framework_TestCase
{

    public function testGeneretedNumber()
    {
        $this->assertNotEmpty(Utils::generateLuhnNumber(1, 5));
    }

    public function testCorrectLuhnNumberLength()
    {
        $this->assertEquals(10, strlen(Utils::generateLuhnNumber(443, 10)));
        $this->assertEquals(15, strlen(Utils::generateLuhnNumber(5, 15)));
        $this->assertEquals(25, strlen(Utils::generateLuhnNumber(203, 25)));
    }

    public function testIfGeneretedNumberIsLuhnien()
    {
        $this->assertTrue(Luhn::isValid(Utils::generateLuhnNumber(443, 10)));
        $this->assertTrue(Luhn::isValid(Utils::generateLuhnNumber(5, 15)));
        $this->assertTrue(Luhn::isValid(Utils::generateLuhnNumber(203, 25)));
    }
}
