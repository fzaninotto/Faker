<?php

namespace Faker\Provider\kk_KZ;

class Payment extends \Faker\Provider\Payment
{
    protected static $banks = array(
        'Қазкоммерцбанк',
        'Халық Банкі',
    );

    /**
     * @example 'Қазкоммерцбанк'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'KZ', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
