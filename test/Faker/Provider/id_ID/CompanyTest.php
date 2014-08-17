<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testIfCompanyNameCanReturnData()
    {
        $companyName = $this->faker->companyName();
        $this->assertNotEmpty($companyName);
    }
}