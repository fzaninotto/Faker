<?php

namespace Faker\Provider\en_GB;

use Faker\Generator;
use Faker\Provider\en_GB\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Faker\Generator
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
        $this->assertInternalType('string', $postcode);
        $this->assertRegExp('/(GIR 0AA)|((([A-Z-[QVX]][0-9][0-9]?)|(([A-Z-[QVX]][A-Z-[IJZ]][0-9][0-9]?)|(([A-Z-[QVX‌​]][0-9][A-HJKSTUW])|([A-Z-[QVX]][A-Z-[IJZ]][0-9][ABEHMNPRVWXY]))))\s?[0-9][A-Z-[C‌​IKMOV]]{2})/', $postcode);
    }

}
