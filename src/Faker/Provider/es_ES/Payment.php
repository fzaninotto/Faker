<?php

namespace Faker\Provider\es_ES;

class Payment extends \Faker\Provider\Payment
{
    private static array $vatMap = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'N', 'P', 'Q', 'R', 'S', 'U', 'V', 'W'];

    /**
     * International Bank Account Number (IBAN).
     *
     * @see http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string   $prefix      for generating bank account number of a specific bank
     * @param string   $countryCode ISO 3166-1 alpha-2 country code
     * @param int|null $length      total length without country code and 2 check digits
     */
    public static function bankAccountNumber(string $prefix = '', string $countryCode = 'ES', ?int $length = null): string
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * Value Added Tax (VAT).
     *
     * @return string VAT Number
     *
     * @see https://en.wikipedia.org/wiki/VAT_identification_number
     * @see https://es.wikipedia.org/wiki/C%C3%B3digo_de_identificaci%C3%B3n_fiscal
     *
     * @example 'B93694545'
     */
    public static function vat(): string
    {
        $letter = static::randomElement(self::$vatMap);
        $number = static::numerify('########');

        return $letter.$number;
    }
}
