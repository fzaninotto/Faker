<?php

namespace Faker\Test\Provider\es_PE;

use Faker\Provider\es_PE\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testGenerateValidRuc(): void
    {
        $companyRUC = $this->faker->ruc();

        self::assertEquals(11, strlen($companyRUC));
        self::assertMatchesRegularExpression('/^([1|2])0\d{9}$/', $companyRUC);
    }

    public function testGenerateValidRucPersonaNatural(): void
    {
        $companyRUC = $this->faker->ruc(true);

        self::assertMatchesRegularExpression('/^10\d{9}$/', $companyRUC);
    }

    public function testGenerateValidRucPersonaJuridica(): void
    {
        $companyRUC = $this->faker->ruc(false);

        self::assertMatchesRegularExpression('/^20\d{9}$/', $companyRUC);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
