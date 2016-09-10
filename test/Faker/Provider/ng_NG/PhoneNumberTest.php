<?php

namespace Faker\Test\Provider\ng_NG;

use Faker\Generator;
use Faker\Provider\ng_NG\PhoneNumber;
use Faker\Test\Provider\ng_NG\MainTest;

class PhoneNumberTest extends MainTest
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutPrefix()
    {
        $this->assertRegExp('/^0(7|8)(0)(3|5)(\s)?/', $this->faker->phoneNumber());
    }
}
