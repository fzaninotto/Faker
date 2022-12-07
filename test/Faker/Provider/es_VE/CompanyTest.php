<?php

namespace Faker\Test\Provider\es_VE;

use Faker\Provider\es_VE\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    /**
     * national Id format validator
     */
    public function testNationalId(): void
    {
        $pattern = '/^[VJGECP]-?\d{8}-?\d$/';
        $rif = $this->faker->taxpayerIdentificationNumber;
        self::assertMatchesRegularExpression($pattern, $rif);

        $rif = $this->faker->taxpayerIdentificationNumber('-');
        self::assertMatchesRegularExpression($pattern, $rif);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
