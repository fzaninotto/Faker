<?php

namespace Faker\Provider\en_NG;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testPostcodeIsNotEmptyAndIsValid()
    {
        $postcode = $this->faker->postcode();

        self::assertNotEmpty($postcode);
        self::assertIsString($postcode);
    }

    /**
     * Test the name of the Nigerian State/County
     */
    public function testCountyIsAValidString()
    {
        $county = $this->faker->county;

        self::assertNotEmpty($county);
        self::assertIsString($county);
    }

    /**
     * Test the name of the Nigerian Region in a State.
     */
    public function testRegionIsAValidString()
    {
        $region = $this->faker->region;

        self::assertNotEmpty($region);
        self::assertIsString($region);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
