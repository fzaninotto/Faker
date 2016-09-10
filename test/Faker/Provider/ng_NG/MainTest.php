<?php

namespace Faker\Test\Provider\ng_NG;

use Faker\Generator;
use Faker\Provider\ng_NG\Address;

class MainTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Address($faker));
        $this->faker = $faker;
    }

    /**
     * Test that the given parameter is not empty
     * And is also a string
     */
    public function performTest($param)
    {
        $this->assertNotEmpty($param);
        $this->assertInternalType('string', $param);
    }

    public function testTrue()
    {
        // $this->performTest($this->faker->region);
    }
}
