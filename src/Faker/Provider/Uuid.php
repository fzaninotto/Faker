<?php

namespace Faker\Provider;

class Uuid extends Base
{
    /**
     * Generate name based md5 UUID (version 3).
     *
     * @example '7e57d004-2b97-0e7a-b45f-5387367791cd'
     */
    public static function uuid(): string
    {
        // fix for compatibility with 32bit architecture; each \random_int call is restricted to 32bit
        // two such calls will cause 64bits of randomness regardless of architecture
        $seed = \mt_rand(0, 2147483647).'#'.\mt_rand(0, 2147483647);

        // Hash the seed and convert to a byte array
        $val = \md5($seed, true);
        $byte = \array_values(\unpack('C16', $val));

        // extract fields from byte array
        $tLo = ($byte[0] << 24) | ($byte[1] << 16) | ($byte[2] << 8) | $byte[3];
        $tMi = ($byte[4] << 8) | $byte[5];
        $tHi = ($byte[6] << 8) | $byte[7];
        $csLo = $byte[9];
        $csHi = $byte[8] & 0x3F | (1 << 7);

        // correct byte order for big edian architecture
        if (\pack('L', 0x6162797A) === \pack('N', 0x6162797A)) {
            $tLo = (($tLo & 0x000000FF) << 24) | (($tLo & 0x0000FF00) << 8)
                | (($tLo & 0x00FF0000) >> 8) | (($tLo & 0xFF000000) >> 24);
            $tMi = (($tMi & 0x00FF) << 8) | (($tMi & 0xFF00) >> 8);
            $tHi = (($tHi & 0x00FF) << 8) | (($tHi & 0xFF00) >> 8);
        }

        // apply version number
        $tHi &= 0x0FFF;
        $tHi |= (3 << 12);

        // cast to string
        return \sprintf(
            '%08x-%04x-%04x-%02x%02x-%02x%02x%02x%02x%02x%02x',
            $tLo,
            $tMi,
            $tHi,
            $csHi,
            $csLo,
            $byte[10],
            $byte[11],
            $byte[12],
            $byte[13],
            $byte[14],
            $byte[15]
        );
    }
}
