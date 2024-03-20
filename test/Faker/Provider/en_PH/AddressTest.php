<?php

namespace Faker\Test\Provider\en_PH;

use Faker\Generator;
use Faker\Provider\en_PH\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testProvince(): void
    {
        $province = $this->faker->province();
        $this->assertNotEmpty($province);
        $this->assertIsString($province);
    }

    public function testCity(): void
    {
        $city = $this->faker->city();
        $this->assertNotEmpty($city);
        $this->assertIsString($city);
    }

    public function testMunicipality(): void
    {
        $municipality = $this->faker->municipality();
        $this->assertNotEmpty($municipality);
        $this->assertIsString($municipality);
    }

    public function testBarangay(): void
    {
        $barangay = $this->faker->barangay();
        $this->assertIsString($barangay);
    }
}
