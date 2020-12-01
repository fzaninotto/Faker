<?php

namespace Faker\Test\Provider\mn_MN;

use Faker\Generator;
use Faker\Provider\mn_MN\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testName()
    {
        $this->faker->seed(1);

        $this->assertMatchesRegularExpression('/^[А-Я]{1}\.[\w\W]+$/u', $this->faker->name);
    }

    public function testIdNumber()
    {
        $this->faker->seed(2);

        $this->assertMatchesRegularExpression('/^[А-Я]{2}\d{8}$/u', $this->faker->idNumber);
    }
}
