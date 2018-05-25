<?php

namespace Faker\Provider\nl_SR;

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
    public static function bankAccountNumber($prefix = '', $countryCode = 'DE', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * Sources:
     * The 19 largest German banks by total assets
     * @see https://de.wikipedia.org/wiki/Liste_der_größten_Banken_in_Deutschland
     * The 20 largest co-operative banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Genossenschaftsbanken_in_Deutschland
     * The 20 largest public savings banks by branch count
     * @see https://de.wikipedia.org/wiki/Liste_der_Sparkassen_in_Deutschland
     */
    protected static $banks = array(
        'Hakrinbank', 'De Surinaamsche Bank', 'Godo', 'RBC', 'Trustbank Amanah', 'Surichange', 'Finabank'
    );

    /**
     * @example 'Volksbank Stuttgart'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
