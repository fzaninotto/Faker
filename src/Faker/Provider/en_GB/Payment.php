<?php

namespace Faker\Provider\en_GB;

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
    public static function bankAccountNumber($prefix = '', $countryCode = 'GB', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * @param string $prefix
     * @return string
     */
    public static function ukBankAccountNumber($prefix = '')
    {
        if (preg_match('^\d+$^', $prefix) !== 1) {
            $prefix = '';
        }
        $ukBankAccountNumber =
            $prefix . static::numerify(
                str_pad('', 8-strlen($prefix), '#')
            );

        return $ukBankAccountNumber;
    }

    /**
     * @param string $ab
     * @param string $cd
     * @param string $ef
     * @return string
     */
    public static function ukSortCode($ab = '', $cd = '', $ef = '')
    {
        $ukSortCode =
            (preg_match('^\d+$^', $ab) === 1 ? $ab : static::numerify('##')).'-'.
            (preg_match('^\d+$^', $cd) === 1 ? $cd : static::numerify('##')).'-'.
            (preg_match('^\d+$^', $ef) === 1 ? $ef : static::numerify('##'));

        return $ukSortCode;
    }
}
