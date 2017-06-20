<?php

namespace Faker\Test\Provider\ng_NG;

use Faker\Generator;
use Faker\Provider\en_NG\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
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

    public function testPersonNameIsAValidString()
    {
        $name = $this->faker->name;

        $this->assertNotEmpty($name);
        $this->assertInternalType('string', $name);
    }
}
