<?php

namespace Faker\Provider\at_AT;

/**
 * Class Payment
 *
 * @package Faker\Provider\at_AT
 */
class Payment extends \Faker\Provider\Payment
{
    /**
     * Value Added Tax (VAT)
     *
     * @example 'ATU12345678', ('spaced') 'AT U12345678'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @param bool $spacedNationalPrefix
     *
     * @return string VAT Number
     */
    public static function vat($spacedNationalPrefix = true)
    {
        $prefix = ($spacedNationalPrefix) ? "AT U" : "ATU";

        return sprintf("%s%d", $prefix, self::randomNumber(8, true));
    }
}
