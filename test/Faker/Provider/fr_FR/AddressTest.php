<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Generator;
use Faker\Provider\fr_FR\Address;
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

    public function testSecondaryAddress(): void
    {
        $secondaryAdress = $this->faker->secondaryAddress();
        $this->assertNotEmpty($secondaryAdress);
        $this->assertIsString($secondaryAdress);
    }
}
