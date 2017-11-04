<?php

namespace Faker\Test\Provider\pt_BR;

use Faker\Generator;
use Faker\Provider\pt_BR\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
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

    public function testRgFormatIsValid()
    {
        $rg = $this->faker->rg(false);
        $this->assertRegExp('/\d{8}\d/', $rg);
        $rg = $this->faker->rg(true);
        $this->assertRegExp('/\d{2}\.\d{3}\.\d{3}-[0-9X]/', $rg);
    }
}
