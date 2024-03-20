<?php

namespace Faker\Test\Provider\en_UG;

use Faker\Generator;
use Faker\Provider\en_UG\Address;
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

    public function testCityName(): void
    {
        $city = $this->faker->cityName();
        $this->assertNotEmpty($city);
        $this->assertIsString($city);
    }

    public function testDistrict(): void
    {
        $district = $this->faker->district();
        $this->assertNotEmpty($district);
        $this->assertIsString($district);
    }

    public function testRegion(): void
    {
        $region = $this->faker->region();
        $this->assertNotEmpty($region);
        $this->assertIsString($region);
    }
}
