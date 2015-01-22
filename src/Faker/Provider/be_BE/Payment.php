<?php

namespace Faker\Provider\be_BE;

/**
 * Class Payment
 *
 * @package Faker\Provider\be_BE
 */
class Payment extends \Faker\Provider\Payment
{
    /**
     * Value Added Tax (VAT)
     *
     * @example 'BE0123456789', ('spaced') 'BE 0123456789'
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
        $prefix = ($spacedNationalPrefix) ? "BE " : "BE";

        return sprintf("%s0%d", $prefix, self::randomNumber(9, true));
    }
}
