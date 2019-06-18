<?php

namespace Faker\Calculator;

class Snils
{
    /**
     * Generates SNILS Checksum
     *
     * https://ru.wikipedia.org/wiki/%D0%A1%D1%82%D1%80%D0%B0%D1%85%D0%BE%D0%B2%D0%BE%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80_%D0%B8%D0%BD%D0%B4%D0%B8%D0%B2%D0%B8%D0%B4%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE_%D0%BB%D0%B8%D1%86%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE_%D1%81%D1%87%D1%91%D1%82%D0%B0
     *
     * @param string $snils
     *
     * @return string Checksum (two digits)
     */
    public static function checksum($snils)
    {
        $multipliers = array(1 => 9, 2 => 8, 3 => 7, 4 => 6, 5 => 5, 6 => 4, 7 => 3, 8 => 2, 9 => 1);
        $sum = 0;

        for ($i = 1; $i <= 9; $i++) {
            $sum += intval(substr($snils, $i - 1, 1)) * $multipliers[$i];
        }

        do {
            if ($sum >= 101) {
                $sum %= 101;
            }
            if ($sum === 100 || $sum === 0) {
                $sum = 0;
            }
        } while ($sum >= 100);

        return str_pad($sum, 2, '0', STR_PAD_LEFT);
    }

    /**
     * Checks whether an SNILS has a valid checksum and its number does not contain 3 or more the same digits in row
     *
     * @param string $snils
     *
     * @return boolean
     */
    public static function isValid($snils)
    {
        return preg_match('/(.)\1\1/', substr($snils, 0, -2)) === 0
            && self::checksum(substr($snils, 0, -2)) === substr($snils, -2, 2);
    }
}
