<?php

namespace Faker\Test\Provider\fi_FI;

use Faker\Generator;
use Faker\Provider\DateTime;
use Faker\Provider\fi_FI\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new DateTime($faker));
        $this->faker = $faker;
    }

    public function testNationalIdentificationNumber()
    {
        $nationalIdNumber = $this->faker->nationalIdNumber();
        $this->assertRegExp('/^(0[1-9]|[12]\d|3[01])(0[1-9]|1[0-2])([5-9]\d\+|\d\d-|[01]\dA)\d{3}[\dA-Z]$/', $nationalIdNumber);
    }
}
