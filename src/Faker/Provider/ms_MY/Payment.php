<?php

namespace Faker\Provider\ms_MY;

class Payment extends \Faker\Provider\Payment
{
    /**     
     * {@see} list of Malaysian banks (2016-07-02), source: https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia
     * {@link}  https://en.wikipedia.org/wiki/List_of_banks_in_Malaysia
     * 
     */
    protected static $banks = array(
        'Maybank',
        'CIMB Bank',
        'Public Bank Berhad',
        'RHB Bank',
        'Hong Leong Bank',
        'AMMB Holdings',
        'United Overseas Bank',
        'Bank Rakyat',
        'OCBC Bank',
        'HSBC Bank Malaysia',
        'Affin Bank Berhad',
        'AmBank (M) Berhad'
    );

    /**
     * @example 'Новый Московский Банк'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
