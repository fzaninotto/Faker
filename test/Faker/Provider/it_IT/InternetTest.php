<?php

namespace Faker\Test\Provider\it_IT;

use Faker\Generator;
use Faker\Provider\it_IT\Person;
use Faker\Provider\it_IT\Internet;

class InternetTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new Internet($faker));
        $this->faker = $faker;
    }

    public function testEmailIsValid()
    {
        for ($i = 0; $i < 200; $i++) {
            $this->assertNotFalse(filter_var($this->faker->email(), FILTER_VALIDATE_EMAIL));
        }
    }
}
