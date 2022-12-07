<?php

namespace Faker\Test\Provider\de_CH;

use Faker\Provider\de_CH\Address;
use Faker\Provider\de_CH\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testCanton(): void
    {
        $canton = $this->faker->canton();
        self::assertIsArray($canton);
        self::assertCount(1, $canton);

        foreach ($canton as $cantonShort => $cantonName) {
            self::assertIsString($cantonShort);
            self::assertEquals(2, strlen($cantonShort));
            self::assertIsString($cantonName);
            self::assertGreaterThan(2, strlen($cantonName));
        }
    }

    public function testCantonName(): void
    {
        $cantonName = $this->faker->cantonName();
        self::assertIsString($cantonName);
        self::assertGreaterThan(2, strlen($cantonName));
    }

    public function testCantonShort(): void
    {
        $cantonShort = $this->faker->cantonShort();
        self::assertIsString($cantonShort);
        self::assertEquals(2, strlen($cantonShort));
    }

    public function testAddress(): void
    {
        $address = $this->faker->address();
        self::assertIsString($address);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);

        yield new Person($this->faker);
    }
}
