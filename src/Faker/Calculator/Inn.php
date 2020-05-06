<?php

namespace Faker\Calculator;

use Faker\Provider\Base;

class Inn
{

    const TYPE_PERSON = 'person';
    const TYPE_COMPANY = 'company';

    /**
     * Generates INN Checksum
     *
     * https://ru.wikipedia.org/wiki/%D0%98%D0%B4%D0%B5%D0%BD%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BD%D0%BE%D0%BC%D0%B5%D1%80_%D0%BD%D0%B0%D0%BB%D0%BE%D0%B3%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D1%89%D0%B8%D0%BA%D0%B0
     *
     * @param string $inn
     * @param string $type
     * @return string Checksum (one digit)
     */
    public static function checksum($inn, $type = 'company')
    {
        switch ($type) {
            case static::TYPE_COMPANY:
                return static::checkDigit($inn, [2, 4, 10, 3, 5, 9, 4, 6, 8]);
            case static::TYPE_PERSON:
                $n11 = static::checkDigit($inn, [7, 2, 4, 10, 3, 5, 9, 4, 6, 8]);
                $n12 = static::checkDigit($inn . $n11, [3, 7, 2, 4, 10, 3, 5, 9, 4, 6, 8]);
                return $n11 . $n12;
                break;
            default:
                throw new \LogicException('Unknown inn type');
        }
    }

    /**
     * Generates INN
     *
     * @param $area_code
     * @param string $type
     * @return string
     */
    public static function generate($area_code, $type = 'company')
    {
        if ($type != static::TYPE_COMPANY && $type != static::TYPE_PERSON) {
            throw new \LogicException('Unknown inn mask type');
        }

        switch ($type) {
            case static::TYPE_COMPANY:
                $inn_base = Base::numerify('#######');
                break;
            case static::TYPE_PERSON:
                $inn_base = Base::numerify('########');
                break;
        }

        static::addAreaCode($area_code, $inn_base);

        return $inn_base . static::checksum($inn_base, $type);
    }

    /**
     * Checks whether an INN has a valid checksum
     *
     * @param string $inn
     * @return boolean
     */
    public static function isValid($inn)
    {
        return self::checksum(substr($inn, 0, -1)) === substr($inn, -1, 1);
    }

    /**
     * Add area code to INN
     *
     * @param $area_code
     * @param $inn
     */
    public static function addAreaCode($area_code, &$inn)
    {
        if ($area_code === "" || intval($area_code) == 0) {
            //Simple generation code for areas in Russian without check for valid
            $area_code = Base::numberBetween(1, 91);
        } else {
            $area_code = intval($area_code);
        }

        $area_code = str_pad($area_code, 2, '0', STR_PAD_LEFT);

        $inn = $area_code . $inn;
    }

    /**
     * Calculate check digit
     *
     * @param $inn
     * @param $coefficients
     * @return string
     */
    public static function checkDigit($inn, $coefficients)
    {
        $n = 0;
        foreach ($coefficients as $i => $k) {
            $n += $k * (int)$inn{$i};
        }
        return strval($n % 11 % 10);
    }
}
