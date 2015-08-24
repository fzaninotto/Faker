<?php

namespace Faker\Provider\ro_RO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $normalFormats = array(
        'landline' => array(
            '021#######', // Bucharest
            '023#######',
            '024#######',
            '025#######',
            '026#######',
            '027#######', // non-geographic
            '031#######', // Bucharest
            '033#######',
            '034#######',
            '035#######',
            '036#######',
            '037#######', // non-geographic
        ),
        'mobile' => array(
            '07########',
        )
    );

    protected static $specialFormats = array(
        'toll-free' => array(
            '0800######',
            '0801######', // shared-cost numbers
            '0802######', // personal numbering
            '0806######', // virtual cards
            '0807######', // pre-paid cards
            '0870######', // internet dial-up
        ),
        'premium-rate' => array(
            '0900######',
            '0903######', // financial information
            '0906######', // adult entertainment
        )
    );

    /**
     * @link http://en.wikipedia.org/wiki/Telephone_numbers_in_Romania#Last_years
     */
    public function phoneNumber()
    {
        $type = static::randomElement(array_keys(static::$normalFormats));
        $number = static::numerify(static::randomElement(static::$normalFormats[$type]));

        return $number;
    }

    public static function tollFreePhoneNumber()
    {
        $number = static::numerify(static::randomElement(static::$specialFormats['toll-free']));

        return $number;
    }

    public static function premiumRatePhoneNumber()
    {
        $number = static::numerify(static::randomElement(static::$specialFormats['premium-rate']));

        return $number;
    }
}
