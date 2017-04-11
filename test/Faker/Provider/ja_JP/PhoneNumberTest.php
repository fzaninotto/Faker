<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Generator;
use Faker\Provider\ja_JP\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    public function testPhoneNumber()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));

        for ($i = 0; $i < 10; $i++) {
            $phoneNumber = $faker->phoneNumber;
            $this->assertNotEmpty($phoneNumber);
            $this->assertRegExp('/^0\d{1,4}-\d{1,4}-\d{3,4}$/', $phoneNumber);
        }
    }
}
