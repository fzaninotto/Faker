<?php

namespace Faker\Provider;

class Uuid extends \Faker\Provider\Base
{
    /**
     * Generate name based md5 UUID (version 3).
     * @example '7e57d004-2b97-0e7a-b45f-5387367791cd'
     */
    public static function uuid()
    {
        $seed = mt_rand(0, PHP_INT_MAX);

        // Hash the seed and convert to a byte array
        $val = md5($seed, true);
        $byte = array();
        foreach (unpack('C16', $val) as $tmpKey => $tmpVal) {
            $byte[$tmpKey-1] = $tmpVal;
        }

        // b2f
        $tLo = ($byte[0] << 24) | ($byte[1] << 16) | ($byte[2] << 8) | $byte[3];
        $tMi = ($byte[4] << 8) | $byte[5];
        $tHi = ($byte[6] << 8) | $byte[7];
        $csLo = $byte[9];
        $csHi = $byte[8] & 0x3f | (1 << 7);

        // if needed to make it big endian
        if (pack('L', 0x6162797A) == pack('N', 0x6162797A)) {
            $tLo = (($tLo & 0x000000ff) << 24) | (($tLo & 0x0000ff00) << 8)
                | (($tLo & 0x00ff0000) >> 8) | (($tLo & 0xff000000) >> 24);
            $tMi = (($tMi & 0x00ff) << 8) | (($tMi & 0xff00) >> 8);
            $tHi = (($tHi & 0x00ff) << 8) | (($tHi & 0xff00) >> 8);
        }

        // apply version
        $tHi &= 0x0fff;
        $tHi |= (3 << 12);

        // cast to string
        $uuid = sprintf(
            '%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
            $tLo, $tMi, $tHi, $csHi, $csLo,
            $byte[10], $byte[11], $byte[12], $byte[13], $byte[14], $byte[15]
        );

        return $uuid;
    }
}
