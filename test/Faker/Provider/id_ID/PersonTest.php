<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testIfFirstNameMaleCanReturnData()
    {
        $firstNameMale = $this->faker->firstNameMale();
        $this->assertNotEmpty($firstNameMale);
    }

    public function testIfLastNameMaleCanReturnData()
    {
        $lastNameMale = $this->faker->lastNameMale();
        $this->assertNotEmpty($lastNameMale);
    }

    public function testIfFirstNameFemaleCanReturnData()
    {
        $firstNameFemale = $this->faker->firstNameFemale();
        $this->assertNotEmpty($firstNameFemale);
    }

    public function testIfLastNameFemaleCanReturnData()
    {
        $lastNameFemale = $this->faker->lastNameFemale();
        $this->assertNotEmpty($lastNameFemale);
    }
}
