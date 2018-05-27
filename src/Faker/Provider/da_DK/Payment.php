<?php

namespace Faker\Provider\da_DK;

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
    public static function bankAccountNumber($prefix = '', $countryCode = 'DK', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }

    /**
     * Returns an account number with between 7 and 10 digits
     *
     * @link https://amcbanking.com/kb/10540/
     * @return string
     */
    public static function localBankAccountNumber()
    {
        return self::numerify('###%######');
    }

    /**
     * Returns an bank identifier/registration number with four digits
     *
     * @link https://amcbanking.com/kb/10540/
     * @return string
     */
    public static function localBankRegistrationNumber()
    {
        return self::numerify('####');
    }

    /**
     * @see static::localBankRegistrationNumber()
     * @return string
     */
    public static function localBankIdentifier()
    {
        return static::localBankRegistrationNumber();
    }

    /**
     * Sources:
     * A list of all banks in Denmark
     * @see https://skiftbank.dk/banker-i-danmark/
     */
    protected static $banks = array(
        'Arbejdernes Landsbank',
        'Basisbank',
        'BankNordik',
        'BRF Kredit bank',
        'Alm. Brand Bank',
        'Danske Andelskassers Bank',
        'Danske Bank',
        'Djurslands Bank',
        'Dronninglund Sparekasse',
        'Broager Sparekasse',
        'DiBa',
        'FIH',
        'Frøs Sparekasse',
        'Jyske Bank',
        'Jutlander Bank',
        'Handelsbanken',
        'Københavns Andelskasse',
        'Lån og Spar Bank',
        'Middelfart Sparekasse',
        'Nordea Bank Danmark',
        'Nordfyns Bank',
        'Nordjyske Bank',
        'PenSa Bank',
        'Saxo Bank',
        'Sydbank',
        'Ringkjøbing Landbobank',
        'Nykredit',
        'Sparekassen Kronjylland',
        'Sparekassen Sjælland',
        'Sparekassen Vendsyssel',
        'Vestjysk Bank',
        'Østjydsk Bank',
    );

    /**
     * @example 'Nykredit'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
