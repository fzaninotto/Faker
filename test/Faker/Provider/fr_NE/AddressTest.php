<?php

namespace Faker\Test\Provider\fr_NE;

use Faker\Generator;
use Faker\Provider\fr_NE\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{

/**
 * @var Faker\Generator
 */
  private $faker;

  public function setUp()
  {
      $faker = new Generator();
      $faker->addProvider(new Address($faker));
      $this->faker = $faker;
  }

  public function testSecondaryAddress()
  {
    $secondaryAdress = $this->faker->secondaryAddress();
    $this->assertNotEmpty($secondaryAdress);
    $this->assertInternalType('string', $secondaryAdress);
  }
}
