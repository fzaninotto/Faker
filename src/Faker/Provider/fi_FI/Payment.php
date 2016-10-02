<?php

namespace Faker\Provider\fi_FI;

/**
 * Class Payment
 *
 * @package Faker\Provider\fi_FI
 */
class Payment extends \Faker\Provider\Payment
{
    /**
     * Value Added Tax (VAT)
     *
     * @example 'FI12345678'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     * @see https://www.ytj.fi/en/index/vatnumber.html
     *
     * @return string VAT Number
     */
    public static function vat()
    {
        return sprintf("FI%d", self::randomNumber(8, true));
    }
}
