<?php

namespace Faker\Test\Provider\sl_SI;

use Faker\Generator;
use Faker\Provider\sl_SI\Address;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_Constraint_IsType as PHPUnit_IsType;

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

    public function testPostcode()
    {
        $postcode = $this->faker->postcode();
        $this->assertNotEmpty($postcode);

        $this->assertInternalType(PHPUnit_IsType::TYPE_STRING, $postcode);

        $this->assertRegExp('/^\d{4}$/', $postcode);

        $this->assertTrue(is_numeric($postcode));

        $this->assertThat(intval($postcode), $this->logicalAnd(
            $this->greaterThanOrEqual(1000),
            $this->lessThanOrEqual(9999)
        ));
    }

    public function testAddressString()
    {
        $address = $this->faker->address();

        /**
         * The previous format was broken and printed something like: "Draga 25\n 3490\n Cerkno"
         * Test that there are is no literal string representation of \n
         */
        $this->assertThat($address, $this->logicalNot($this->stringContains('\n')));

        list($streetAddress, $postcode, $cityName) = explode("\n", $address);

        /**
         * Street name ends with house number
         */
        $this->assertRegExp('/\d+\w?$/', $streetAddress);

        /**
         * Postcode is 4 digit number between 1000 and 9999
         */
        $this->assertRegExp('/^\d{4}$/', $postcode);

        $this->assertTrue(is_numeric($postcode));

        $this->assertThat(intval($postcode), $this->logicalAnd(
            $this->greaterThanOrEqual(1000),
            $this->lessThanOrEqual(9999)
        ));

        /**
         * City name is not empty
         */
        $this->assertNotEmpty($cityName);
    }
}
