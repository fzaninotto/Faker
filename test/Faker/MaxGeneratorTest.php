<?php

namespace Faker\Test;

use Faker\Provider\Base;

class MaxGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGeneratorReturnsExpectedMax()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Base($faker));

        $results = array();
        for ($i = 0; $i < 100; $i++) {
            $fake = $faker->max(5)->name();
            if (!in_array($fake, $results)) {
                $results[] = $fake;
            }
        }

        $count = count($results);

        $this->assertLessThanOrEqual(5, $count);
        $this->assertGreaterThan(0, $count);
    }

    private function loadResults($faker, &$arr, $method, $max = 5)
    {
        do {
            $fake = $faker->max($max)->$method();
            if (in_array($fake, $arr)) {
                continue;
            }

            $arr[] = $fake;
        } while (count($arr) < $max);
    }

    public function testGeneratorResetIndividualResetsOnlyOne()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Base($faker));

        $firstResults = array();
        $this->loadResults($faker, $firstResults, 'firstName');

        $lastResults = array();
        $this->loadResults($faker, $lastResults, 'lastName');

        $faker->seed(109248);

        $firstResults2 = array();
        $firstResults2[] = $faker->max(5, true)->firstName();
        $this->loadResults($faker, $firstResults2, 'firstName');

        $lastResults2 = array();
        $this->loadResults($faker, $lastResults2, 'lastName');

        $this->assertNotEmpty(array_diff($firstResults, $firstResults2));
        $this->assertEmpty(array_diff($lastResults, $lastResults2));
    }
    public function testGeneratorResetAllValues()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Base($faker));

        $firstResults = array();
        $this->loadResults($faker, $firstResults, 'firstName');

        $lastResults = array();
        $this->loadResults($faker, $lastResults, 'lastName');

        $faker->seed(109248);

        $firstResults2 = array();
        $firstResults2[] = $faker->max(5, false, true)->firstName();
        $this->loadResults($faker, $firstResults2, 'firstName');

        $lastResults2 = array();
        $this->loadResults($faker, $lastResults2, 'lastName');

        $this->assertNotEmpty(array_diff($firstResults, $firstResults2));
        $this->assertNotEmpty(array_diff($lastResults, $lastResults2));
    }

    public function testSurpassingMaxRetriesThrowsOverflowException()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Base($faker));

        $this->setExpectedException('\OverflowException');

        $faker->max(5, false, false, 0)->firstName();
    }
}
