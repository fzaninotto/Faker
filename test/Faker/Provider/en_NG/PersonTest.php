<?php

namespace Faker\Test\Provider\ng_NG;

use Faker\Generator;
use Faker\Provider\en_NG\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
     /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testPersonNameIsAValidString()
    {
        $name = $this->faker->name;

        $this->assertNotEmpty($name);
        $this->assertIsString($name);
    }
}
