<?php

namespace Faker\Provider\ar_SA;

class Utils
{
    // ripped unashamedly from https://github.com/grahamking/darkcoding-credit-card/blob/master/gencc.php
    public static function generateLuhnNumber($prefix, $length)
    {

        $number = $prefix;

        # generate digits

        while (strlen($number) < ($length - 1)) {
            $number .= mt_rand(0, 9);
        }

        # Calculate sum

        $sum = 0;
        $pos = 0;

        $reversedNumber = strrev($number);

        while ($pos < $length - 1) {

            $odd = $reversedNumber[$pos] * 2;
            if ($odd > 9) {
                $odd -= 9;
            }

            $sum += $odd;

            if ($pos != ($length - 2)) {

                $sum += $reversedNumber[$pos +1];
            }
            $pos += 2;
        }

        # Calculate check digit

        $checkdigit = ((floor($sum/10) + 1) * 10 - $sum) % 10;
        $number .= $checkdigit;

        return $number;

    }
}
