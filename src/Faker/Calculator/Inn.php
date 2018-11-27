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
     *
     * @return string Checksum (one or two digits)
     */
    public static function checksum($inn)
    {
        if (strlen($inn) == 9) {
            $multipliers = array(1 => 2, 2 => 4, 3 => 10, 4 => 3, 5 => 5, 6 => 9, 7 => 4, 8 => 6, 9 => 8);
            $sum = 0;
            for ($i = 1; $i <= 9; $i++) {
                $sum += intval(substr($inn, $i - 1, 1)) * $multipliers[$i];
            }

            return strval(($sum % 11) % 10);
        } elseif (strlen($inn) == 10) {
            $multipliers = array(1 => 7, 2 => 2, 3 => 4, 4 => 10, 5 => 3, 6 => 5, 7 => 9, 8 => 4, 9 => 6, 10 => 8);
            $sum = 0;

            for ($i = 1; $i <= 10; $i++) {
                $sum += intval(substr($inn, $i - 1, 1)) * $multipliers[$i];
            }
            $inn .= (($sum % 11) % 10);

            $multipliers = array(1 => 3, 2 => 7, 3 => 2, 4 => 4, 5 => 10, 6 => 3, 7 => 5, 8 => 9, 9 => 4, 10 => 6, 11 => 8);
            $sum = 0;

            for ($i = 1; $i <= 11; $i++) {
                $sum += intval(substr($inn, $i - 1, 1)) * $multipliers[$i];
            }
            $inn .= (($sum % 11) % 10);

            return substr($inn, -2);
        }
    }

    /**
     * Checks whether an INN has a valid checksum
     *
     * @param string $inn
     *
     * @return boolean
     */
    public static function isValid($inn)
    {
        if (strlen($inn) == 10) {
            return self::checksum(substr($inn, 0, -1)) === substr($inn, -1, 1);
        } elseif (strlen($inn) == 12) {
            return self::checksum(substr($inn, 0, -2)) === substr($inn, -2, 2);
        }
    }
}
