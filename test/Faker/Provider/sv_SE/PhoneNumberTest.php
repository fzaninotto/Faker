<?php

namespace Faker\Test\Provider\sv_SE;

use Faker\Provider\sv_SE\PhoneNumber;
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

            self::assertTrue(self::itStartsWithPrefix($number));
        }
    }

    protected static function itStartsWithPrefix($number): bool
    {
        $prefixes = ['+467', '+46(0)7', '+46 (0)7', '+46 (0)7', '07'];

        foreach ($prefixes as $prefix) {
            if (strpos($number, (string) $prefix) === 0) {
                return true;
            }
        }

        return false;
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
