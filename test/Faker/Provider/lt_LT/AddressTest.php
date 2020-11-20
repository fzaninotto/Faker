<?php

namespace Faker\Test\Provider\lt_LT;

use Faker\Generator;
use Faker\Provider\lt_LT\Address;
use Faker\Test\TestCase;

final class AddressTest extends TestCase
{
    /** @var Generator */
    protected $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testMunicipality()
    {
        $result = $this->faker->municipality();
        $this->assertStringEndsWith('savivaldybė', $result);
    }
}
