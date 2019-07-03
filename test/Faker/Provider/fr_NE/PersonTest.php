<?php

namespace Faker\Test\Provider\fr_NE;

use Faker\Generator;
use Faker\Provider\fr_NE\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }



    public function testFirstName() {
        $female = $this->faker->firstNameFemale;
        $male = $this->faker->firstNameMale;
        $this->assertNotEmpty($male);
        $this->assertNotEmpty($female);
        $this->assertInternalType('string', $male);
        $this->assertInternalType('string', $female);
    }

}
