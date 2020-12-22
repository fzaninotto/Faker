<?php

namespace Faker\Test\Provider\de_AT;

use Faker\Provider\de_AT\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumberFormat()
    {
        $number = $this->faker->phoneNumber;
        self::assertMatchesRegularExpression('/^06\d{2} \d{7}|\+43 \d{4} \d{4}(-\d{2})?$/', $number);
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
