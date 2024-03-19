<?php

namespace Faker\Test\Provider\de_DE;

use Faker\Generator;
use Faker\Provider\de_DE\Company;
use Faker\Provider\de_DE\Internet;
use Faker\Provider\de_DE\Person;
use PHPUnit\Framework\TestCase;

final class InternetTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testEmailIsValid(): void
    {
        $email = $this->faker->email();
        $this->assertNotFalse(\filter_var($email, \FILTER_VALIDATE_EMAIL));
    }
}
