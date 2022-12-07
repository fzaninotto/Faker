<?php

namespace Faker\Test\Provider\en_NG;

use Faker\Provider\en_NG\Internet;
use Faker\Provider\en_NG\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class InternetTest extends TestCase
{
    public function testEmailIsValid(): void
    {
        $email = $this->faker->email();
        self::assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
        self::assertNotEmpty($email);
        self::assertIsString($email);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);

        yield new Internet($this->faker);
    }
}
