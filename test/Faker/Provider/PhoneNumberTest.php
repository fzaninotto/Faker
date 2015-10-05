<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Calculator\Luhn;
use Faker\Provider\PhoneNumber as PhoneNumberProvider;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumberProvider($faker));
        $this->faker = $faker;
    }

    public function testImeiReturnsValidNumber()
    {
        $imei = $this->faker->imei();
        $this->assertTrue(Luhn::isValid($imei));
    }
}
