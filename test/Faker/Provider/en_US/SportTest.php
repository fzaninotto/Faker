<?php

namespace Faker\Test\Provider\en_US;

use Faker\Generator;
use Faker\Provider\en_US\Sport;
use PHPUnit\Framework\TestCase;

class SportTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Sport($faker));
        $this->faker = $faker;
    }

    public function testSport()
    {
        $sport = $this->faker->sport();
        $pattern = '/^[A-Za-z ]+$/';
        $this->assertRegExp($pattern, $sport);
    }
}
