<?php

namespace Faker\Provider\en_KE;

use Faker\Generator;
use Faker\Provider\en_KE\Address;
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

  public function testCity()
  {
    $city = $this->faker->city();
    $this->assertNotEmpty($city);
    $this->assertInternalType('string', $city);
    $this->assertRegExp('/[A-Z][a-z]+/', $city);
  }
}

?>
