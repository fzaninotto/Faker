<?php

namespace Faker\Test\Provider\en_ZA;

use Faker\Generator;
use Faker\Provider\en_ZA\Person;
use Faker\Provider\DateTime;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $faker->addProvider(new DateTime($faker));
        $this->faker = $faker;
    }

    public function testIdNumberWithDefaults()
    {
        $idNumber = $this->faker->idNumber();

        $this->assertEquals(13, strlen($idNumber));
        $this->assertRegExp('#^\d{13}$#', $idNumber);
        $this->assertInternalType('string', $idNumber);
    }

    public function testIdNumberForMales()
    {
        $idNumber = $this->faker->idNumber(new \DateTime(), true, 'male');

        $genderDigit = substr($idNumber, 6, 1);

        $this->assertContains($genderDigit, array('5', '6', '7', '8', '9'));
    }

    public function testIdNumberForFemales()
    {
        $idNumber = $this->faker->idNumber(new \DateTime(), true, 'female');

        $genderDigit = substr($idNumber, 6, 1);

        $this->assertContains($genderDigit, array('0', '1', '2', '3', '4'));
    }
}
