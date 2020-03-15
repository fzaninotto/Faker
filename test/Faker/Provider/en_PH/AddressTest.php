<?php

namespace Faker\Test\Provider\en_PH;

use Faker\Generator;
use Faker\Provider\en_PH\Address;
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

    public function testProvince()
    {
        $province = $this->faker->province();
        $this->assertNotEmpty($province);
        $this->assertIsString($province);
    }

    public function testCity()
    {
        $city = $this->faker->city();
        $this->assertNotEmpty($city);
        $this->assertIsString($city);
    }

    public function testMunicipality()
    {
        $municipality = $this->faker->municipality();
        $this->assertNotEmpty($municipality);
        $this->assertIsString($municipality);
    }

    public function testBarangay()
    {
        $barangay = $this->faker->barangay();
        $this->assertIsString($barangay);
    }
}
