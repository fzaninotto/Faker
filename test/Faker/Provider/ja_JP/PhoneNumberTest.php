<?php

namespace Faker\Test\Provider\ja_JP;

use Faker\Provider\ja_JP\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $phoneNumber = $this->faker->phoneNumber;
            self::assertNotEmpty($phoneNumber);
            self::assertMatchesRegularExpression('/^0\d{1,4}-\d{1,4}-\d{3,4}$/', $phoneNumber);
        }
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
