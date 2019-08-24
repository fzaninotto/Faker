<?php

namespace Faker\Test\Provider\ku_IQ;

use Faker\Generator;
use Faker\Provider\ku_IQ\Person;
use Faker\Provider\ku_IQ\Internet;
use Faker\Provider\ku_IQ\Company;
use PHPUnit\Framework\TestCase;

class InternetTest extends TestCase
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

    public function testEmailIsValid()
    {
        $email = $this->faker->email();
        $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }
}
