<?php

namespace Faker\Test\Provider\da_DK;

use Faker\Generator;
use Faker\Provider\da_DK\Company;
use Faker\Provider\da_DK\Internet;
use Faker\Provider\da_DK\Person;
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
