<?php

namespace Faker\Test\Provider\ar_SA;

use Faker\Provider\ar_SA\Internet;
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
        yield new Internet($this->faker);
    }
}
