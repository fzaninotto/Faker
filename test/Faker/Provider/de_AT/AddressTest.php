<?php

namespace Faker\Test\Provider\de_AT;

use Faker\Generator;
use Faker\Provider\de_AT\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testPostCodeIsValid()
    {
        $postcode = $this->faker->postcode;
        $this->assertRegExp("/^\d{4}$/", $postcode);
    }

    public function testLatitude()
    {
        $latitude = $this->faker->latitude();
        $this->assertTrue(($latitude > 46 && $latitude < 49));
    }

    public function testLongitude()
    {
        $longitude = $this->faker->longitude();
        $this->assertTrue(($longitude > 9 && $longitude < 18));
    }
}
