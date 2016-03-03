<?php

namespace Faker\Provider\en_IN;

use Faker\Generator;
use Faker\Provider\en_IN\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
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

  public function testCity()
  {
    $city = $this->faker->city();
    $this->assertNotEmpty($city);
    $this->assertInternalType('string', $city);
  }

  public function testCountry()
  {
    $country = $this->faker->country();
    $this->assertNotEmpty($country);
    $this->assertInternalType('string', $country);
  }

  public function testLocalityName()
  {
    $localityName = $this->faker->localityName();
    $this->assertNotEmpty($localityName);
    $this->assertInternalType('string', $localityName);
  }

  public function testAreaSuffix()
  {
    $areaSuffix = $this->faker->areaSuffix();
    $this->assertNotEmpty($areaSuffix);
    $this->assertInternalType('string', $areaSuffix);
  }
}

?>
