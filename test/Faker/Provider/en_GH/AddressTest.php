<?php

namespace Faker\Provider\en_GH;

use Faker\Generator;
use Faker\Provider\en_GH\Address;
use PHPUnit\Framework\TestCase;

final class AddressTest extends TestCase
{

    /**
     * @var Faker\Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    /**
     * Test the name of the Ghanaian city.
     */
    public function testCityIsAValidString()
    {
        $city = $this->faker->city;

        $this->assertNotEmpty($city);
        $this->assertInternalType('string', $city);
    }

    /**
     * Test the name of the Ghanaian Region.
     */
    public function testRegionIsAValidString()
    {
        $region = $this->faker->region;

        $this->assertNotEmpty($region);
        $this->assertInternalType('string', $region);
    }
}
