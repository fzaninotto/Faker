<?php

namespace Faker\Test\Provider\es_VE;

use Faker\Generator;
use Faker\Provider\es_VE\Company;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    /**
     * national Id format validator.
     */
    public function testNationalId(): void
    {
        $pattern = '/^[VJGECP]-?\d{8}-?\d$/';
        $rif = $this->faker->taxpayerIdentificationNumber;
        $this->assertMatchesRegularExpression($pattern, $rif);

        $rif = $this->faker->taxpayerIdentificationNumber('-');
        $this->assertMatchesRegularExpression($pattern, $rif);
    }
}
