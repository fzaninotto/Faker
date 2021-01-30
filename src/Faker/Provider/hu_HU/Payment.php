<?php

namespace Faker\Provider\hu_HU;

class Payment extends \Faker\Provider\Payment
{
    /**
     * Value Added Tax (VAT)
     *
     * @example 'HU12345678', ('national') '12345678-2-12'
     *
     * @see     https://hu.wikipedia.org/wiki/Ad%C3%B3sz%C3%A1m
     * @see     http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see     http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see     http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @param bool $nationalVersion
     *
     * @return string VAT Number
     */
    public static function vat($nationalVersion = true)
    {
        return $nationalVersion
            ? sprintf("%d-2-%d", self::randomNumber(8, true), self::randomNumber(2, true))
            : sprintf("HU%d", self::randomNumber(8, true));
    }

    /**
     * International Bank Account Number (IBAN)
     *
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     *
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'HU', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
