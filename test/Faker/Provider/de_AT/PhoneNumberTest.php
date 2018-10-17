<?php

namespace Faker\Test\Provider\de_AT;

use Faker\Generator;
use Faker\Provider\de_AT\PhoneNumber;
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
        $number = $this->faker->phoneNumber;
        $this->assertRegExp('/^06\d{2} \d{7}|\+43 \d{4} \d{4}(-\d{2})?$/', $number);
    }
}
