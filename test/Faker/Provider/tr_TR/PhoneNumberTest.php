<?php

namespace Faker\Test\Provider\tr_TR;

use Faker\Provider\tr_TR\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber()
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->phoneNumber;
            $baseNumber = preg_replace('/ *x.*$/', '', $number); // Remove possible extension
            $digits = array_values(array_filter(str_split($baseNumber), 'ctype_digit'));

            self::assertGreaterThan(10, count($digits));
        }
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
