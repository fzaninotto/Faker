<?php

namespace Faker\Test\Provider;

use Faker\Provider\Person;
use Faker\Generator;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider firstNameProvider
     */
    public function testFirstName($gender, $expected)
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertContains($faker->firstName($gender), $expected);
    }
    
    public function firstNameProvider()
    {
        return array(
            array(null, array('John', 'Jane')),
            array('foobar', array('John', 'Jane')),
            array('male', array('John')),
            array('female', array('Jane')),
        );
    }

    public function testFirstNameMale()
    {
        $this->assertContains(Person::firstNameMale(), array('John'));
    }
    
    public function testFirstNameFemale()
    {
        $this->assertContains(Person::firstNameFemale(), array('Jane'));
    }
    
    /**
     * @dataProvider titleProvider
     */
    public function testTitle($gender, $expected)
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertContains($faker->title($gender), $expected);
    }
    
    public function titleProvider()
    {
        return array(
            array(null, array('Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
            array('foobar', array('Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
            array('male', array('Mr.', 'Dr.', 'Prof.')),
            array('female', array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.')),
        );
    }

    public function testTitleMale()
    {
        $this->assertContains(Person::titleMale(), array('Mr.', 'Dr.', 'Prof.'));
    }
    
    public function testTitleFemale()
    {
        $this->assertContains(Person::titleFemale(), array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.'));
    }
    
    public function testLastNameReturnsDoe()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertEquals($faker->lastName(), 'Doe');
    }

    public function testNameReturnsFirstNameAndLastName()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertContains($faker->name(), array('John Doe', 'Jane Doe'));
        $this->assertContains($faker->name('foobar'), array('John Doe', 'Jane Doe'));
        $this->assertContains($faker->name('male'), array('John Doe'));
        $this->assertContains($faker->name('female'), array('Jane Doe'));
    }
}
