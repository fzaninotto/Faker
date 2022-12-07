<?php

namespace Faker\Test\Provider\ar_EG;

use Faker\Provider\ar_EG\Internet;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class InternetTest extends TestCase
{
    public function testEmailIsValid(): void
    {
        $email = $this->faker->email();
        self::assertMatchesRegularExpression('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-z]{2,3}$/', $email);
        self::assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    protected function getProviders(): iterable
    {
        yield new Internet($this->faker);
    }
}
