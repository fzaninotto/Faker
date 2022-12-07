<?php

namespace Faker\Test\Provider;

use Faker\Provider\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testLatitude(): void
    {
        $latitude = $this->faker->latitude();
        self::assertIsFloat($latitude);
        self::assertGreaterThanOrEqual(-90, $latitude);
        self::assertLessThanOrEqual(90, $latitude);
    }

    public function testLongitude(): void
    {
        $longitude = $this->faker->longitude();
        self::assertIsFloat($longitude);
        self::assertGreaterThanOrEqual(-180, $longitude);
        self::assertLessThanOrEqual(180, $longitude);
    }

    public function testCoordinate(): void
    {
        $coordinate = $this->faker->localCoordinates();
        self::assertIsArray($coordinate);
        self::assertIsFloat($coordinate['latitude']);
        self::assertGreaterThanOrEqual(-90, $coordinate['latitude']);
        self::assertLessThanOrEqual(90, $coordinate['latitude']);
        self::assertIsFloat($coordinate['longitude']);
        self::assertGreaterThanOrEqual(-180, $coordinate['longitude']);
        self::assertLessThanOrEqual(180, $coordinate['longitude']);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
