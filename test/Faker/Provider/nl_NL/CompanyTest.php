<?php

namespace Faker\Test\Provider\nl_NL;

use Faker\Generator;
use Faker\Provider\nl_NL\Company;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testGenerateValidVatNumber()
    {
        $vatNo = $this->faker->vat();

        $this->assertEquals(14, strlen($vatNo));
        $this->assertRegExp('/^NL[0-9]{9}B[0-9]{2}$/', $vatNo);
    }

    public function testGenerateValidBtwNumberAlias()
    {
        $btwNo = $this->faker->btw();

        $this->assertEquals(14, strlen($btwNo));
        $this->assertRegExp('/^NL[0-9]{9}B[0-9]{2}$/', $btwNo);
    }
}
