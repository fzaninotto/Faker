<?php

namespace Faker\Provider\en_AU;

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

    public function testCityPrefix(): void
    {
        $cityPrefix = $this->faker->cityPrefix();
        $this->assertNotEmpty($cityPrefix);
        $this->assertIsString($cityPrefix);
        $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $cityPrefix);
    }

    public function testStreetSuffix(): void
    {
        $streetSuffix = $this->faker->streetSuffix();
        $this->assertNotEmpty($streetSuffix);
        $this->assertIsString($streetSuffix);
        $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $streetSuffix);
    }

    public function testState(): void
    {
        $state = $this->faker->state();
        $this->assertNotEmpty($state);
        $this->assertIsString($state);
        $this->assertMatchesRegularExpression('/[A-Z][a-z]+/', $state);
    }
}
