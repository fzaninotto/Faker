<?php

namespace Faker\Test\Provider\en_NG;

use Faker\Generator;
use Faker\Provider\en_NG\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    public function testPostcodeIsNotEmptyAndIsValid(): void
    {
        $postcode = $this->faker->postcode();

        $this->assertNotEmpty($postcode);
        $this->assertIsString($postcode);
    }

    /**
     * Test the name of the Nigerian State/County.
     */
    public function testCountyIsAValidString(): void
    {
        $county = $this->faker->county;

        $this->assertNotEmpty($county);
        $this->assertIsString($county);
    }

    /**
     * Test the name of the Nigerian Region in a State.
     */
    public function testRegionIsAValidString(): void
    {
        $region = $this->faker->region;

        $this->assertNotEmpty($region);
        $this->assertIsString($region);
    }
}
