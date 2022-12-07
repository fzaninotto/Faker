<?php

namespace Faker\Test\Provider\en_UG;

use Faker\Provider\en_UG\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testCityName(): void
    {
        $city = $this->faker->cityName();
        self::assertNotEmpty($city);
        self::assertIsString($city);
    }

    public function testDistrict(): void
    {
        $district = $this->faker->district();
        self::assertNotEmpty($district);
        self::assertIsString($district);
    }

    public function testRegion(): void
    {
        $region = $this->faker->region();
        self::assertNotEmpty($region);
        self::assertIsString($region);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
