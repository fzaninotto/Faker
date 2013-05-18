<?php

namespace Faker\Test\Provider\nl_NL;

/**
 * @author Mark van der Velden <mark@dynom.nl>
 */ 
class PersonTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Return the nl_NL provider
     *
     * @return \Faker\Provider\nl_NL\Person
     */
    private function getProvider()
    {
        $faker = new \Faker\Generator();
        return new \Faker\Provider\nl_NL\Person($faker);
    }


    public function testGeneratingFirstNames()
    {
        $provider = $this->getProvider();
        for ($i=0; $i<50; $i++)
        {
            $this->assertInternalType('string', $provider->firstName());
        }
    }

    public function testGeneratingLastNames()
    {
        $provider = $this->getProvider();
        for ($i=0; $i<50; $i++)
        {
            $this->assertInternalType('string', $provider->lastName());
        }
    }

    public function testGeneratingNames()
    {
        $provider = $this->getProvider();
        for ($i=0; $i<50; $i++)
        {
            $this->assertInternalType('string', $provider->name());
        }
    }
}