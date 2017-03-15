<?php

namespace Faker\Provider\pt_BR;

class Payment extends \Faker\Provider\Payment
{
    protected static $cardVendors = array(
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card', 'Diners', 'Elo', 'Hipercard'
    );

    // see https://gist.github.com/erikhenrique/5931368 / http://pt.stackoverflow.com/q/3715/26461
    protected static $cardParams = array(
        'Visa' => array(
            "4##############"
        ),
        'MasterCard' => array(
            "5##############"
        ),
        'American Express' => array(
            "34############",
            "37############"
        ),
        'Discover Card' => array(
            "6011###########",
            "622############",
            "64#############",
            "65#############"
        ),
        'Diners' => array(
            "301############",
            "301##########",
            "305############",
            "305##########",
            "36#############",
            "36###########",
            "38#############",
            "38###########",
        ),
        'Elo' => array(
            "636368#########",
            "438935#########",
            "504175#########",
            "451416#########",
            "636297#########",
            "5067###########",
            "4576###########",
            "4011###########",
        ),
        'Hipercard' => array(
            "38#############",
            "60#############",
        ),
        "Aura" => array(
            "50#############"
        )
    );

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'BR', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
