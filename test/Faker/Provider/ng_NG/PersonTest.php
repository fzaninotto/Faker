<?php

namespace Faker\Test\Provider\ng_NG;

use Faker\Generator;
use Faker\Provider\ng_NG\Person;
use Faker\Test\Provider\ng_NG\MainTest;

class PersonTest extends MainTest
{
     /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testFirstName()
    {
        $this->performTest($this->faker->name);
    }
}
