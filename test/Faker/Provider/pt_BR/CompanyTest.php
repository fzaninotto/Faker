<?php

namespace Faker\Test\Provider\pt_BR;

use Faker\Generator;
use Faker\Provider\pt_BR\Company;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testCnpjFormatIsValid()
    {
        $cnpj = $this->faker->cnpj(false);
        $this->assertRegExp('/\d{8}\d{4}\d{2}/', $cnpj);
        $cnpj = $this->faker->cnpj(true);
        $this->assertRegExp('/\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}/', $cnpj);
    }

    public function testIEFormatIsValid()
    {
        $ie = $this->faker->ie(false);
        $this->assertRegExp('/\d{12}/', $ie);
        $ie = $this->faker->ie(true);
        $this->assertRegExp('/\d{3}\.\d{3}\.\d{3}\.\d{3}/', $ie);
    }
}
