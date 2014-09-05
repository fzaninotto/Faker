<?php

namespace Faker\Provider;

/**
 * @see http://en.wikipedia.org/wiki/EAN-13
 */
class Barcode extends \Faker\Provider\Base
{

    private function ean($length = 13)
    {
        $code = '';
        for ($i=0; $i<$length-1; $i++) {
            $code .= mt_rand(0, 9);
        }
        
        return $code . static::eanChecksum($code);
    }

    /**
     * Utility function for computing EAN checksums
     */
    protected static function eanChecksum($input)
    {
        $sequence = (strlen($input) + 1) == 8 ? array(3, 1) : array(1, 3);
        $sums = 0;
        foreach (str_split($input) as $n => $digit) {
            $sums += $digit * $sequence[$n % 2];
        }
        return (10 - $sums % 10) % 10;
    }

    private function code39generate($length)
    {
        $code39chars = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789$/+%*', 1); // allowed code39 characters

        $barcode = '';
        for ($i = 0; $i < $length; $i++) {
            shuffle($code39chars);
            $barcode .= $code39chars[0];
        }
        return $barcode;
    }

    /**
     * Get a random EAN13 barcode.
     * @return string
     * @example '4006381333931'
     */
    public function ean13()
    {
        return $this->ean(13);
    }

    /**
     * Get a random EAN8 barcode.
     * @return string
     * @example '73513537'
     */
    public function ean8()
    {
        return $this->ean(8);
    }

    /**
     * Get a random Code39 barcode.
     * @return string
     * @example '4C567DKLH3'
     */
    public function code39($length = 10)
    {
        if (!is_numeric($length)) {
            $length = 10;
        }
        return $this->code39generate($length);
    }
}
