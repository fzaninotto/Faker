<?php

namespace Faker\Test\Provider\es_AR;

use Faker\Generator;
use Faker\Provider\es_AR\Person;

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
