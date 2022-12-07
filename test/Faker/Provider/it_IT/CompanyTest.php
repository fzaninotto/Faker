<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Provider\it_IT\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testIfTaxIdCanReturnData(): void
    {
        $vat = $this->faker->vat();
        self::assertMatchesRegularExpression('/^IT[0-9]{11}$/', $vat);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
