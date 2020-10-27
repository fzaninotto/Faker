<?php

namespace Faker\Test\Provider\en_UG;

use Faker\Generator;
use Faker\Provider\en_UG\Address;
use Faker\Test\TestCase;

final class AddressTest extends TestCase
{

/**
 * @var Faker\Generator
 */
  private $faker;

  protected function setUp(): void
  {
      $faker = new Generator();
      $faker->addProvider(new Address($faker));
      $this->faker = $faker;
  }

  public function testCityName()
  {
    $city = $this->faker->cityName();
    $this->assertNotEmpty($city);
    $this->assertIsString($city);
  }

  public function testDistrict()
  {
    $district = $this->faker->district();
    $this->assertNotEmpty($district);
    $this->assertIsString($district);
  }

  public function testRegion()
  {
    $region = $this->faker->region();
    $this->assertNotEmpty($region);
    $this->assertIsString($region);
  }
}
