<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Generator;
use Faker\Provider\it_IT\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testIfTaxIdCanReturnData()
    {
        $vatId = $this->faker->vatId();
        $this->assertRegExp('/^IT[0-9]{11}$/', $vatId);
    }
    
}
