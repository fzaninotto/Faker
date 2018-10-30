<?php

namespace Faker\Test\Provider\pt_PT;

use Faker\Generator;
use Faker\Provider\pt_PT\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testTaxpayerIdentificationNumberIsValid()
    {
        $tin = $this->faker->taxpayerIdentificationNumber();
        $this->assertTrue($this->isValidTin($tin), $tin);
    }

    /**
     *
     * @link http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     *
     * @param type $tin
     *
     * @return boolean
     */
    public static function isValidTin($tin)
    {
        $regex = '(([1,2,3,5,6,8]{1}[0-9]{8})|((45)|(70)|(71)|(72)|(77)|(79)|(90|(98|(99))))[0-9]{7})';
        if (is_null($tin) || !is_numeric($tin) || !strlen($tin) == 9 || preg_match("/$regex/", $tin) !== 1) {
            return false;
        }
        $n = str_split($tin);
        // cd - Control Digit
        $cd = ($n[0] * 9 + $n[1] * 8 + $n[2] * 7 + $n[3] * 6 + $n[4] * 5 + $n[5] * 4 + $n[6] * 3 + $n[7] * 2) % 11;
        if ($cd === 0 || $cd === 1) {
            $cd = 0;
        } else {
            $cd = 11 - $cd;
        }
        if ($cd === intval($n[8])) {
            return true;
        }

        return false;
    }
}
