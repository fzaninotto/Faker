<?php

namespace \Faker\Test\Provider\pt_PT;

use Faker\Generator;
use Faker\Provider\pt_PT\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutPrefix()
    {
        $this->assertRegExp('/^([0-9]{9})|(\+351[0-9]{9})/', $this->faker->phoneNumber());
    }
    public function testMobileNumberReturnsMobileNumberWithOrWithoutPrefix()
    {
        $this->assertRegExp('/^([0-9]{9})|(\+351[0-9]{9})/', $this->faker->mobileNumber());
    }
    public function testPhoneNumberReturnsPhoneNumberWithoutPrefix()
    {
        $this->assertRegExp('/^([0-9]{9})/', $this->faker->phoneNumber(false));
    }
    public function testMobileNumberReturnsMobileNumberWithoutPrefix()
    {
        $this->assertRegExp('/^([0-9]{9})/', $this->faker->mobileNumber(false));
    }
}
