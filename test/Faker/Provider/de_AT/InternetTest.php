<?php

namespace Faker\Test\Provider\de_AT;

use Faker\Provider\de_AT\Company;
use Faker\Provider\de_AT\Internet;
use Faker\Provider\de_AT\Person;
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
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);

        yield new Internet($this->faker);

        yield new Company($this->faker);
    }
}
