<?php

namespace Faker\Test\Provider\zh_CN;

use Faker\Generator;
use Faker\Provider\zh_CN\PhoneNumber;
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

    public function testPhoneNumberFormat()
    {
        $pattern = "/^1[3456789]\d{9}$/";
        $phoneNumber = $this->faker->phoneNumber;
        $this->assertSame(
            preg_match($pattern, $phoneNumber),
            1,
            'Phone number format ' . $phoneNumber . ' is wrong!'
        );
    }

    public function testPhoneNumberFormatIoT()
    {
        $pattern = "/^14[0-4]\d{10}$/";
        $phoneNumber = $this->faker->phoneNumberIoT;
        $this->assertSame(
            preg_match($pattern, $phoneNumber),
            1,
            'Phone number format ' . $phoneNumber . ' is wrong!'
        );
    }

}
