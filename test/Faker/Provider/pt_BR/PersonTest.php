<?php

namespace Faker\Test\Provider\pt_BR;

use Faker\Generator;
use Faker\Provider\pt_BR\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testCpfFormatIsValid()
    {
        $cpf = $this->faker->cpf(false);
        $this->assertRegExp('/\d{9}\d{2}/', $cpf);
        $cpf = $this->faker->cpf(true);
        $this->assertRegExp('/\d{3}\.\d{3}\.\d{3}-\d{2}/', $cpf);
    }
}
