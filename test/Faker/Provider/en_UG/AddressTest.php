<?php

namespace Faker\Test\Provider\en_UG;

use Faker\Generator;
use Faker\Provider\en_UG\Address;
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

  public function testCityName()
  {
    $city = $this->faker->cityName();
    $this->assertNotEmpty($city);
    $this->assertInternalType('string', $city);
  }

  public function testDistrict()
  {
    $district = $this->faker->district();
    $this->assertNotEmpty($district);
    $this->assertInternalType('string', $district);
  }

  public function testRegion()
  {
    $region = $this->faker->region();
    $this->assertNotEmpty($region);
    $this->assertInternaltype('string', $region);
  }
}
