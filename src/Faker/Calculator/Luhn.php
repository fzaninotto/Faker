<?php

namespace Faker\Calculator;

use Faker\Provider\Base as BaseProvider;
use InvalidArgumentException;

/**
 * Utility class for generating and validating Luhn numbers.
 *
 * Luhn algorithm is used to validate credit card numbers, IMEI numbers, and
 * National Provider Identifier numbers.
 *
 * @see http://en.wikipedia.org/wiki/Luhn_algorithm
 */
class Luhn
{
    /**
     * @param string $number
     * @return int
     */
    private static function checksum($number)
    {
        $number = (string) $number;
        $length = strlen($number);
        $sum = 0;
        for ($i = $length - 1; $i >= 0; $i -= 2) {
            $sum += $number{$i};
        }
        for ($i = $length - 2; $i >= 0; $i -= 2) {
            $sum += array_sum(str_split($number{$i} * 2));
        }

        return $sum % 10;
    }

    /**
     * @param $partialNumber
     * @return string
     */
    public static function computeCheckDigit($partialNumber)
    {
        $checkDigit = self::checksum($partialNumber . '0');
        if ($checkDigit === 0) {
            return 0;
        }

        return (string) (10 - $checkDigit);
    }

    /**
     * Checks whether a number (partial number + check digit) is Luhn compliant
     *
     * @param string $number
     * @return bool
     */
    public static function isValid($number)
    {
        return self::checksum($number) === 0;
    }

    /**
     * Generate a Luhn compliant number.
     *
     * @param string $prefix
     * @param int $length
     * @return string
     */
    public static function generateLuhnNumber($prefix, $length)
    {
        $length = intval($length);
        $prefix = trim($prefix);

        if (!preg_match('/^\d*$/', $prefix)) {
            throw new InvalidArgumentException('prefix should be all digits.');
        }

        if ($length <= 0) {
            throw new InvalidArgumentException('length should be greater than zero.');
        }

        if (strlen($prefix) > $length) {
            throw new InvalidArgumentException('prefix should be longer than the length.');
        }

        if (strlen($prefix) == $length) {
            if (static::isValid($prefix)) {
                return $prefix;
            } else {
                throw new InvalidArgumentException('prefix length equals length but prefix is not a Luhn number.');
            }
        }

        $pattern = $prefix . str_repeat('#', $length - strlen($prefix) - 1);
        $partialValue = BaseProvider::numerify($pattern);
        return $partialValue . Luhn::computeCheckDigit($partialValue);
    }
}
