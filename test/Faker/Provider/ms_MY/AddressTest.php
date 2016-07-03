<?php

namespace Faker\Provider\ms_MY;

use Faker\Generator;
use Faker\Provider\ms_MY\Address;
use Faker\Provider\Person;

class AddressTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @var Faker\Generator
   */
  private $faker;

  /**
   * @group ms_MY
   */
  public function setUp()
  {
    $faker = new Generator();
    $faker->addProvider(new Person($faker));
    $faker->addProvider(new Address($faker));
    $this->faker = $faker;
  }

  /**
   * @group  ms_MY
   * Test the validity of state
   */
  public function testState()
  {
    $state = $this->faker->state();
    $this->assertNotEmpty($state);
    $this->assertInternalType('string', $state);
    $this->assertRegExp('/[A-Z][a-z]+/', $state);
  }

  /**
   * @group ms_MY
   */
  public function testCity(){
    $city = $this->faker->city();
    $this->assertNotEmpty($city);
    $this->assertInternalType('string', $city);
    $this->assertRegExp('/[A-Z][a-z]+/', $city);
  }

  /**
   * @group ms_MY
   */
  public function testAddress(){
    $address = $this->faker->address();
    $this->assertNotEmpty($address);
    $this->assertInternalType('string', $address);
  }
  
  /**
   * @group ms_MY
   */
  public function testStreetName(){
    $streetName = $this->faker->streetName();
    $this->assertNotEmpty($streetName);
    $this->assertInternalType('string', $streetName);
  }

  /**
   * @group ms_MY
   */
  public function testStreetNumber(){
    $streetNumber = $this->faker->streetNumber();
    $this->assertNotEmpty($streetNumber);
    $this->assertInternalType('int', $streetNumber);
  }


  /**
   * Test the validity of Canadian postcode
   * @group  ms_MY
   */
  public function testPostcode()
  {
    $postcode = $this->faker->postcode();
    $this->assertNotEmpty($postcode);
    $this->assertInternalType('string', $postcode);
  }

  /**
   * Test the validity of Canadian postcode
   * @group  ms_MY
   */
  public function testCountry(){
    $country = $this->faker->country;
    $this->assertNotEmpty($country);
    $this->assertInternalType('string', $country);
    $this->assertRegExp('/[A-Z][a-z]+/', $country);
  }
}

?>
