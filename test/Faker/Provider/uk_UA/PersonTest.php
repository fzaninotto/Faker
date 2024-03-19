<?php

namespace Faker\Test\Provider\uk_UA;

use Faker\Generator;
use Faker\Provider\uk_UA\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testFirstNameMaleReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Максим', $faker->firstNameMale());
    }

    public function testFirstNameFemaleReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Людмила', $faker->firstNameFemale());
    }

    public function testMiddleNameMaleReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Миколайович', $faker->middleNameMale());
    }

    public function testMiddleNameFemaleReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Миколаївна', $faker->middleNameFemale());
    }

    public function testLastNameReturns(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Броваренко', $faker->lastName());
    }
}
