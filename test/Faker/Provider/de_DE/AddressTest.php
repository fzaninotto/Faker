<?php

namespace Faker\Test\Provider\de_DE;

use Faker\Generator;
use Faker\Provider\de_DE\Address;
use Faker\Provider\de_DE\Person;

class AddressTest extends \PHPUnit_Framework_TestCase
{
    
    /**
     * @var Faker\Generator
     */
    private $faker;
    
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }
    
    /**
     * @test
     */
    public function state ()
    {
        $state = $this->faker->state();
        $this->assertInternalType('array', $state);
        $this->assertCount(1, $state);
        
        foreach ($state as $stateShort => $stateName){
            $this->assertInternalType('string', $stateShort);
            $this->assertEquals(2, strlen($stateShort));
            $this->assertInternalType('string', $stateName);
            $this->assertGreaterThan(2, strlen($stateName));
        }
    }
    
    /**
     * @test
     */
    public function stateName ()
    {
        $stateName = $this->faker->stateName();
        $this->assertInternalType('string', $stateName);
        $this->assertGreaterThan(2, strlen($stateName));
    }
    
    /**
     * @test
     */
    public function stateShort ()
    {
        $stateShort = $this->faker->stateShort();
        $this->assertInternalType('string', $stateShort);
        $this->assertEquals(2, strlen($stateShort));
    }
    
    /**
     * @test
     */
    public function address (){
        $address = $this->faker->address();
        $this->assertInternalType('string', $address);
    }
}
