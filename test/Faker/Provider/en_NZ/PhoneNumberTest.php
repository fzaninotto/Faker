<?php

namespace Faker\Test\Provider\en_NZ;

use Faker\Provider\en_NZ\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testIfPhoneNumberCanReturnData(): void
    {
        $number = $this->faker->phoneNumber;
        self::assertNotEmpty($number);
    }

    public function phoneNumberFormat(): void
    {
        $number = $this->faker->phoneNumber;
        self::assertMatchesRegularExpression(
            '/(^\([0]\d{1}\))(\d{7}$)|(^\([0][2]\d{1}\))(\d{6,8}$)|([0][8][0][0])([\s])(\d{5,8}$)/',
            $number,
        );
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
