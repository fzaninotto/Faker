<?php

namespace Faker\Test\Provider;

use Faker\Provider\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    /**
     * @dataProvider firstNameProvider
     */
    public function testFirstName($gender, $expected)
    {
        self::assertContains($this->faker->firstName($gender), $expected);
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
        self::assertContains(Person::firstNameMale(), ['John']);
    }

    public function testFirstNameFemale()
    {
        self::assertContains(Person::firstNameFemale(), ['Jane']);
    }

    /**
     * @dataProvider titleProvider
     */
    public function testTitle($gender, $expected)
    {
        self::assertContains($this->faker->title($gender), $expected);
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
        self::assertContains(Person::titleMale(), ['Mr.', 'Dr.', 'Prof.']);
    }

    public function testTitleFemale()
    {
        self::assertContains(Person::titleFemale(), ['Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']);
    }

    public function testLastNameReturnsDoe()
    {
        self::assertEquals($this->faker->lastName(), 'Doe');
    }

    public function testNameReturnsFirstNameAndLastName()
    {
        self::assertContains($this->faker->name(), ['John Doe', 'Jane Doe']);
        self::assertContains($this->faker->name('foobar'), ['John Doe', 'Jane Doe']);
        self::assertContains($this->faker->name('male'), ['John Doe']);
        self::assertContains($this->faker->name('female'), ['Jane Doe']);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
