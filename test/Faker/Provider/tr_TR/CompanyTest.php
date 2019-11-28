<?php

namespace Faker\Test\Provider\tr_TR;

use Faker\Provider\tr_TR\Company;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testCompany()
    {
        $company = $this->faker->companyField;
        $this->assertNotNull($company);
    }
}
