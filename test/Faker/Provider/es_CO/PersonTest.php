<?php

namespace Faker\Test\Provider\es_CO;

use Faker\Generator;
use Faker\Provider\es_CO\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testNuip()
    {
        $pattern = '/\d{10}/';

        $nuip = $this->faker->nuip;
        $this->assertRegExp($pattern, $nuip);
    }
}
