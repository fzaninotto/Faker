<?php

namespace Faker\Test\Provider\nb_NO;

use Faker\Generator;
use Faker\Provider\nb_NO\PhoneNumber;
use PHPUnit\Framework\TestCase;

class PhoneNumberTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberReturnsPhoneNumber()
    {
        $this->assertRegExp('/^(\+47 ?)?(2|3|5|6|7) ?\d{1} ?\d{2} ?\d{2} ?\d{2}$/', $this->faker->phoneNumber());
    }

    public function testMobileNumberReturnsMobileNumber()
    {
        $this->assertRegExp('/^(\+47 ?)?(9|4) ?\d{2} ?\d{2} ?\d{3}$/', $this->faker->mobileNumber());
    }
}
