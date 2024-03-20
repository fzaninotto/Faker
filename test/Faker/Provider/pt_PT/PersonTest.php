<?php

namespace Faker\Test\Provider\pt_PT;

use Faker\Generator;
use Faker\Provider\pt_PT\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    protected Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testTaxpayerIdentificationNumberIsValid(): void
    {
        $tin = $this->faker->taxpayerIdentificationNumber();
        $this->assertTrue(self::isValidTin($tin), $tin);
    }

    /**
     * @see http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     */
    public static function isValidTin(?int $tin): bool
    {
        $regex = '(([1,2,3,5,6,8]{1}[0-9]{8})|((45)|(70)|(71)|(72)|(77)|(79)|(90|(98|(99))))[0-9]{7})';
        if (null === $tin || !\is_numeric($tin) || 9 !== \strlen($tin) || 1 !== \preg_match("/$regex/", $tin)) {
            return false;
        }
        $n = \str_split($tin);
        // cd - Control Digit
        $cd = ($n[0] * 9 + $n[1] * 8 + $n[2] * 7 + $n[3] * 6 + $n[4] * 5 + $n[5] * 4 + $n[6] * 3 + $n[7] * 2) % 11;
        if (0 === $cd || 1 === $cd) {
            $cd = 0;
        } else {
            $cd = 11 - $cd;
        }

        return $cd === (int) $n[8];
    }
}
