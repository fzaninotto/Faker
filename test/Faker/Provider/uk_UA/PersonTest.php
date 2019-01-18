<?php

namespace Faker\Test\Provider\uk_UA;

use Faker\Generator;
use Faker\Provider\uk_UA\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testFirstNameMaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Максим', $faker->firstNameMale());
    }

    public function testFirstNameFemaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Людмила', $faker->firstNameFemale());
    }

    public function testMiddleNameMaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Миколайович', $faker->middleNameMale());
    }

    public function testMiddleNameFemaleReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Миколаївна', $faker->middleNameFemale());
    }

    public function testLastNameReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('Броваренко', $faker->lastName());
    }

    public function testIndividualIdentificationNumberReturns()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('2812000789', $faker->IndividualIdentificationNumber());   
    }

    public function testIndividualIdentificationNumberWithBirthday()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertEquals('3476157907', $faker->IndividualIdentificationNumber(new \DateTime('1995-03-04')));   
    }

    public function testIndividualIdentificationNumberFemale()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);
        $this->assertEquals('3476157907', $faker->IndividualIdentificationNumber(new \DateTime('1995-03-04'), 'F'));   
    }

    public function testIndividualIdentificationNumberMale()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);
        $this->assertEquals('3476157917', $faker->IndividualIdentificationNumber(new \DateTime('1995-03-04'), 'M'));   
    }


}
