<?php

namespace Faker\Test\Provider\en_NG;

use Faker\Generator;
use Faker\Provider\en_NG\Person;
use Faker\Provider\en_NG\Internet;
use Faker\Test\TestCase;

final class InternetTest extends TestCase
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
        $this->faker = $faker;
    }

    public function testEmailIsValid()
    {
        $email = $this->faker->email();
        $this->assertNotFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
        $this->assertNotEmpty($email);
        $this->assertIsString($email);
    }
}
