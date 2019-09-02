<?php

namespace Faker\Test\Provider\fr_CH;

use Faker\Calculator\Ean;
use Faker\Generator;
use Faker\Provider\fr_CH\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testAvsNumber()
    {
        $avs = $this->faker->avs13;
        $this->assertRegExp('/^756\.([0-9]{4})\.([0-9]{4})\.([0-9]{2})$/', $avs);
        $this->assertTrue(Ean::isValid(str_replace('.', '', $avs)));
    }
}