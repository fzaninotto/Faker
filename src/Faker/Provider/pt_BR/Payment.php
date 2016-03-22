<?php

namespace Faker\Provider\pt_BR;

class Payment extends \Faker\Provider\Payment
{
    protected static $cardVendors = [
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card', 'Diners', 'Elo', 'Hipercard',
    ];

    // see https://gist.github.com/erikhenrique/5931368 / http://pt.stackoverflow.com/q/3715/26461
    protected static $cardParams = [
        'Visa' => [
            '4##############',
        ],
        'MasterCard' => [
            '5##############',
        ],
        'American Express' => [
            '34############',
            '37############',
        ],
        'Discover Card' => [
            '6011###########',
            '622############',
            '64#############',
            '65#############',
        ],
        'Diners' => [
            '301############',
            '301##########',
            '305############',
            '305##########',
            '36#############',
            '36###########',
            '38#############',
            '38###########',
        ],
        'Elo' => [
            '636368#########',
            '438935#########',
            '504175#########',
            '451416#########',
            '636297#########',
            '5067###########',
            '4576###########',
            '4011###########',
        ],
        'Hipercard' => [
            '38#############',
            '60#############',
        ],
        'Aura' => [
            '50#############',
        ],
    ];

    /**
     * International Bank Account Number (IBAN).
     *
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     *
     * @param string $prefix      for generating bank account number of a specific bank
     * @param string $countryCode ISO 3166-1 alpha-2 country code
     * @param int    $length      total length without country code and 2 check digits
     *
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'BR', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
