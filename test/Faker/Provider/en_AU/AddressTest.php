<?php

namespace Faker\Provider\en_AU;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testCityPrefix(): void
    {
        $cityPrefix = $this->faker->cityPrefix();
        self::assertNotEmpty($cityPrefix);
        self::assertIsString($cityPrefix);
        self::assertMatchesRegularExpression('/[A-Z][a-z]+/', $cityPrefix);
    }

    public function testStreetSuffix(): void
    {
        $streetSuffix = $this->faker->streetSuffix();
        self::assertNotEmpty($streetSuffix);
        self::assertIsString($streetSuffix);
        self::assertMatchesRegularExpression('/[A-Z][a-z]+/', $streetSuffix);
    }

    public function testState(): void
    {
        $state = $this->faker->state();
        self::assertNotEmpty($state);
        self::assertIsString($state);
        self::assertMatchesRegularExpression('/[A-Z][a-z]+/', $state);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
