<?php

namespace Faker\Test\Provider;

use Faker\Provider\Animal;
use Faker\Provider\Color;

class AnimalTest extends \PHPUnit_Framework_TestCase
{


    public function testAnimalName()
    {
        $this->assertRegExp('/^[\w]+$/', Animal::animal());
    }

    public function testColoredAnimalName()
    {
        $this->assertRegExp('/^[\w]+\s[\w\-]+\s?[\w\-]*$/', Animal::coloredAnimal());
    }

    public function testColoredAnimalAlliteration()
    {
        $animal = Animal::coloredAnimalAlliteration();
        $words = explode(" ", $animal);
        $this->assertGreaterThan(1, count($words));
        $this->assertEquals($words[0][0], $words[1][0]);
    }
}
