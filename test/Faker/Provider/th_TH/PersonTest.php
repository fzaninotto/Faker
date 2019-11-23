<?php

namespace Faker\Test\Provider\th_TH;

use Faker\Factory;
use Faker\Provider\th_TH\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    /**
     * @var Person
     */
    private $faker;

    public function setUp()
    {
        $faker = Factory::create('th_TH');
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testSsn()
    {
        for ($i = 0; $i < 100; $i++) {
            $number = $this->faker->ssn;

            // should be in the format #-####-#####-##-#
            $this->assertRegExp('/^[0-9]{1}-[0-9]{4}-[0-9]{5}-[0-9]{2}-[0-9]{1}$/', $number);
            var_dump($number);
            $parts = explode("-", $number);

            // first digit must be between 1 and 8
            $this->assertGreaterThan(0, $parts[0]);
            $this->assertLessThan(9, $parts[0]);

            // second part must be between 0000 and 9999
            $this->assertGreaterThanOrEqual(0, $parts[1]);
            $this->assertLessThanOrEqual(9999, $parts[1]);

            // third part must be between 00000 and 99999
            $this->assertGreaterThanOrEqual(0, $parts[2]);
            $this->assertLessThanOrEqual(99999, $parts[3]);

            // forth part must be between 00 and 99
            $this->assertGreaterThanOrEqual(0, $parts[3]);
            $this->assertLessThanOrEqual(99, $parts[3]);

            // last part must be a valid checksum
            var_dump(str_replace("-", "", $number));
            $this->assertTrue($this->hasValidChecksum(str_replace("-", "", $number)));
        }
    }

    private function hasValidChecksum($nationalId)
    {
        $digits = str_split($nationalId);
        $lastDigit = array_pop($digits);
        $sum = array_sum(array_map(function ($d, $k) {
            return ($k + 2) * $d;
        }, array_reverse($digits), array_keys($digits)));

        return $lastDigit === strval((11 - $sum % 11) % 10);
    }
}
