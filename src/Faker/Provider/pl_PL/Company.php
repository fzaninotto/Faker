<?php

namespace Faker\Provider\pl_PL;

class Company extends \Faker\Provider\Company
{
    /*
     * Register of the National Economy
     * @link http://pl.wikipedia.org/wiki/REGON
     * @return 9 digit number
     */
    public static function regon()
    {
        $weights = Array(8, 9, 2, 3, 4, 5, 6, 7);
        $regionNumber = static::numberBetween(0, 49) * 2 + 1;
        $result = array((int) ($regionNumber / 10), $regionNumber % 10);
        for ($i = 2, $size = count($weights); $i < $size; $i++) {
            $result[$i] = static::randomDigit();
        }
        $checksum = 0;
        for ($i = 0, $size = count($result); $i < $size; $i++) {
            $checksum += $weights[$i] * $result[$i];
        }
        $checksum %= 11;
        if ($checksum == 10) {
            $checksum = 0;
        }
        $result[] = $checksum;

        return implode('', $result);
    }

    /**
     * Register of the National Economy, local entity number
     * @link http://pl.wikipedia.org/wiki/REGON
     * @return 14 digit number
     */
    public static function regonLocal()
    {
        $weights = array(2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8);
        $result = str_split(static::regon());
        for ($i = count($result), $size = count($weights); $i < $size; $i++) {
            $result[$i] = static::randomDigit();
        }
        $checksum = 0;
        for ($i = 0, $size = count($result); $i < $size; $i++) {
            $checksum += $weights[$i] * $result[$i];
        }
        $checksum %= 11;
        if ($checksum == 10) {
            $checksum = 0;
        }
        $result[] = $checksum;

        return implode('', $result);
    }
}
