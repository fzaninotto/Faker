<?php

namespace Faker\Test\Provider\uk_UA;

use Faker\Provider\uk_UA\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumberFormat()
    {
        $pattern = "/((\+38)(((\(\d{3}\))\d{7}|(\(\d{4}\))\d{6})|(\d{8})))|0\d{9}/";
        $phoneNumber = $this->faker->phoneNumber;
        self::assertSame(
            preg_match($pattern, $phoneNumber),
            1,
            'Phone number format ' . $phoneNumber . ' is wrong!'
        );
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
