<?php

namespace Faker\Provider\en_KE;

use Faker\Generator;
use Faker\Provider\en_KE\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

  /**
   * @var Faker\Generator
   */
  private $faker;

  public function setUp()
  {
    $faker = new Generator();
    $faker->addProvider(new Person($faker));
    $this->faker = $faker;
  }

  public function testFirstNameMale()
  {
    $name = $this->faker->firstNameMale();
    $this->assertNotEmpty($name);
    $this->assertInternalType('string', $name);
    $this->assertRegExp('/[A-Z][a-z]+/', $name);
  }

  public function testFirstNameFemale()
  {
    $name = $this->faker->firstNameFemale();
    $this->assertNotEmpty($name);
    $this->assertInternalType('string', $name);
    $this->assertRegExp('/[A-Z][a-z]+/', $name);
  }

  public function testLastNameMale()
  {
    $name = $this->faker->lastNameMale();
    $this->assertNotEmpty($name);
    $this->assertInternalType('string', $name);
    $this->assertRegExp('/[A-Z][a-z]+/', $name);
  }

  public function testLastNameFemale()
  {
    $name = $this->faker->lastNameFemale();
    $this->assertNotEmpty($name);
    $this->assertInternalType('string', $name);
    $this->assertRegExp('/[A-Z][a-z]+/', $name);
  }
}