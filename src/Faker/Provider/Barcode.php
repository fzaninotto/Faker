<?php

namespace Faker\Provider;

/**
 * @see http://en.wikipedia.org/wiki/EAN-13
 * @see http://en.wikipedia.org/wiki/ISBN
 */
class Barcode extends Base
{
    private function ean($length = 13)
    {
        $code = static::numerify(str_repeat('#', $length - 1));

        return $code . static::eanChecksum($code);
    }

    /**
     * Utility function for computing EAN checksums
     *
     * @param string $input
     *
     * @return integer
     */
    protected static function eanChecksum($input)
    {
        $sequence = (strlen($input) + 1) === 8 ? array(3, 1) : array(1, 3);
        $sums = 0;
        foreach (str_split($input) as $n => $digit) {
            $sums += $digit * $sequence[$n % 2];
        }
        return (10 - $sums % 10) % 10;
    }

    /**
     * ISBN-10 check digit
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number#ISBN-10_check_digits
     *
     * @param  string           $input ISBN without check-digit
     * @throws \LengthException When wrong input length passed
     *
     * @return integer Check digit
     */
    protected static function isbnChecksum($input)
    {
        // We're calculating check digit for ISBN-10
        // so, the length of the input should be 9
        $length = 9;

        if (strlen($input) !== $length) {
            throw new \LengthException(sprintf('Input length should be equal to %d', $length));
        }

        $digits = str_split($input);
        array_walk(
            $digits,
            function (&$digit, $position) {
                $digit = (10 - $position) * $digit;
            }
        );
        $result = (11 - array_sum($digits) % 11) % 11;

        // 10 is replaced by X
        return ($result < 10)?$result:'X';
    }

    /**
     * Utility function for computing UPC checksums
     *
     * @param string $input
     *
     * @return integer
     */
    protected static function upcChecksum($input)
    {
        $split = str_split($input);
        $mod = (($split[0]+$split[2]+$split[4]+$split[6]+$split[8]+$split[10]) * 3
                + $split[1]+$split[3]+$split[5]+$split[7]+$split[9]) % 10;

        return $mod == 0 ? 0 : 10 - $mod;
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
     * Get a random ISBN-10 code
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @return string
     * @example '4881416324'
     */
    public function isbn10()
    {
        $code = static::numerify(str_repeat('#', 9));

        return $code . static::isbnChecksum($code);
    }

    /**
     * Get a random ISBN-13 code
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @return string
     * @example '9790404436093'
     */
    public function isbn13()
    {
        $code = '97' . static::numberBetween(8, 9) . static::numerify(str_repeat('#', 9));

        return $code . static::eanChecksum($code);
    }

    /**
     * Get a random UPC-A barcode.
     * @link http://en.wikipedia.org/wiki/Universal_Product_Code
     *
     * @return string
     * @example '725272730706'
     */
    public function upc()
    {
        $code = static::numerify(str_repeat('#', 11));

        return $code . static::upcChecksum($code);
    }
}
