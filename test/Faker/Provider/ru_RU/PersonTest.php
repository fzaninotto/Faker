<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Provider\ru_RU\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    public function testLastNameFemale()
    {
        self::assertEquals('а', substr($this->faker->lastName('female'), -2, 2));
    }

    public function testLastNameMale()
    {
        self::assertNotEquals('а', substr($this->faker->lastName('male'), -2, 2));
    }

    public function testLastNameRandom()
    {
        self::assertNotNull($this->faker->lastName());
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
