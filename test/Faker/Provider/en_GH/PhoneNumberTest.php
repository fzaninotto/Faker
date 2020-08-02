<?php

namespace Faker\Test\Provider\en_GH;

use Faker\Generator;
use Faker\Provider\en_GH\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutCountryCode()
    {
        $phoneNumber = $this->faker->phoneNumber();

        $this->assertNotEmpty($phoneNumber);
        $this->assertInternalType('string', $phoneNumber);
        $this->assertRegExp('/^(0|(\+233))\s?(20|23|24|26|27|28|50|53|54|55|56|57|58)\s?\d{7}/', $phoneNumber);
    }
}
