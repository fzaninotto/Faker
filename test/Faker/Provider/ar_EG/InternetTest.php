<?php


namespace Faker\Test\Provider\ar_EG;


use Faker\Generator;
use Faker\Provider\ar_EG\Company;
use Faker\Provider\ar_EG\Internet;
use Faker\Provider\ar_EG\Person;
use PHPUnit\Framework\TestCase;

class InternetTest extends TestCase
{
    /** @var Generator $faker */
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
        $email = $this->faker->email;
        $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }
}
