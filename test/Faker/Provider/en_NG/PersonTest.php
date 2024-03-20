<?php

namespace Faker\Test\Provider\en_NG;

use Faker\Generator;
use Faker\Provider\en_NG\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testPersonNameIsAValidString(): void
    {
        $name = $this->faker->name;

        $this->assertNotEmpty($name);
        $this->assertIsString($name);
    }
}
