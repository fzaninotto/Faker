<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Generator;
use Faker\Provider\fr_FR\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{

/**
 * @var Generator
 */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testSecondaryAddress()
    {
        $secondaryAdress = $this->faker->secondaryAddress();
        $this->assertNotEmpty($secondaryAdress);
        $this->assertIsString($secondaryAdress);
    }
}
