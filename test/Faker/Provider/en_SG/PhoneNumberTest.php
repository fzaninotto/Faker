<?php

namespace Faker\Test\Provider\en_SG;

use Faker\Factory;
use Faker\Provider\en_SG\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{
    private $faker;

    public function setUp()
    {
        $this->faker = Factory::create('en_SG');
        $this->faker->seed(1);
        $this->faker->addProvider(new PhoneNumber($this->faker));
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // y means 0 to 8 only
    // x means 0 to 9
    public function testMobilePhoneNumberStartWith9Returns9yxxxxxx()
    {
        $startsWith9 = false;
        while (!$startsWith9) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith9 = preg_match('/^(\+65|65)?\s*9/', $mobileNumber);
        }

        $this->assertRegExp('/^(\+65|65)?\s*9\s*[0-8]{3}\s*\d{4}$/', $mobileNumber);
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // z means 1 to 9 only
    // x means 0 to 9
    public function testMobilePhoneNumberStartWith7Or8Returns7Or8zxxxxxx()
    {
        $startsWith7Or8 = false;
        while (!$startsWith7Or8) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith7Or8 = preg_match('/^(\+65|65)?\s*[7-8]/', $mobileNumber);
        }
        $this->assertRegExp('/^(\+65|65)?\s*[7-8]\s*[1-9]{3}\s*\d{4}$/', $mobileNumber);
    }
}
