<?php

namespace Faker\Test\Provider\en_ZA;

use Faker\Provider\en_ZA\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testGenerateValidCompanyNumber(): void
    {
        $companyRegNo = $this->faker->companyNumber();

        self::assertEquals(14, strlen($companyRegNo));
        self::assertMatchesRegularExpression('#^\d{4}/\d{6}/\d{2}$#', $companyRegNo);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
