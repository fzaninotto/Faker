<?php

namespace Faker\Test\Provider\pl_PL;

use Faker\Generator;
use Faker\Provider\pl_PL\PhoneNumber;
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

    public function testPhoneNumber()
    {
        $phoneNumber = $this->faker->phoneNumber();
        $this->assertRegExp('/^((\+48\s\d{2}\s\d{3}\s\d{2}\s\d{2})|(\+48\s\d{5}\s\d{2}\s\d{2})|(\d{3}\s\d{2}\s\d{2})|(\d{9})|(\+48\(\d{2}\)\d{7})|(\d{4}\(\d{2}\)\d{3}\s\d{2}\s\d{2})|(\(\d{2}\)\s\d{3}\s\d{2}\s\d{2})|(\+48\(\d{2}\)\d{3}\s\d{2}\s\d{2})|(\d{4}\(\d{2}\)|\d{7}))/', $phoneNumber);
    }

    public function testMobilePhoneNumber()
    {
        $mobileNumber = $this->faker->mobilePhoneNumber();
        $this->assertRegExp('/^(\+48\s\d{2}\s\d{3}\s\d{2}\s\d{2})|(\+48\s\d{5}\s\)| (\+48\d{9})|(\(\+48\)\s\d{3}\s\d{3}\s\d{3})| (\(\+48\)\d{3}\s\d{3}\s\d{3})|((0048)\s\d{3}\s\d{3}\s\d{3})| (\(0048\)\d{9})|(\d{9})|(\d{3}\s\d{3}\s\d{3})|(\d{9}))/', $mobileNumber);
    }
}
