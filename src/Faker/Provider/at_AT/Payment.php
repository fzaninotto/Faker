<?php

namespace Faker\Provider\at_AT;

/**
 * Class Payment.
 *
 */
class Payment extends \Faker\Provider\Payment
{
    /**
     * Value Added Tax (VAT).
     *
     * @return string VAT Number
     *
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @example 'ATU12345678', ('spaced') 'AT U12345678'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     */
    public static function vat(bool $spacedNationalPrefix = true): string
    {
        $prefix = $spacedNationalPrefix ? 'AT U' : 'ATU';

        return \sprintf('%s%d', $prefix, self::randomNumber(8, true));
    }

    /**
     * International Bank Account Number (IBAN).
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string   $prefix      for generating bank account number of a specific bank
     * @param string   $countryCode ISO 3166-1 alpha-2 country code
     * @param int|null $length      total length without country code and 2 check digits
     */
    public static function bankAccountNumber(string $prefix = '', string $countryCode = 'AT', ?int $length = null): string
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
