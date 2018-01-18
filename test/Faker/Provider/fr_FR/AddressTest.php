<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Generator;
use Faker\Provider\fr_FR\Address;
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

  /**
   * @test
   */
  public function testSecondaryAddress()
  {
    $secondaryAdress = $this->faker->secondaryAddress();
    $this->assertNotEmpty($secondaryAdress);
    $this->assertInternalType('string', $secondaryAdress);
  }
}
