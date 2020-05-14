<?php

namespace Faker\Test\Provider\ro_RO;

use Faker\Generator;
use Faker\Provider\Lorem;
use Faker\Provider\ro_RO\Company;
use PHPUnit\Framework\TestCase;

final class CompanyTest extends TestCase
{
    private $faker;
    
    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $faker->addProvider(new Lorem($faker));
        $this->faker = $faker;
    }
    
    public function testJobTitle()
    {
        $jobTitle = $this->faker->jobTitle();
        $pattern = '/^[A-Za-ză?â?ț?î?ș?Ă?Â?Ș?Î?Ț?\s\-\/]+$/';
        $this->assertRegExp($pattern, $jobTitle);
    }
    
    public function testVat() {
        $vat = $this->faker->vat;
        $pattern = '/^(RO)?\d{1,8}/';
        $this->assertRegExp($pattern, $vat);
    }
}