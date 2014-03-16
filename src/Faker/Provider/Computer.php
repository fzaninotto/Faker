<?php

namespace Faker\Provider;

class Computer extends \Faker\Provider\Base
{

    /**
     * @example '32:F1:39:2F:D6:18'
     */
    public static function macAddress()
    {
        for ($i=0; $i<6; $i++) {
            $mac[] = sprintf('%02X',static::numberBetween(0,0xff));
        }
        $mac = implode(':', $mac);

        return $mac;
    }

    /**
     * @example '10.1.1.17'
     */
    public static function localIp()
    {
        $start = array('10','192');

        $ip = $start[static::randomNumber(0, 1)];

        if ($ip === '192') {
            $ip .= '.168';
        } else {
            $ip .= '.' . static::randomNumber(0, 255);
        }

        $ip .= sprintf('.%s.%s', static::randomNumber(0, 255), static::randomNumber(0, 255));

        return $ip;
    }

}
