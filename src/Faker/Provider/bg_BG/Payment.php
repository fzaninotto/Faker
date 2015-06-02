<?php

namespace Faker\Provider\bg_BG;

class Payment extends \Faker\Provider\Payment
{
    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'BG', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * Value Added Tax (VAT)
     *
     * (this method is kept for backwards compatibility purpose only, until 1.6.0)
     * @deprecated Deprecated since 1.6.0, please use \Faker\Provider\Payment::vat() instead
     *
     * @example 'BG1234567890', ('spaced') 'BG 1234567890'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @param bool   $spacedNationalPrefix
     * @param string $country country code (ex: 'BE')
     *
     * @return string VAT Number
     */
    public static function vat($spacedNationalPrefix = true, $country = 'BG')
    {
        return parent::vat($spacedNationalPrefix, $country);
    }
}
