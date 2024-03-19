<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\Person;
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

    public function testLastNameFemale(): void
    {
        $this->assertEquals('a', \substr($this->faker->lastName('female'), -1));
    }

    public function testLastNameMale(): void
    {
        $this->assertNotEquals('a', \substr($this->faker->lastName('male'), -1));
    }

    public function testLastNameRandom(): void
    {
        $this->assertNotNull($this->faker->lastName());
    }
}
