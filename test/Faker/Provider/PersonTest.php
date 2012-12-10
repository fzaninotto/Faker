<?php

namespace Faker\Test\Provider;

use Faker\Provider\Person;
use Faker\Generator;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function testFirstNameReturnsJohnOrJane()
    {
        $this->assertContains(Person::firstName(), array('John', 'Jane'));
    }

    public function testLastNameReturnsDoe()
    {
        $this->assertEquals(Person::lastName(), 'Doe');
    }

    public function testNameReturnsFirstNameAndLastName()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertContains($faker->name(), array('John Doe', 'Jane Doe'));
    }
}
