<?php

namespace Faker\Test\Provider\en_ZA;

use Faker\Generator;
use Faker\Provider\en_ZA\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testIdNumberWithDefaults()
    {
        $idNumber = $this->faker->idNumber();

        $this->assertEquals(13, strlen($idNumber));
        $this->assertRegExp('#^\d{13}$#', $idNumber);
        $this->assertInternalType('string', $idNumber);
    }
}