<?php

namespace Faker\Test\Provider\sl_SI;

use Faker\Generator;
use Faker\Provider\sl_SI\Person;
use Faker\Provider\sl_SI\Internet;
use Faker\Provider\sl_SI\Company;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testCompanyEndsWithProperSuffix()
    {
        $this->assertRegExp('/\s(s\.p\.|d\.o\.o\.|d\.d\.|k\.d\.|k\.d\.d\.|d\.n\.o\.|so\.p\.)$/', $this->faker->company());
    }
}