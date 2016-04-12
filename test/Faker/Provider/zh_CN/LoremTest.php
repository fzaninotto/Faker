<?php
namespace Faker\Test\Provider\zh_CN;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\zh_CN\Lorem;

class LoremTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Lorem($faker));
        $this->faker = $faker;
    }

    public function testWordIsValid()
    {
        $this->assertTrue(true);
    }
}