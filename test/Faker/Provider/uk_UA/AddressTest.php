<?php

namespace Faker\Test\Provider\uk_UA;

use Faker\Generator;
use Faker\Provider\uk_UA\Address;
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

    public function testPostCodeIsValid()
    {
        $main = '[0-9]{5}';
        $pattern = "/^($main)|($main-[0-9]{3})+$/";
        $postcode = $this->faker->postcode;
        $this->assertRegExp($pattern, $postcode, 'Post code ' . $postcode . ' is wrong!');
    }

    public function testEmptySuffixes()
    {
        $this->assertEmpty($this->faker->citySuffix, 'City suffix should be empty!');
        $this->assertEmpty($this->faker->streetSuffix, 'Street suffix should be empty!');
    }

    public function testStreetCyrOnly()
    {
        $pattern = "/[0-9А-ЩЯІЇЄЮа-щяіїєюьIVXCM][0-9А-ЩЯІЇЄЮа-щяіїєюь \'-.]*[А-Яа-я.]/u";
        $streetName = $this->faker->streetName;
        $this->assertSame(
            preg_match($pattern, $streetName),
            1,
            'Street name ' . $streetName . ' is wrong!'
        );
    }

    public function testCityNameCyrOnly()
    {
        $pattern = "/[А-ЩЯІЇЄЮа-щяіїєюь][0-9А-ЩЯІЇЄЮа-щяіїєюь \'-]*[А-Яа-я]/u";
        $city = $this->faker->city;
        $this->assertSame(
            preg_match($pattern, $city),
            1,
            'City name ' . $city . ' is wrong!'
        );
    }

    public function testRegionNameCyrOnly()
    {
        $pattern = "/[А-ЩЯІЇЄЮ][А-ЩЯІЇЄЮа-щяіїєюь]*а$/u";
        $regionName = $this->faker->region;
        $this->assertSame(
            preg_match($pattern, $regionName),
            1,
            'Region name ' . $regionName . ' is wrong!'
        );
    }

    public function testCountryCyrOnly()
    {
        $pattern = "/[А-ЩЯІЇЄЮа-щяіїєюьIVXCM][А-ЩЯІЇЄЮа-щяіїєюь \'-]*[А-Яа-я.]/u";
        $country = $this->faker->country;
        $this->assertSame(
            preg_match($pattern, $country),
            1,
            'Country name ' . $country . ' is wrong!'
        );
    }
}
