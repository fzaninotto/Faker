<?php

namespace Faker\Test\Provider\ar_SA;

use Faker\Provider\ar_SA\Company;
use Faker\Provider\ar_SA\Internet;
use Faker\Provider\ar_SA\Person;
use Faker\Test\TestCase;

final class InternetTest extends TestCase
{
    public function testEmailIsValid()
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
