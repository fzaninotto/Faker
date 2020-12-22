<?php

namespace Faker\Test\Provider\uk_UA;

use Faker\Provider\uk_UA\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testFirstNameMaleReturns()
    {
        self::assertEquals('Максим', $this->faker->firstNameMale());
    }

    public function testFirstNameFemaleReturns()
    {
        self::assertEquals('Людмила', $this->faker->firstNameFemale());
    }

    public function testMiddleNameMaleReturns()
    {
        self::assertEquals('Миколайович', $this->faker->middleNameMale());
    }

    public function testMiddleNameFemaleReturns()
    {
        self::assertEquals('Миколаївна', $this->faker->middleNameFemale());
    }

    public function testLastNameReturns()
    {
        self::assertEquals('Броваренко', $this->faker->lastName());
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
