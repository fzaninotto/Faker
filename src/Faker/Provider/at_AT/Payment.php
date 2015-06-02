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
     * (this method is kept for backwards compatibility purpose only, until 1.6.0)
     * @deprecated Deprecated since version 1.6.0, please use \Faker\Provider\Payment::vat() instead
     *
     * @example 'ATU12345678', ('spaced') 'AT U12345678'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @param bool   $spacedNationalPrefix
     * @param string $country country code (ex: 'BE')
     *
     * @return string VAT Number
     */
    public static function vat($spacedNationalPrefix = true, $country = 'AT')
    {
        return parent::vat($spacedNationalPrefix, $country);
    }
}
