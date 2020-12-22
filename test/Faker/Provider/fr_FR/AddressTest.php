<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testSecondaryAddress()
    {
        $secondaryAdress = $this->faker->secondaryAddress();
        self::assertNotEmpty($secondaryAdress);
        self::assertIsString($secondaryAdress);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
