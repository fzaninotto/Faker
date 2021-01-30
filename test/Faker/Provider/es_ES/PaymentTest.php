<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\Payment;
use PHPUnit\Framework\TestCase;

final class PaymentTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testVAT()
    {
        $vat = $this->faker->vat();

        $this->assertTrue($this->isValidCIF($vat));
    }

    /**
     * Validation taken from https://github.com/ronanguilloux/IsoCodes
     * @link https://github.com/ronanguilloux/IsoCodes/blob/master/src/IsoCodes/Cif.php
     */
    function isValidCIF($cif)
    {
        $cifCodes = 'JABCDEFGHI';

        if (9 !== strlen($cif)) {
            return false;
        }
        $cif = strtoupper(trim($cif));
        $sum = (string) $this->getCifSum($cif);

        $n = (10 - substr($sum, -1)) % 10;

        if (preg_match('/^[ABCDEFGHJKNPQRSUVW]{1}/', $cif)) {
            if (in_array($cif[0], array('A', 'B', 'E', 'H'))) {
                // Numerico
                return $cif[8] == $n;
            } elseif (in_array($cif[0], array('K', 'P', 'Q', 'S'))) {
                // Letras
                return $cif[8] == $cifCodes[$n];
            } else {
                // Alfanumérico
                if (is_numeric($cif[8])) {
                    return $cif[8] == $n;
                } else {
                    return $cif[8] == $cifCodes[$n];
                }
            }
        }

        return false;
    }

    /**
     * Validation taken from https://github.com/ronanguilloux/IsoCodes
     * @link https://github.com/ronanguilloux/IsoCodes/blob/master/src/IsoCodes/Nif.php
     */
    public function getCifSum($cif)
    {
        $sum = $cif[2] + $cif[4] + $cif[6];

        for ($i = 1; $i < 8; $i += 2) {
            $tmp = (string) (2 * $cif[$i]);
            $tmp = $tmp[0] + ((strlen($tmp) == 2) ? $tmp[1] : 0);
            $sum += $tmp;
        }

        return $sum;
    }

}
