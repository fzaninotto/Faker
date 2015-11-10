<?php

namespace Faker\Test\Provider\en_GB;

use Faker\Generator;
use Faker\Provider\en_GB\Person;

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

    public function testIfFirstNameFemaleCanReturnData()
    {
        $firstNameFemale = $this->faker->firstNameFemale();
        $this->assertNotEmpty($firstNameFemale);
    }
}
?>
