<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Generator;
use Faker\Provider\it_IT\Company;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
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
