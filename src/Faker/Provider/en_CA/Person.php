<?php
namespace Faker\Provider\en_CA;

/**
 * Extend US class since most fields share the same format
 */
class Person extends \Faker\Provider\en_US\Person
{
    /**
    * @example '046 454 286'
    *
    * Note: For future reference: https://en.wikipedia.org/wiki/Social_Insurance_Number
    * Geography logic was not used to determine first number due to point "However, the government has found it necessary in the past to supply certain regions with SIN numbers assigned to other regions."
    * 
    * This leverages Luhn algorithmic code/logic from https://github.com/corbanworks/fng-sin-tools/blob/master/fngsin.class.php (see license details there-in: https://github.com/corbanworks/fng-sin-tools/blob/master/README)
    */
    public static function sin($separator = ' ')
    {
        $validPrefix = array(1,2,3,4,5,6,7,9);
        $sin = array_rand($validPrefix, 1);
        $length = 9;
        
        while (strlen($sin) < ($length - 1)) {
            $sin .= rand(0, 9);
        }
        
        $sum = 0;
        $pos = 0;
        $reversedSIN = strrev($sin);
        
        while ($pos < $length - 1) {
            $odd = $reversedSIN[ $pos ] * 2;
            if ($odd > 9) {
                $odd -= 9;
            }
            $sum += $odd;
            if ($pos != ($length - 2)) {
                $sum += $reversedSIN[ $pos +1 ];
            }
            $pos += 2;
        }
        
        $checkdigit = (( floor($sum/10) + 1) * 10 - $sum) % 10;
        $sin .= $checkdigit;
        $sin1 = substr($sin, 0, 3);
        $sin2 = substr($sin, 3, 3);
        $sin3 = substr($sin, 6, 3);

        return $sin1.$separator.$sin2.$separator.$sin3;
    }
}
