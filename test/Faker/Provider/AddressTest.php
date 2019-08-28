<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    private $faker;

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
        $this->assertGreaterThanOrEqual(-90, $latitude);
        $this->assertLessThanOrEqual(90, $latitude);
    }

    public function testLongitude()
    {
        $longitude = $this->faker->longitude();
        $this->assertInternalType('float', $longitude);
        $this->assertGreaterThanOrEqual(-180, $longitude);
        $this->assertLessThanOrEqual(180, $longitude);
    }

    public function testCoordinate()
    {
        $coordinate = $this->faker->localCoordinates();
        $this->assertInternalType('array', $coordinate);
        $this->assertInternalType('float', $coordinate['latitude']);
        $this->assertGreaterThanOrEqual(-90, $coordinate['latitude']);
        $this->assertLessThanOrEqual(90, $coordinate['latitude']);
        $this->assertInternalType('float', $coordinate['longitude']);
        $this->assertGreaterThanOrEqual(-180, $coordinate['longitude']);
        $this->assertLessThanOrEqual(180, $coordinate['longitude']);
    }
}
