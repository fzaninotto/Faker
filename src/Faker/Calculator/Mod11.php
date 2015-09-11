<?php

namespace Faker\Calculator;

/**
 * Utility class for generating mod11 checksum and validating a number.
 */
class Mod11
{
    /**
     * @param string $number
     * @return int
     */
    public static function checksum1($number)
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
        $result = $sum % 11;

        return $result == 0 || $result == 1 ? 0 : 11 - $result;
    }

    /**
     * @param string $number
     * @return int
     */
    public static function checksum16($number)
    {
        $weights = array(6, 5, 7, 2, 3, 4, 5, 6, 7);
        $sum = 0;
        for ($i = 0, $length = strlen($number); $i < $length; $i++) {
            $sum += $weights[$i] * $number{$i};
        }
        return $sum % 11;
    }

    /**
     * @param string $number
     * @param int $variant
     * @return int
     */
    public static function computeCheckDigit($number, $variant = 1)
    {
        $methodName = 'checksum' . $variant;
        return self::$methodName($number);
    }

    /**
     * Checks whether a number (partial number + check digit) is mod11 compliant
     *
     * @param string $number
     * @param int $variant
     * @return boolean
     */
    public static function isValid($number, $variant = 1)
    {
        return self::checksum($number, $variant) === 0;
    }
}
