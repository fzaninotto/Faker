<?php

namespace Faker\Test\Provider\en_SG;

use Faker\Factory;
use Faker\Provider\en_SG\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{
    private $faker;

    protected function setUp(): void
    {
        $this->faker = Factory::create('en_SG');
        $this->faker->seed(1);
        $this->faker->addProvider(new PhoneNumber($this->faker));
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // x means 0 to 9
    // y means 0 to 8 only
    public function testMobilePhoneNumberStartWith9Returns9yxxxxxx()
    {
        $startsWith9 = false;
        while (!$startsWith9) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith9 = preg_match('/^(\+65|65)?\s*9/', $mobileNumber);
        }

        $this->assertRegExp('/^(\+65|65)?\s*9\s*[0-8]\d{2}\s*\d{4}$/', $mobileNumber);
    }

    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    // x means 0 to 9
    // z means 1 to 8 only
    public function testMobilePhoneNumberStartWith8Returns8zxxxxxx()
    {
        $startsWith8 = false;
        while (!$startsWith8) {
            $mobileNumber = $this->faker->mobileNumber();
            $startsWith8 = preg_match('/^(\+65|65)?\s*8/', $mobileNumber);
        }
        $this->assertRegExp('/^(\+65|65)?\s*8\s*[1-8]\d{2}\s*\d{4}$/', $mobileNumber);
    }
}
