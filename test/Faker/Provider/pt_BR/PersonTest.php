<?php

namespace Faker\Test\Provider\pt_BR;

use Faker\Generator;
use Faker\Provider\pt_BR\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testCpfFormatIsValid()
    {
        $cpf = $this->faker->cpf(false);
        $this->assertMatchesRegularExpression('/\d{9}\d{2}/', $cpf);
        $cpf = $this->faker->cpf(true);
        $this->assertMatchesRegularExpression('/\d{3}\.\d{3}\.\d{3}-\d{2}/', $cpf);
    }

    public function testRgFormatIsValid()
    {
        $rg = $this->faker->rg(false);
        $this->assertMatchesRegularExpression('/\d{8}\d/', $rg);
        $rg = $this->faker->rg(true);
        $this->assertMatchesRegularExpression('/\d{2}\.\d{3}\.\d{3}-[0-9X]/', $rg);
    }
}
