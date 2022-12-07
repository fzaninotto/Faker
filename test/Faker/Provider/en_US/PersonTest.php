<?php

namespace Faker\Test\Provider\en_US;

use Faker\Provider\en_US\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testSsn(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->ssn;

            // should be in the format ###-##-####
            self::assertMatchesRegularExpression('/^[0-9]{3}-[0-9]{2}-[0-9]{4}$/', $number);

            $parts = explode('-', $number);

            // first part must be between 001 and 899, excluding 666
            self::assertNotEquals(666, $parts[0]);
            self::assertGreaterThan(0, $parts[0]);
            self::assertLessThan(900, $parts[0]);

            // second part must be between 01 and 99
            self::assertGreaterThan(0, $parts[1]);
            self::assertLessThan(100, $parts[1]);

            // the third part must be between 0001 and 9999
            self::assertGreaterThan(0, $parts[2]);
            self::assertLessThan(10000, $parts[2]);
        }
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
