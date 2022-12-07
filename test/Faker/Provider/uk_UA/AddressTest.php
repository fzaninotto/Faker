<?php

namespace Faker\Test\Provider\uk_UA;

use Faker\Provider\uk_UA\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testPostCodeIsValid(): void
    {
        $main = '[0-9]{5}';
        $pattern = "/^($main)|($main-[0-9]{3})+$/";
        $postcode = $this->faker->postcode;
        self::assertMatchesRegularExpression($pattern, $postcode, 'Post code ' . $postcode . ' is wrong!');
    }

    public function testEmptySuffixes(): void
    {
        self::assertEmpty($this->faker->citySuffix, 'City suffix should be empty!');
        self::assertEmpty($this->faker->streetSuffix, 'Street suffix should be empty!');
    }

    public function testStreetCyrOnly(): void
    {
        $pattern = "/[0-9А-ЩЯІЇЄЮа-щяіїєюьIVXCM][0-9А-ЩЯІЇЄЮа-щяіїєюь \'-.]*[А-Яа-я.]/u";
        $streetName = $this->faker->streetName;
        self::assertSame(
            preg_match($pattern, $streetName),
            1,
            'Street name ' . $streetName . ' is wrong!',
        );
    }

    public function testCityNameCyrOnly(): void
    {
        $pattern = "/[А-ЩЯІЇЄЮа-щяіїєюь][0-9А-ЩЯІЇЄЮа-щяіїєюь \'-]*[А-Яа-я]/u";
        $city = $this->faker->city;
        self::assertSame(
            preg_match($pattern, $city),
            1,
            'City name ' . $city . ' is wrong!',
        );
    }

    public function testRegionNameCyrOnly(): void
    {
        $pattern = '/[А-ЩЯІЇЄЮ][А-ЩЯІЇЄЮа-щяіїєюь]*а$/u';
        $regionName = $this->faker->region;
        self::assertSame(
            preg_match($pattern, $regionName),
            1,
            'Region name ' . $regionName . ' is wrong!',
        );
    }

    public function testCountryCyrOnly(): void
    {
        $pattern = "/[А-ЩЯІЇЄЮа-щяіїєюьIVXCM][А-ЩЯІЇЄЮа-щяіїєюь \'-]*[А-Яа-я.]/u";
        $country = $this->faker->country;
        self::assertSame(
            preg_match($pattern, $country),
            1,
            'Country name ' . $country . ' is wrong!',
        );
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
