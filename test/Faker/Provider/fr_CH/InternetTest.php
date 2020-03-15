<?php

namespace Faker\Test\Provider\fr_CH;

use Faker\Generator;
use Faker\Provider\fr_CH\Company;
use Faker\Provider\fr_CH\Internet;
use Faker\Provider\fr_CH\Person;
use PHPUnit\Framework\TestCase;

class InternetTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    /**
     * @test
     */
    public function emailIsValid()
    {
        $email = $this->faker->email();
        $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }
}
