<?php

namespace Faker\Provider\nl_NL;

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
    public static function bankAccountNumber($prefix = '', $countryCode = 'NL', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
    
    /**
     * Value Added Tax (VAT)
     *
     * @example 'NL123456789B01'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @return string VAT Number
     */
    public static function vat()
    {
        return sprintf("NL%dB%d", self::randomNumber(9, true), self::randomNumber(2, true));
    }
}
