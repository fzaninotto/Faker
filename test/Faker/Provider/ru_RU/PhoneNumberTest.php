<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\PhoneNumber;

class PhoneNumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PhoneNumber
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
        $mobileNumber = $this->faker->phoneNumber();
        $this->assertRegExp('/^((\(\d{3}\)\s\d{3}\-\d{2}\-\d{2})|\(\d{3}\)\s\d{3}\-\d{4})|\(\d{5}\)\s\d{2}\-\d{4}|(8\-800\-\d{3}\-\d{4})|(\+7\s\(\d{3}\)\s\d{3}\-\d{4})$/',
            $mobileNumber);
    }

    public function testE164PhoneNumber()
    {
        $this->assertRegExp('/^\+7\d{10}$/', $this->faker->e164PhoneNumber());
    }
}
