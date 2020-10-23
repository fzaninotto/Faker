<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    /**
     * @var string
     */
    private $suffix = 'а';

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testLastNameFemale()
    {
        $this->assertEquals($this->suffix, substr($this->faker->lastName('female'), -strlen($this->suffix)));
    }

    public function testLastNameMale()
    {
        $this->assertNotEquals($this->suffix, substr($this->faker->lastName('male'), -strlen($this->suffix)));
    }

    public function testLastNameRandom()
    {
        $this->assertNotNull($this->faker->lastName());
    }
}
