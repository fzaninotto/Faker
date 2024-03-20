<?php

namespace Faker\Test\Provider\mn_MN;

use Faker\Generator;
use Faker\Provider\mn_MN\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    public function testName(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(1);

        $this->assertMatchesRegularExpression('/^[А-Я]{1}\.[\w\W]+$/u', $faker->name);
    }

    public function testIdNumber(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->seed(2);

        $this->assertMatchesRegularExpression('/^[А-Я]{2}\d{8}$/u', $faker->idNumber);
    }
}
