<?php

namespace Faker\Test\Provider\ru_RU;

use Faker\Generator;
use Faker\Provider\ru_RU\Person;
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
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testLastNameFemale()
    {
        $this->assertEquals("а", $this->substrUnicode($this->faker->lastName('female'), -1));
    }

    public function testLastNameMale()
    {
        $this->assertNotEquals("а", $this->substrUnicode($this->faker->lastName('male'), -1));
    }

    public function testLastNameRandom()
    {
        $this->assertNotNull($this->faker->lastName());
    }

    private function substrUnicode($str, $s)
    {
        return implode('', array_slice(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY), $s));
    }
}
