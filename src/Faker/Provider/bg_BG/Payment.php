<?php

namespace Faker\Provider\bg_BG;

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
    public static function bankAccountNumber(string $prefix = '', string $countryCode = 'BG', ?int $length = null): string
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * Value Added Tax (VAT).
     *
     * @return string VAT Number
     *
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @example 'BG1234567890', ('spaced') 'BG 1234567890'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     */
    public static function vat(bool $spacedNationalPrefix = true): string
    {
        $prefix = $spacedNationalPrefix ? 'BG ' : 'BG';

        return \sprintf(
            '%s%d%d',
            $prefix,
            self::randomNumber(5, true), // workaround for mt_getrandmax() limitation
            self::randomNumber(self::randomElement([4, 5]), true)
        );
    }
}
