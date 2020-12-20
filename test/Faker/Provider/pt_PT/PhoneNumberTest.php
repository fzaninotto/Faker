<?php

namespace Faker\Test\Provider\pt_PT;

use Faker\Provider\pt_PT\PhoneNumber;
use Faker\Test\TestCase;

final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumberReturnsPhoneNumberWithOrWithoutPrefix()
    {
        self::assertMatchesRegularExpression('/^(9[1,2,3,6][0-9]{7})|(2[0-9]{8})|(\+351 [2][0-9]{8})|(\+351 9[1,2,3,6][0-9]{7})/', $this->faker->phoneNumber());
    }

    public function testMobileNumberReturnsMobileNumberWithOrWithoutPrefix()
    {
        self::assertMatchesRegularExpression('/^(9[1,2,3,6][0-9]{7})/', $this->faker->mobileNumber());
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
