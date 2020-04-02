<?php

namespace Faker\Test\Provider\es_VE;

use Faker\Generator;
use Faker\Provider\es_VE\Company;
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
        $this->assertRegExp($pattern, $rif);

        $rif = $this->faker->taxpayerIdentificationNumber('-');
        $this->assertRegExp($pattern, $rif);
    }


}
