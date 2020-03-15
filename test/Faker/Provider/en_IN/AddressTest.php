<?php

namespace Faker\Provider\en_IN;

use Faker\Generator;
use Faker\Provider\en_IN\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{

  /**
   * @var Generator
   */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testCity()
    {
        $city = $this->faker->city();
        $this->assertNotEmpty($city);
        $this->assertIsString($city);
        $this->assertRegExp('/[A-Z][a-z]+/', $city);
    }

    public function testCountry()
    {
        $country = $this->faker->country();
        $this->assertNotEmpty($country);
        $this->assertIsString($country);
        $this->assertRegExp('/[A-Z][a-z]+/', $country);
    }

    public function testLocalityName()
    {
        $localityName = $this->faker->localityName();
        $this->assertNotEmpty($localityName);
        $this->assertIsString($localityName);
        $this->assertRegExp('/[A-Z][a-z]+/', $localityName);
    }

    public function testAreaSuffix()
    {
        $areaSuffix = $this->faker->areaSuffix();
        $this->assertNotEmpty($areaSuffix);
        $this->assertIsString($areaSuffix);
        $this->assertRegExp('/[A-Z][a-z]+/', $areaSuffix);
    }
}
