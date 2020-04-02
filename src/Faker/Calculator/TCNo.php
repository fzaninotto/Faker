<?php

namespace Faker\Calculator;

use InvalidArgumentException;

class TCNo
{
    /**
     * Generates Turkish Identity Number Checksum
     * Gets first 9 digit as prefix and calculates checksum
     *
     * https://en.wikipedia.org/wiki/Turkish_Identification_Number
     *
     * @param string $identityPrefix
     * @return string Checksum (two digit)
     */
    public static function checksum($identityPrefix)
    {
        if (strlen((string)$identityPrefix) !== 9) {
            throw new InvalidArgumentException('Argument should be an integer and should be 9 digits.');
        }

        $oddSum = 0;
        $evenSum = 0;

        $identityArray = array_map('intval', str_split($identityPrefix)); // Creates array from int
        foreach ($identityArray as $index => $digit) {
            if ($index % 2 == 0) {
                $evenSum += $digit;
            } else {
                $oddSum += $digit;
            }
        }

        $tenthDigit = (7 * $evenSum - $oddSum) % 10;
        $eleventhDigit = ($evenSum + $oddSum + $tenthDigit) % 10;

        return $tenthDigit . $eleventhDigit;
    }

    /**
     * Checks whether a TCNo has a valid checksum
     *
     * @param string $tcNo
     * @return boolean
     */
    public static function isValid($tcNo)
    {
        return self::checksum(substr($tcNo, 0, -2)) === substr($tcNo, -2, 2);
    }
}
