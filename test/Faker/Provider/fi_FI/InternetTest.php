<?php

namespace Faker\Test\Provider\fi_FI;

use Faker\Generator;
use Faker\Provider\fi_FI\Person;
use Faker\Provider\fi_FI\Internet;
use Faker\Provider\fi_FI\Company;

class InternetTest extends \PHPUnit_Framework_TestCase
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
