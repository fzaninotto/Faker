<?php

namespace Faker\Test\Provider\ro_RO;

use Faker\Generator;
use Faker\Provider\DateTime;
use Faker\Provider\ro_RO\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    const TEST_CNP_REGEX = '/^([1-9])([0-9]{2}(?:0[1-9]|1[012])(?:0[1-9]|[12][0-9]|3[01]))(0[1-9]|[123][0-9]|4[0-6]|5[12])([0-9]{3})([0-9])$/';

    public function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new DateTime($faker));
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testCnpReturnsValidCnp()
    {
        $cnp = $this->faker->cnp;
        $this->assertTrue($this->isValidCnp($cnp));
    }

    public function testCnpReturnsMaleCnp()
    {
        $cnp = $this->faker->cnp('m');
        $this->assertRegExp('/^[1357]\d{12}$/', $cnp);
    }

    public function testCnpReturnsFemaleCnp()
    {
        $cnp = $this->faker->cnp('f');
        $this->assertRegExp('/^[2468]\d{12}$/', $cnp);
    }

    public function testCnpReturns1800sCnp()
    {
        $cnp = $this->faker->cnp(null, 1800);
        $this->assertRegExp('/^[34]\d{12}$/', $cnp);
    }

    public function testCnpReturns1900sCnp()
    {
        $cnp = $this->faker->cnp(null, 1900);
        $this->assertRegExp('/^[12]\d{12}$/', $cnp);
    }

    public function testCnpReturns2000sCnp()
    {
        $cnp = $this->faker->cnp(null, 2000);
        $this->assertRegExp('/^[56]\d{12}$/', $cnp);
    }

    public function testCnpReturnsBrasovCnp()
    {
        $cnp = $this->faker->cnp(null, null, 'BV');
        $this->assertRegExp('/^\d{7}08\d{4}$/', $cnp);
    }

    public function testCnpReturns2000sClujFemaleCnp()
    {
        $cnp = $this->faker->cnp('f', 2000, 'CJ');
        $this->assertRegExp('/^6\d{6}12\d{4}$/', $cnp);
    }

    protected function isValidCnp($cnp)
    {
        if (
            is_string($cnp)
            && (bool) preg_match(static::TEST_CNP_REGEX, $cnp)
            && checkdate(substr($cnp, 3, 2), substr($cnp, 5, 2), substr($cnp, 1, 2))
        ){
            $checkNumber = 279146358279;

            $checksum = 0;
            foreach (range(0, 11) as $digit) {
                $checksum += substr($cnp, $digit, 1) * substr($checkNumber, $digit, 1);
            }
            $checksum = $checksum % 11;

            if (
                ($checksum < 10 && $checksum == substr($cnp, -1))
                || ($checksum == 10 && substr($cnp, -1) == 1)
            ){
                return true;
            }
        }

        return false;
    }
}
