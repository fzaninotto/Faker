<?php

namespace Faker\Test\Provider\es_VE;

use Faker\Generator;
use Faker\Provider\es_VE\Company;
use Faker\Test\TestCase;

final class CompanyTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    /**
     * national Id format validator
     */
    public function testNationalId()
    {
        $pattern = '/^[VJGECP]-?\d{8}-?\d$/';
        $rif = $this->faker->taxpayerIdentificationNumber;
        $this->assertMatchesRegularExpression($pattern, $rif);

        $rif = $this->faker->taxpayerIdentificationNumber('-');
        $this->assertMatchesRegularExpression($pattern, $rif);
    }


}
