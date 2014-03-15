<?php

namespace Faker\Provider;

class Computer extends \Faker\Provider\Base
{
    private static $macAddressDigits = array(
        "0", "1", "2", "3", "4", "5", "6", "7",
        "8", "9", "A", "B", "C", "D", "E", "F"
    );

    /**
     * @example '32:F1:39:2F:D6:18'
     */
    public static function macAddress()
    {
        $digits = self::$macAddressDigits;
        for ($i=0; $i<6; $i++) {
            shuffle($digits);
            $mac[] = $digits[0] . $digits[1];
        }
        $mac = implode(':', $mac);

        return $mac;
    }

    /**
     * @example '10.1.1.17'
     */
    public static function localIp()
    {
        $start = ['10','192'];

        $ip = $start[rand(0, 1)];

        if ($ip === '192') {
            $ip .= '.168';
        } else {
            $ip .= '.' . rand(0, 255);
        }

        $ip .= sprintf('.%s.%s', rand(0, 255), rand(0, 255));

        return $ip;
    }
}
