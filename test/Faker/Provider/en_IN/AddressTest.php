<?php

namespace Faker\Provider\en_IN;

use Faker\Generator;
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

    public function testCity(): void
    {
        $city = $this->faker->city();
        $this->assertNotEmpty($city);
        $this->assertIsString($city);
        $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $city);
    }

    public function testCountry(): void
    {
        $country = $this->faker->country();
        $this->assertNotEmpty($country);
        $this->assertIsString($country);
        $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $country);
    }

    public function testLocalityName(): void
    {
        $localityName = $this->faker->localityName();
        $this->assertNotEmpty($localityName);
        $this->assertIsString($localityName);
        $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $localityName);
    }

    public function testAreaSuffix(): void
    {
        $areaSuffix = $this->faker->areaSuffix();
        $this->assertNotEmpty($areaSuffix);
        $this->assertIsString($areaSuffix);
        $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $areaSuffix);
    }
}
