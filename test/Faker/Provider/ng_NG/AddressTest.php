<?php

namespace Faker\Provider\ng_NG;

use Faker\Generator;
use Faker\Provider\ng_NG\Address;
use Faker\Test\Provider\ng_NG\MainTest;

class AddressTest extends MainTest
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

    /**
     *
     */
    public function testPostcode()
    {
        $this->performTest($this->faker->postcode());
    }

    /**
     * Test the name of the Nigerian State/County
     */
    public function testCounty()
    {
        $this->performTest($this->faker->county);
    }

    /**
     * Test the name of the Nigerian Region in a State.
     */
    public function testRegion()
    {
        $this->performTest($this->faker->region);
    }

}