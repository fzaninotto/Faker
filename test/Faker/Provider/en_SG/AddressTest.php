<?php

namespace Faker\Test\Provider\en_SG;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\en_SG\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    protected Generator $faker;

    protected function setUp(): void
    {
        $faker = Factory::create('en_SG');
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testStreetNumber(): void
    {
        $this->assertMatchesRegularExpression('/^\d{2,3}$/', $this->faker->streetNumber());
    }

    public function testBlockNumber(): void
    {
        $this->assertMatchesRegularExpression('/^Blk\s*\d{2,3}[A-H]*$/i', $this->faker->blockNumber());
    }
}
