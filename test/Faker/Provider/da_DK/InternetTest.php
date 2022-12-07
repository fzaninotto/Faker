<?php

namespace Faker\Test\Provider\da_DK;

use Faker\Provider\da_DK\Company;
use Faker\Provider\da_DK\Internet;
use Faker\Provider\da_DK\Person;
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
