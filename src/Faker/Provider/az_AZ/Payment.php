<?php

namespace Faker\Provider\az_AZ;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @see list of Azerbaijan banks (2016-10-26), source: http://banker.az/banklarin-siyahisi/
     */
    protected static $banks = array(
        'AccessBank ',
        'AFB Bank',
        'AGBank ',
        'Amrahbank',
        'Asiya İnkişaf Bankı',
        'ATA Bank',
        'Azərbaycan Beynəlxalq Bankı ',
        'ASB Bank ',
        'Azər -Türk Bank ',
        'Bank Melli İran',
        'Bank of Baku',
        'Bank Respublika',
        'Bank BTB',
        'Bank VTB (Azərbaycan)',
        'DəmirBank',
        'Expressbank',
        'Gunay Bank ',
        'Kapital Bank ',
        'MuğanBank ',
        'Paşa Bank',
        'Bank Silk Way ',
        'TuranBank',
        'Unibank',
        'Xalq Bank',
        'YapıKredi Bank Azərbaycan',
        'Nikoil Bank',
        'NBC Bank',
        'NBP(Pakistan Milli Bankı)',
        'European bank of reconstruction and development',
        'Mərkəzi Bank',
    );

    /**
     * @example 'Bank Respublika'
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
    public static function bankAccountNumber($prefix = '', $countryCode = 'AZ', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
