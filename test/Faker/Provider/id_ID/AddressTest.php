<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
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

    public function testPostCodeIsValid()
    {
        $postcode = ((int)$this->faker->postcode());

        // This is not meant to test or anything
        // But more as a reminder that if someone managed to get a more
        // official and factual source of postal code data, they should also
        // modify this test, and the corresponding @link
        
        // MAGIC NUMBERS!!!
        // $this->assertTrue($postcode>=10110 && $postcode<=99974);
        
        $this->assertTrue($postcode>0);
    }
}
