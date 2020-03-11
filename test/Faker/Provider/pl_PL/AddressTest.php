<?php

namespace Faker\Provider\pl_PL;

use Faker\Generator;
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

    /**
     * Test the validity of state
     */
    public function testState()
    {
        $state = $this->faker->state();
        $this->assertNotEmpty($state);
        $this->assertIsString($state);
        $this->assertRegExp('/[a-z]+/', $state);
    }
}
