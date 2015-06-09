<?php

namespace Faker\Provider\ro_RO;


use Faker\Generator;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testLatitude()
    {
        $latitude = $this->faker->latitude();
        $this->assertInternalType('float', $latitude);
        $this->assertGreaterThanOrEqual(44.308126, $latitude);
        $this->assertLessThanOrEqual(47.931066, $latitude);
    }

    public function testLongitude()
    {
        $longitude = $this->faker->longitude();
        $this->assertInternalType('float', $longitude);
        $this->assertGreaterThanOrEqual(22.115478, $longitude);
        $this->assertLessThanOrEqual(27.542724, $longitude);
    }
}