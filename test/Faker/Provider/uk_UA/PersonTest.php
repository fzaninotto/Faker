<?php

namespace Faker\Test\Provider\uk_UA;

use Faker\Generator;
use Faker\Provider\uk_UA\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->faker = $faker;
    }

    public function testFirstNameMaleReturns()
    {
        $this->assertEquals('Максим', $this->faker->firstNameMale());
    }

    public function testFirstNameFemaleReturns()
    {
        $this->assertEquals('Людмила', $this->faker->firstNameFemale());
    }

    public function testMiddleNameMaleReturns()
    {
        $this->assertEquals('Миколайович', $this->faker->middleNameMale());
    }

    public function testMiddleNameFemaleReturns()
    {
        $this->assertEquals('Миколаївна', $this->faker->middleNameFemale());
    }

    public function testLastNameReturns()
    {
        $this->assertEquals('Броваренко', $this->faker->lastName());
    }


}
