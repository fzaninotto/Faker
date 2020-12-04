<?php

namespace Faker\Test\Provider\pl_PL;

use Faker\Provider\pl_PL\Address;
use Faker\Test\TestCase;

final class AddressTest extends TestCase
{
    public function testState()
    {
        $state = $this->faker->state();
        self::assertNotEmpty($state);
        self::assertIsString($state);
        self::assertMatchesRegularExpression('/[a-z]+/', $state);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
