<?php

namespace Faker\Test\Provider\ro_RO;

use Faker\Generator;
use Faker\Provider\ro_RO\PhoneNumber;
use PHPUnit\Framework\TestCase;

final class PhoneNumberTest extends TestCase
{
    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new PhoneNumber($faker));
        $this->faker = $faker;
    }

    public function testPhoneNumberReturnsNormalPhoneNumber()
    {
        $this->assertRegExp('/^0(?:[23][13-7]|7\d)\d{7}$/', $this->faker->phoneNumber());
    }

    public function testTollFreePhoneNumberReturnsTollFreePhoneNumber()
    {
        $this->assertRegExp('/^08(?:0[01267]|70)\d{6}$/', $this->faker->tollFreePhoneNumber());
    }

    public function testPremiumRatePhoneNumberReturnsPremiumRatePhoneNumber()
    {
        $this->assertRegExp('/^090[036]\d{6}$/', $this->faker->premiumRatePhoneNumber());
    }
}
