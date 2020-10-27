<?php

namespace Faker\Calculator;

/**
 * Utility class for validating EAN-8 and EAN-13 numbers
 *
 * @package Faker\Calculator
 */
class Ean
{
    /** @var string EAN validation pattern */
    public const PATTERN = '/^(?:\d{8}|\d{13})$/';

    /**
     * Computes the checksum of an EAN number.
     *
     * @see https://en.wikipedia.org/wiki/International_Article_Number
     *
     * @param string $digits
     * @return int
     */
    public static function checksum($digits)
    {
        $length = strlen($digits);

        $even = 0;
        for ($i = $length - 1; $i >= 0; $i -= 2) {
            $even += $digits[$i];
        }

        $odd = 0;
        for ($i = $length - 2; $i >= 0; $i -= 2) {
            $odd += $digits[$i];
        }

        return (10 - ((3 * $even + $odd) % 10)) % 10;
    }

    /**
     * Checks whether the provided number is an EAN compliant number and that
     * the checksum is correct.
     *
     * @param string $ean An EAN number
     * @return boolean
     */
    public static function isValid($ean)
    {
        if (!preg_match(self::PATTERN, $ean)) {
            return false;
        }

        return self::checksum(substr($ean, 0, -1)) === intval(substr($ean, -1));
    }
}
