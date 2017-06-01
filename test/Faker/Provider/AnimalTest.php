<?php

namespace Faker\Test\Provider;

use Faker\Provider\Animal;
use Faker\Provider\Color;

class AnimalTest extends \PHPUnit_Framework_TestCase {
    
    
    public function testAnimalName() {
        $this->assertRegExp( '/^[\w]+$/', Animal::animal() );
    }
}
