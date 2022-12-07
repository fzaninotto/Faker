<?php

namespace Faker\Test\Provider\ar_EG;

use Faker\Calculator\Luhn;
use Faker\Provider\ar_EG\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testCompanyTaxIdNumberIsValid(): void
    {
        $companyTaxIdNumber = $this->faker->companyTaxIdNumber();
        self::assertMatchesRegularExpression('/\d{9}$/', $companyTaxIdNumber);
        self::assertTrue(Luhn::isValid($companyTaxIdNumber));
    }

    public function testCompanyTradeRegisterNumberIsValid(): void
    {
        $companyTradeRegisterNumber = $this->faker->companyTradeRegisterNumber();
        self::assertMatchesRegularExpression('/\d{6}$/', $companyTradeRegisterNumber);
        self::assertTrue(Luhn::isValid($companyTradeRegisterNumber));
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
