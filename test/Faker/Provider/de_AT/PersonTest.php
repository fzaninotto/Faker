<?php

namespace Faker\Test\Provider\de_AT;

use Faker\Provider\de_AT\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testSsnWithDefaultValuesCorrect(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->ssn;

            // Should have 10 characters: 3 consecutive number, 1 verification number, 6 birth date
            self::assertMatchesRegularExpression('/^[1-9]{1}[0-9]{9}$/', $number, '');

            // consecutive number must be between 100 and 999
            $consecutiveNumber = substr($number, 0, 3);
            self::assertGreaterThanOrEqual(100, $consecutiveNumber);
            self::assertLessThanOrEqual(999, $consecutiveNumber);

            $this->assertCorrectSsnVerificationNumber($number);
        }
    }

    public function testSsnWithGivenBirthDateCorrect(): void
    {
        $number = $this->faker->ssn(new \DateTime('2010-09-08 06:05:04'));

        $correctBirthDateString = '080910';
        self::assertEquals($correctBirthDateString, substr($number, 4, 6));

        // Should have 10 characters: 3 consecutive number, 1 verification number, 6 birth date
        self::assertMatchesRegularExpression('/^[1-9]{1}[0-9]{9}$/', $number, '');

        // consecutive number must be between 100 and 999
        $consecutiveNumber = substr($number, 0, 3);
        self::assertGreaterThanOrEqual(100, $consecutiveNumber);
        self::assertLessThanOrEqual(999, $consecutiveNumber);

        $this->assertCorrectSsnVerificationNumber($number);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }

    private function assertCorrectSsnVerificationNumber($ssn): void
    {
        $weights = [3, 7, 9, 0, 5, 8, 4, 2, 1, 6];
        $checkSum = 0;

        foreach ($weights as $i => $weight) {
            $checkSum += (int) $ssn[$i] * $weight;
        }

        self::assertEquals($ssn[3], $checkSum % 11);
    }
}
