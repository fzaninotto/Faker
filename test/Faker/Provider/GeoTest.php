<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Geo;

class GeoTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Geo($faker));
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
}
