<?php

namespace Faker\Test\Provider\zh_TW;

use Faker\Generator;
use Faker\Provider\zh_TW\Address;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
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

    public function testCity()
    {
        $city = $this->faker->city;

        $this->assertNotEmpty($city);
        $this->assertInternalType('string', $city);
    }

    public function testDistrict()
    {
        $district = $this->faker->district;

        $this->assertNotEmpty($district);
        $this->assertInternalType('string', $district);
    }

    public function testDistrictWithCityNameReturnsSpecificDistrict()
    {
        $district = $this->faker->district('臺北市');

        $this->assertNotEmpty($district);
        $this->assertInternalType('string', $district);
    }

    public function testDistrictWithCityNameIsEmptyReturnsRandomDistrict()
    {
        $district = $this->faker->district('');

        $this->assertNotEmpty($district);
        $this->assertInternalType('string', $district);
    }

    public function testDistrictWithCityNameDoesNotExistIndexReturnsRandomDistrict()
    {
        $district = $this->faker->district('海拉魯');

        $this->assertNotEmpty($district);
        $this->assertInternalType('string', $district);
    }
}
