<?php
namespace Faker\Provider\fi_FI;

class Payment extends \Faker\Provider\Payment
{
    public static $banks = array(
        '1'   => 'Nordea',
        '2'   => 'Nordea',
        '31'  => 'Handelsbanken',
        '33'  => 'Skandinaviska Enskilda Banken',
        '34'  => 'Danske Bank',
        '36'  => 'Tapiola Pankki',
        '37'  => 'DnB NOR',
        '38'  => 'Swedbank',
        '39'  => 'S-Pankki',
        '4'   => 'Säästöpankki / Pop / Aktia',
        '5'   => 'Osuuspankki',
        '6'   => 'Ålandsbanken',
        '711' => 'Calyon',
        '713' => 'Citibank',
        '715' => 'Itella Pankki',
        '8'   => 'Danske Bank'
    );

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'FI', $length = 14)
    {
        if (!$prefix && $countryCode == 'FI') {
            $prefix = static::randomElement(array_keys(self::$banks));
        }
        return static::iban($countryCode, $prefix, $length);
    }
}
