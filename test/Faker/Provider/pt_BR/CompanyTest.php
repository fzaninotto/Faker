<?php

namespace Faker\Test\Provider\pt_BR;

use Faker\Provider\pt_BR\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testCnpjFormatIsValid(): void
    {
        $cnpj = $this->faker->cnpj(false);
        self::assertMatchesRegularExpression('/\d{8}\d{4}\d{2}/', $cnpj);
        $cnpj = $this->faker->cnpj(true);
        self::assertMatchesRegularExpression('/\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}/', $cnpj);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
