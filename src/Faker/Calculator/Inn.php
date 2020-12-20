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
        $multipliers = [2, 4, 10, 3, 5, 9, 4, 6, 8];
        $sum = 0;

        for ($i = 0; $i < 9; $i++) {
            $sum += (int) $inn[$i] * $multipliers[$i];
        }

        return (string) (($sum % 11) % 10);
    }

    /**
     * Checks whether an INN has a valid checksum
     *
     * @param string $inn
     * @return bool
     */
    public static function isValid($inn)
    {
        return strlen($inn) === 10 && self::checksum($inn) === $inn[9];
    }
}
