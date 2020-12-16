<?php

namespace Faker\Test\Provider\ar_TN;

use PHPUnit\Framework\TestCase;
use Faker\Provider\ar_TN\Person;
use Faker\Provider\ar_TN\Internet;
use Faker\Provider\ar_TN\Company;
use Faker\Generator;
final class InternetTest extends TestCase
{


    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
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
