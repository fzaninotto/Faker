<?php

namespace Faker\Calculator;

/**
 * Utility class for validating EAN-8 and EAN-13 numbers.
 */
class Ean
{
    public const PATTERN = '/^(?:\d{8}|\d{13})$/';

    /**
     * Computes the checksum of an EAN number.
     *
     * @see https://en.wikipedia.org/wiki/International_Article_Number
     */
    public static function checksum(string $digits): int
    {
        $length = \strlen($digits);

        $even = 0;
        for ($i = $length - 1; $i >= 0; $i -= 2) {
            $even += (int) $digits[$i];
        }

        $odd = 0;
        for ($i = $length - 2; $i >= 0; $i -= 2) {
            $odd += (int) $digits[$i];
        }

        return (10 - ((3 * $even + $odd) % 10)) % 10;
    }

    /**
     * Checks whether the provided number is an EAN compliant number and that
     * the checksum is correct.
     */
    public static function isValid(string $ean): bool
    {
        if (!\preg_match(self::PATTERN, $ean)) {
            return false;
        }

        return self::checksum(\substr($ean, 0, -1)) === (int) \substr($ean, -1);
    }
}
