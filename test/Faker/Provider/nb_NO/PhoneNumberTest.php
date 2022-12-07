<?php

namespace Faker\Test\Provider\nb_NO;

use Faker\Provider\nb_NO\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testMobileNumber(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->mobileNumber;
            $length = strlen($number);

            // Check that number starts with 4 or 9 when country code is included
            if ($length === 11) {
                $testChar = substr($number, 3, 1);
                self::assertEquals(11, strlen($number));
                self::assertContains((int) $testChar, [4, 9]);
                self::assertMatchesRegularExpression('/^\+47[49]{1}[0-9]{7}$/', $number);
            }

            // Check numbers start with 4 or 9 when no country code is included
            if ($length === 10 || $length === 8) {
                $testChar = substr($number, 0, 1);
                self::assertContains((int) $testChar, [4, 9]);
            }

            if ($length === 10) {
                self::assertMatchesRegularExpression('/^[49]{1}[0-9]{2} [0-9]{2} [0-9]{3}$/', $number);
            }

            if ($length === 8) {
                self::assertMatchesRegularExpression('/^[49]{1}[0-9]{7}$/', $number);
            }
        }
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
