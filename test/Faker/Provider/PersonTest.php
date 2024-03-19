<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Person;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    #[DataProvider('firstNameProvider')]
    public function testFirstName($gender, $expected): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertContains($faker->firstName($gender), $expected);
    }

    public static function firstNameProvider(): array
    {
        return [
            [null, ['John', 'Jane']],
            ['foobar', ['John', 'Jane']],
            ['male', ['John']],
            ['female', ['Jane']],
        ];
    }

    public function testFirstNameMale(): void
    {
        $this->assertContains(Person::firstNameMale(), ['John']);
    }

    public function testFirstNameFemale(): void
    {
        $this->assertContains(Person::firstNameFemale(), ['Jane']);
    }

    #[DataProvider('titleProvider')]
    public function testTitle($gender, $expected): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertContains($faker->title($gender), $expected);
    }

    public static function titleProvider(): array
    {
        return [
            [null, ['Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']],
            ['foobar', ['Mr.', 'Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']],
            ['male', ['Mr.', 'Dr.', 'Prof.']],
            ['female', ['Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']],
        ];
    }

    public function testTitleMale(): void
    {
        $this->assertContains(Person::titleMale(), ['Mr.', 'Dr.', 'Prof.']);
    }

    public function testTitleFemale(): void
    {
        $this->assertContains(Person::titleFemale(), ['Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.']);
    }

    public function testLastNameReturnsDoe(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertEquals('Doe', $faker->lastName());
    }

    public function testNameReturnsFirstNameAndLastName(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->assertContains($faker->name(), ['John Doe', 'Jane Doe']);
        $this->assertContains($faker->name('foobar'), ['John Doe', 'Jane Doe']);
        $this->assertContains($faker->name('male'), ['John Doe']);
        $this->assertContains($faker->name('female'), ['Jane Doe']);
    }
}
