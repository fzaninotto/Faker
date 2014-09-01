<?php

namespace Faker\Util;

/**
 * Utility class for generating Luhn checksum and validating a number
 *
 * Luhn algorithm is used to validate credit card numbers, IMEI numbers, and
 * National Provider Identifier numbers.
 *
 * @see http://en.wikipedia.org/wiki/Luhn_algorithm
 */
class Luhn
{
    /**
     * @return int
     */
    private static function checksum($number)
    {
        $sum = 0;
        foreach (str_split(strrev((string) $number)) as $i => $digit) {
            if ($i % 2 !== 0) {
                $digit = $digit * 2;
                if ($digit > 9) {
                    $digit = (int) ($digit / 10) + $digit % 10;
                }
            }
            $sum += $digit;
        }

        return $sum % 10;
    }

    /**
     * @return string
     */
    public static function computeCheckDigit($partialNumber)
    {
        $checkDigit = self::checksum($partialNumber * 10);
        if ($checkDigit === 0) {
            return 0;
        }

        return (string) 10 - $checkDigit;
    }

    /**
     * Checks whether a number (partial number + check digit) is Luhn compliant
     *
     * @return boolean
     */
    public static function isValid($number)
    {
        return self::checksum($number) === 0;
    }
}
