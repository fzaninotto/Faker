<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testLatitude()
    {
        $latitude = $this->faker->latitude();
        $this->assertIsFloat($latitude);
        $this->assertGreaterThanOrEqual(-90, $latitude);
        $this->assertLessThanOrEqual(90, $latitude);
    }

    public function testLongitude()
    {
        $longitude = $this->faker->longitude();
        $this->assertIsFloat($longitude);
        $this->assertGreaterThanOrEqual(-180, $longitude);
        $this->assertLessThanOrEqual(180, $longitude);
    }

    public function testCoordinate()
    {
        $coordinate = $this->faker->localCoordinates();
        $this->assertIsArray($coordinate);
        $this->assertIsFloat($coordinate['latitude']);
        $this->assertGreaterThanOrEqual(-90, $coordinate['latitude']);
        $this->assertLessThanOrEqual(90, $coordinate['latitude']);
        $this->assertIsFloat($coordinate['longitude']);
        $this->assertGreaterThanOrEqual(-180, $coordinate['longitude']);
        $this->assertLessThanOrEqual(180, $coordinate['longitude']);
    }
}
