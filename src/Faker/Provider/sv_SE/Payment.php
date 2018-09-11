<?php

namespace Faker\Provider\sv_SE;

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
    public static function bankAccountNumber($prefix = '', $countryCode = 'SE', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
	
    protected static $banks = array(
        'Nordea Bank AB','Resurs Bank','Ålandsbanken','Kaupthing Bank Sverige ','Sparbanken Eken','SBAB Bank','Skandiabanken','Länsförsäkringar Bank','Ikanobanken','ICA Banken','Santander Consumer Bank','Forex Bank','Collector Bank AB','Marginalen Bank','BlueStep Bank','Avanza','Swedbank','Svenska Handelsbanken','Skandinaviska Enskilda Banken'
    );

    /**
     * @example 'Volksbank Stuttgart'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }	
}
