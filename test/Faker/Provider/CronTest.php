<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Cron;
use Faker\Provider\Miscellaneous;

class CronTest extends \PHPUnit_Framework_TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Cron($faker));
        $faker->addProvider(new Miscellaneous($faker));
        $this->faker = $faker;
    }

    public function testMinute()
    {
        $minute = $this->faker->cronMinute();
        $this->assertRegExp(
            '/^[0-9\*\/,-]+$/',
            $minute
        );
    }

    public function testHour()
    {
        $hour = $this->faker->cronHour();
        $this->assertRegExp(
            '/^[0-9\*\/,-]+$/',
            $hour
        );
    }

    public function testDayOfMonth()
    {
        $dayOfMonth = $this->faker->cronDayOfMonth();
        $this->assertRegExp(
            '/^[0-9\*\/,-?LW]+$/',
            $dayOfMonth
        );
    }

    public function testMonth()
    {
        $minute = $this->faker->cronMonth();
        $this->assertRegExp(
            '/^[0-9\*\/,-]+$/',
            $minute
        );
    }

    public function testDayOfWeek()
    {
        $minute = $this->faker->cronDayOfWeek();
        $this->assertRegExp(
            '/^[0-9\*\/,-?L#]+$/',
            $minute
        );
    }

    public function testYear()
    {
        $minute = $this->faker->cronYear();
        $this->assertRegExp(
            '/^[0-9\*\/,-]+$/',
            $minute
        );
    }
}
