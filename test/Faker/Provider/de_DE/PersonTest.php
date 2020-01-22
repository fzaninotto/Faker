<?php

namespace Faker\Test\Provider\de_DE;

use Faker\Generator;
use Faker\Provider\de_DE\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testTinIsValid()
    {
        $tin = $this->faker->tin();
        $this->assertRegExp('/^(\d{11})$/', $tin);
    }
}
