<?php

namespace Faker\Provider\ar_DZ;

use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
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
    /**
     *
     */
    public function testCityPrefix()
    {
        $CityPrefix = $this->faker->CityPrefix();
        $this->assertNotEmpty($CityPrefix);
        $this->assertInternalType('string', $CityPrefix);
    }

    public function testWilaya()
    {
        $wilaya = $this->faker->state();
        $this->assertNotEmpty($wilaya);
        $this->assertInternalType('string', $wilaya);
    }

    public function testPostCode()
    {
        $postcode = $this->faker->postcode();
        $this->assertNotEmpty($postcode);
        $this->assertInternalType('string', $postcode);
        $this->assertRegExp('/^[1-4]?[0-9]000$/', $postcode);
    }

    public function testAddress()
    {
        $address = $this->faker->address();
        $this->assertInternalType('string', $address);
    }

    public function testSecondaryAddress()
    {
        $secondaryAdress = $this->faker->secondaryAddress();
        $this->assertNotEmpty($secondaryAdress);
        $this->assertInternalType('string', $secondaryAdress);
    }

    public function testCountry()
    {
        $country = $this->faker->country();
        $this->assertNotEmpty($country);
        $this->assertInternalType('string', $country);
    }

}
