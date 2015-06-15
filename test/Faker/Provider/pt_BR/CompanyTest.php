<?php

namespace Faker\Test\Provider\pt_BR;

use Faker\Generator;
use Faker\Provider\pt_BR\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
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
}
