<?php

namespace Faker\Calculator;

class Inn
{
    /**
     * Generates INN Checksum
     *
     * https://ru.wikipedia.org/wiki/%D0%98%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80_%D0%BD%D0%B0%D0%BB%D0%BE%D0%B3%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D1%89%D0%B8%D0%BA%D0%B0
     *
     * @param string $inn
     * @return string Checksum (one digit)
     */
    public static function checksum($inn)
    {
        $multipliers = [1 => 2, 2 => 4, 3 => 10, 4 => 3, 5 => 5, 6 => 9, 7 => 4, 8 => 6, 9 => 8];
        $sum = 0;
        for ($i = 1; $i <= 9; $i++) {
            $sum += intval(substr($inn, $i - 1, 1)) * $multipliers[$i];
        }
        return strval(($sum % 11) % 10);
    }

    /**
     * Checks whether an INN has a valid checksum
     *
     * @param string $inn
     * @return bool
     */
    public static function isValid($inn)
    {
        return self::checksum(substr($inn, 0, -1)) === substr($inn, -1, 1);
    }
}
