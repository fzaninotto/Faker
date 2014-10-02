<?php

namespace Faker\Test\Provider\fi_FI;

use Faker\Generator;
use Faker\Provider\fi_FI\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    /** @var Generator */
    protected $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testPIN()
    {
        return $this->faker->personalIdentityNumber();
    }

    public function testSafePIN()
    {
        $pin = $this->faker->safePersonalIdentityNumber();
        $this->assertEquals('9', substr($pin, 7, 1), "First character of the individual number isn't 9");
        return $pin;
    }

    public function testFemalePIN()
    {
        $pin = $this->faker->personalIdentityNumber(null, Person::GENDER_FEMALE);
        $this->assertEquals(true, (int) substr($pin, 9, 1) % 2 == 0 ? true : false, "Last number of female individual number isn't even");
        return $pin;

    }

    public function testMalePIN()
    {
        $pin = $this->faker->personalIdentityNumber(null, Person::GENDER_MALE);
        $this->assertEquals(true, (int) substr($pin, 9, 1) % 2 == 0 ? true : false, "Last number of male individual number isn't odd");
        return $pin;

    }


    public function test21stCenturyPIN()
    {
        $pin = $this->faker->personalIdentityNumber(new \DateTime("2000-01-01"));
        $this->assertEquals(true, substr($pin, 6, 1) % 2 == 'A' ? true : false, "21st century number should have A as separator.");
        return $pin;
    }

    /**
     * @depends testPIN
     * @depends testSafePIN
     * @depends testFemalePIN
     * @depends testMalePIN
     * @depends test21stCenturyPIN
     */
    public function testValidity()
    {
        foreach (func_get_args() as $pin) {
            $this->assertStringMatchesFormat('%d%d%d%d%d%d%c%d%d%d%c', $pin);
            $this->assertEquals(1, preg_match('/^(\d{6})([A\-])(\d{3})([0123456789ABCDEFHJKLMNPRSTUVWXY])$/', $pin, $matches), "Personal identification number isn't well formed");
            $bday = $matches[1];
            $this->assertInstanceOf('DateTime', $dt = \DateTime::createFromFormat('dmy', $bday));
        }
    }
}
