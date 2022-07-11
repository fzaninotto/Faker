<?php

namespace Faker\Provider\en_AU;

use Faker\Generator;
use Faker\Provider\en_AU\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{

  /**
   * @var Faker\Generator
   */
  private $faker;

  protected function setUp()
  {
    $faker = new Generator();
    $faker->addProvider(new Address($faker));
    $this->faker = $faker;
  }

  public function testCityPrefix()
  {
    $cityPrefix = $this->faker->cityPrefix();
    $this->assertNotEmpty($cityPrefix);
    $this->assertInternalType('string', $cityPrefix);
    $this->assertRegExp('/[A-Z][a-z]+/', $cityPrefix);
  }

  public function testStreetSuffix()
  {
    $streetSuffix = $this->faker->streetSuffix();
    $this->assertNotEmpty($streetSuffix);
    $this->assertInternalType('string', $streetSuffix);
    $this->assertRegExp('/[A-Z][a-z]+/', $streetSuffix);
  }

  public function testState()
  {
    $state = $this->faker->state();
    $this->assertNotEmpty($state);
    $this->assertInternalType('string', $state);
    $this->assertRegExp('/[A-Z][a-z]+/', $state);
  }
}

?>
