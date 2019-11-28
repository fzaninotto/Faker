<?php

namespace Faker\Test\Provider\en_US;

use Faker\Provider\en_US\Person;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testSsn()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->ssn;

            // should be in the format ###-##-####
            $this->assertRegExp('/^[0-9]{3}-[0-9]{2}-[0-9]{4}$/', $number);

            $parts = explode("-", $number);

            // first part must be between 001 and 899, excluding 666
            $this->assertNotEquals(666, $parts[0]);
            $this->assertGreaterThan(0, $parts[0]);
            $this->assertLessThan(900, $parts[0]);

            // second part must be between 01 and 99
            $this->assertGreaterThan(0, $parts[1]);
            $this->assertLessThan(100, $parts[1]);

            // the third part must be between 0001 and 9999
            $this->assertGreaterThan(0, $parts[2]);
            $this->assertLessThan(10000, $parts[2]);
        }
    }
}
