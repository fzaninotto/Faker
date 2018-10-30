<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Company;
use Faker\Provider\Lorem;
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
        $faker->addProvider(new Company($faker));
        $faker->addProvider(new Lorem($faker));
        $this->faker = $faker;
    }

    public function testJobTitle()
    {
        $jobTitle = $this->faker->jobTitle();
        $pattern = '/^[A-Za-z]+$/';
        $this->assertRegExp($pattern, $jobTitle);
    }
}
