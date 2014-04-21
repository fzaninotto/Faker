<?php

namespace Faker\Provider\pt_PT;

class Person extends \Faker\Provider\Person
{
    protected static $firstEightDigitsFormat = array(
      '1#######',
      '2#######',
      '3#######',
      '45######',
      '5#######',
      '6#######',
      '70######',
      '71######',
      '72######',
      '77######',
      '79######',
      '8#######' ,
      '90######',
      '98######',
      '99######'
    );

    /**
     * Taxpayer Identification Number (NIF in Portugal)
     *
     * @link http://pt.wikipedia.org/wiki/N%C3%BAmero_de_identifica%C3%A7%C3%A3o_fiscal
     * 
     * @return string 9 digit number
     */
    public static function taxpayerIdentificationNumber()
    {
        $firstEightDigits = static::numerify(static::randomElement(static::$firstEightDigitsFormat));
        $lastDigit = static::dvCalcMod11($firstEightDigits);

        return $firstEightDigits.$lastDigit;
    }

    /**
     * Generate module
     *
     * @link http://pt.wikipedia.org/wiki/D%C3%ADgito_verificador
     *
     * @param string $number number
     * 
     * @return int
     */
    public static function dvCalcMod11($number)
    {
        $base = 9;
        $sum = 0;
        $factor = 2;

        for ($i = strlen($number); $i > 0; $i--) {
            $numbers[$i] = substr($number, $i - 1, 1);
            $partial[$i] = $numbers[$i] * $factor;
            $sum += $partial[$i];
            if ($factor == $base) {
                $factor = 1;
            }
            $factor++;
        }
        $res = $sum % 11;

        if ($res == 0 || $res == 1) {
            $digit = 0;
        } else {
            $digit = 11 - $res;
        }

        return $digit;
    }
}
