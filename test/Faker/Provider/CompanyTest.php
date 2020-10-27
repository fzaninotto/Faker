<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Company;
use Faker\Provider\Lorem;
use Faker\Test\TestCase;

final class CompanyTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
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
        $this->assertMatchesRegularExpression($pattern, $jobTitle);
    }
}
