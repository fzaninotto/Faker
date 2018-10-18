<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /** @var Person */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);
        $this->faker = $faker;
    }


    public function testName()
    {
        $this->assertEquals('Крюков Эдуард Максимович', $this->faker->name('male'));
        $this->assertEquals('Зиминa Ярослава Борисовна', $this->faker->name('female'));

        $this->assertEquals('Белозёровa Мальвина Андреевна', $this->faker->name());
    }

    public function testFirstName()
    {
        $this->assertEquals('Кузьма', $this->faker->firstName('male'));
        $this->assertEquals('Александра', $this->faker->firstName('female'));

        $this->assertEquals('Флорентина', $this->faker->firstName());
    }

    public function testFirstNameMale()
    {
        $this->assertEquals('Кузьма', Person::firstNameMale());
    }

    public function testFirstNameFemale()
    {
        $this->assertEquals('Люся', Person::firstNameFemale());
    }

    public function testLastName()
    {
        $this->assertEquals('Воронцов', $this->faker->lastName('male'));
        $this->assertEquals('Ивановa', $this->faker->lastName('female'));

        $this->assertEquals('Сысоевa', $this->faker->lastName());
    }

    public function testLastNameMale()
    {
        $this->assertEquals('Воронцов', Person::lastNameMale());
    }

    public function testLastNameFemale()
    {
        $this->assertEquals('Воронцовa', Person::lastNameFemale());
    }


    public function testMiddleName()
    {
        $this->assertEquals('Фёдорович', $this->faker->middleName('male'));
        $this->assertEquals('Александровна', $this->faker->middleName('female'));

        $this->assertEquals('Максимовна', $this->faker->middleName());
    }

    public function testMiddleNameMale()
    {
        $this->assertEquals('Фёдорович', Person::middleNameMale());
    }

    public function testMiddleNameFemale()
    {
        $this->assertEquals('Фёдоровна', Person::middleNameFemale());
    }

//    public function testLastNameMale()
//    {
//        $this->assertEquals('Воронцов', $this->faker->lastName('male'));
//    }
//
//    public function testLastNameFemale()
//    {
//        $this->assertEquals('Крюкова', $this->faker->lastName('female'));
//    }
//
//    public function testLastNameMale2()
//    {
//        $this->assertEquals('Воронцов', $this->faker->lastName('male'));
//    }
//
//    public function testLastNameFemaleInnerFunction()
//    {
//        $this->assertEquals('Крюкова', $this->faker->lastName('female'));
//    }
//
//    public function testMiddleNameMale()
//    {
//        $this->assertEquals('Фёдорович', $this->faker->middleName('male'));
//    }
//
//    public function testMiddleNameFemale()
//    {
//        $this->assertEquals('Фёдоровна', $this->faker->middleName('female'));
//    }

}
