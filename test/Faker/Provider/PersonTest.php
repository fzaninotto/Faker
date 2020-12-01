<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
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
        return [
            [null, ['John', 'Jane']],
            ['foobar', ['John', 'Jane']],
            ['male', ['John']],
            ['female', ['Jane']],
        ];
    }

    public function testFirstNameMale()
    {
        $this->assertContains(Person::firstNameMale(), ['John']);
    }

    public function testFirstNameFemale()
    {
        $this->assertContains(Person::firstNameFemale(), ['Jane']);
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
        return [
            [null, ['Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']],
            ['foobar', ['Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']],
            ['male', ['Mr.', 'Dr.', 'Prof.']],
            ['female', ['Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']],
        ];
    }

    public function testTitleMale()
    {
        $this->assertContains(Person::titleMale(), ['Mr.', 'Dr.', 'Prof.']);
    }

    public function testTitleFemale()
    {
        $this->assertContains(Person::titleFemale(), ['Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']);
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
        $this->assertContains($faker->name(), ['John Doe', 'Jane Doe']);
        $this->assertContains($faker->name('foobar'), ['John Doe', 'Jane Doe']);
        $this->assertContains($faker->name('male'), ['John Doe']);
        $this->assertContains($faker->name('female'), ['Jane Doe']);
    }
}
