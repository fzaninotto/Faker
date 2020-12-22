<?php

namespace Faker\Test\Provider\ar_SA;

use Faker\Calculator\Luhn;
use Faker\Provider\ar_SA\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testIdNumber()
    {
        $idNumber = $this->faker->idNumber;
        self::assertMatchesRegularExpression('/^[1|2]\d{9}$/', $idNumber);
        self::assertTrue(Luhn::isValid($idNumber));
    }

    public function testNationalIdNumber()
    {
        $nationalIdNumber = $this->faker->nationalIdNumber;
        self::assertMatchesRegularExpression('/^1\d{9}$/', $nationalIdNumber);
        self::assertTrue(Luhn::isValid($nationalIdNumber));
    }

    public function testForeignerIdNumber()
    {
        $foreignerIdNumber = $this->faker->foreignerIdNumber;
        self::assertMatchesRegularExpression('/^2\d{9}$/', $foreignerIdNumber);
        self::assertTrue(Luhn::isValid($foreignerIdNumber));
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
