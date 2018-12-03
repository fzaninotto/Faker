<?php

namespace Faker\Test\Provider\ru_RU;

use PHPUnit\Framework\TestCase;
use Faker\Generator;
use Faker\Provider\ru_RU\Person;

/**
 * @group ru_RU
 */
class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(0);
        $this->faker = $faker;

    }

    public function testFirstNameMale() {
        $this->assertEquals('Евгений', $this->faker->firstNameMale());
    }

    public function testFirstNameFemale() {
        $this->assertEquals('Капитолина', $this->faker->firstNameFemale());
    }

    public function testLastNameMale() {
        $this->assertEquals('Быков', $this->faker->lastNameMale());
    }

    public function testLastNameFemale() {
        $this->assertEquals('Быкова', $this->faker->lastNameFemale());
    }
}