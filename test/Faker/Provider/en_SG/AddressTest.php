<?php

namespace Faker\Test\Provider\en_SG;

use Faker\Provider\en_SG\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testStreetNumber()
    {
        self::assertMatchesRegularExpression('/^\d{2,3}$/', $this->faker->streetNumber());
    }

    public function testBlockNumber()
    {
        self::assertMatchesRegularExpression('/^Blk\s*\d{2,3}[A-H]*$/i', $this->faker->blockNumber());
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
