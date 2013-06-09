<?php

namespace Faker\Test\Provider\nl_NL;

/**
 * @author Mark van der Velden <mark@dynom.nl>
 */ 
class PersonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Faker\Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new \Faker\Generator();
        $faker->addProvider(new \Faker\Provider\nl_NL\Person($faker));

        $this->faker = $faker;
    }

    public function testGeneratingFirstNames()
    {
        for ($i=0; $i<50; $i++)
        {
            $this->assertInternalType('string', $this->faker->firstName());
        }
    }

    public function testGeneratingLastNames()
    {
        for ($i=0; $i<50; $i++)
        {
            $this->assertInternalType('string', $this->faker->lastName());
        }
    }

    public function testGeneratingNames()
    {
        for ($i=0; $i<50; $i++)
        {
            $this->assertInternalType('string', $this->faker->name());
        }
    }
}