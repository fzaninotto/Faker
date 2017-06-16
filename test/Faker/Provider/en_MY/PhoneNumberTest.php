<?php

namespace Faker\Test\Provider\en_MY;

use Faker\Factory;
use Faker\Provider\en_MY\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $this->faker = Factory::create('en_MY');
        $this->faker->seed(1);
        $this->faker->addProvider(new PhoneNumber($this->faker));
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia
    // y means 0 to 8 only
    // x means 0 to 9
    public function testMobilePhoneNumberStartWith1Returns1yxxxxxx()
    {
        $startsWith9 = false;
        while (!$startsWith9) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith9 = preg_match('/^(\+60|60)?\s*1/', $mobileNumber);
        }

        $this->assertRegExp('/^(\+60|60)?\s*1\s*[0-8]{3}\s*\d{4}$/', $mobileNumber);
    }
}
