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

  public function testCountry()
  {
    $country = $this->faker->country();
    $this->assertNotEmpty($country);
    $this->assertInternalType('string', $country);
    $this->assertRegExp('/[A-Z][a-z]+/', $country);
  }

  public function testMunicipality()
  {
    $municipality = $this->faker->municipality();
    $this->assertNotEmpty($municipality);
    $this->assertInternalType('string', $municipality);
    $this->assertRegExp('/[A-Z][a-z]+/',$municipality);
  }

  public function testCounty()
  {
    $county = $this->faker->county();
    $this->assertNotEmpty($county);
    $this->assertInternalType('string', $county);
    $this->assertRegExp('/[A-Z][a-z]+/',$county);
  }

  public function testTown()
  {
    $town = $this->faker->town();
    $this->assertNotEmpty($town);
    $this->assertInternalType('string', $town);
    $this->assertRegExp('/[A-Z][a-z]+/',$town);
  }

  public function testCenter()
  {
    $center = $this->faker->center();
    $this->assertNotEmpty($center);
    $this->assertInternalType('string', $center);
    $this->assertRegExp('/[A-Z][a-z]+/',$center);
  }

  public function testStreetName()
  {
    $street = $this->faker->street();
    $this->assertNotEmpty($street);
    $this->assertInternalType('string', $street);
    $this->assertRegExp('/[A-Z][a-z]+/',$street);
  }

  public function testPostCode()
  {
    $code = $this->faker->postcode();
    $this->assertNotEmpty($code);
    $this->assertInternalType('string', $code);
    $this->assertRegExp('/[0-9]+/',$code);
  }
}

?>
