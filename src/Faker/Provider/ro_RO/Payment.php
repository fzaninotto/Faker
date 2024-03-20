<?php

namespace Faker\Provider\ro_RO;

class Payment extends \Faker\Provider\Payment
{
    /**
     * International Bank Account Number (IBAN).
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string   $prefix      for generating bank account number of a specific bank
     * @param string   $countryCode ISO 3166-1 alpha-2 country code
     * @param int|null $length      total length without country code and 2 check digits
     */
    public static function bankAccountNumber(string $prefix = '', string $countryCode = 'RO', ?int $length = null): string
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
