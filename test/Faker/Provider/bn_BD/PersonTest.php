<?php

namespace Faker\Test\Provider\bn_BD;

use Faker\Generator;
use Faker\Provider\bn_BD\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
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

    public function testIfFirstNameFemaleCanReturnData()
    {
        $firstNameFemale = $this->faker->firstNameFemale();
        $this->assertNotEmpty($firstNameFemale);
    }
}
?>
