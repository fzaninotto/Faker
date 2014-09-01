<?php

namespace Faker\Provider;

/**
 * @see http://en.wikipedia.org/wiki/EAN-13
 */
class Barcode extends \Faker\Provider\Base
{
    private function ean($length = 13)
    {
        $code = $this->numerify(str_repeat('#', $length - 1));

        return $code . static::eanChecksum($code);
    }

    /**
     * Utility function for computing EAN checksums
     */
    protected static function eanChecksum($input)
    {
        $sequence = (strlen($input) - 1) == 8 ? array(3, 1) : array(1, 3);
        $sums = 0;
        foreach (str_split($input) as $n => $digit) {
            $sums += $digit * $sequence[$n % 2];
        }
        return (10 - $sums % 10) % 10;
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
}
