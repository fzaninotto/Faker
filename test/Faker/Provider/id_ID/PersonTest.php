<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function testFullName()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Abidah Fifaona', $faker->name);
    }

    public function testFirstName()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Abidah', $faker->firstName);
    }

    public function testLastName()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Adolf', $faker->lastName);
    }
}
