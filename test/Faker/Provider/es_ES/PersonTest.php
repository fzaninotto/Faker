<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testDNI()
    {
        $dni = $this->faker->dni;
        $this->assertTrue($this->isValidDNI($dni));
    }

    // validation taken from http://kiwwito.com/php-function-for-spanish-dni-nie-validation/
    public function isValidDNI($string)
    {
        if (strlen($string) != 9 ||
            preg_match('/^[XYZ]?([0-9]{7,8})([A-Z])$/i', $string, $matches) !== 1) {
            return false;
        }

        $map = 'TRWAGMYFPDXBNJZSQVHLCKE';

        list(, $number, $letter) = $matches;

        return strtoupper($letter) === $map[((int) $number) % 23];
    }
}
