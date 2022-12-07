<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Provider\it_IT\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testIfTaxIdCanReturnData(): void
    {
        $taxId = $this->faker->taxId();
        self::assertMatchesRegularExpression('/^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$/', $taxId);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
