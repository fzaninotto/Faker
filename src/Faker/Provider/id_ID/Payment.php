<?php

namespace Faker\Provider\id_ID;

class Payment extends \Faker\Provider\Payment
{
    /**
     * Bank Names.
     *
     * @example 'Bukopin'
     */
    protected static $bankShortNames = array(
        'Bukopin', 'Mandiri', 'BCA', 'BRI', 'BNI',
    );

    /**
     * Account format based on bank.
     */
    protected static $formatAccount = array(
        'Bukopin' => array(
            '##########',
        ),
        'Mandiri' => array(
            '#############',
        ),
        'BCA' => array(
            '##########',
        ),
        'BRI' => array(
            '###############',
        ),
        'BNI' => array(
            '##########',
        ),
    );

    /**
     * @return string Returns a bank short name
     *
     * @example 'Bukopin'
     */
    public static function bankShortName()
    {
        return static::randomElement(static::$bankShortNames);
    }

    /**
     * Returns the String of a account number.
     *
     * @param string $type      Supporting any of 'Visa', 'MasterCard', 'American Express', and 'Discover'
     * @param bool   $formatted Set to true if the output string should contain one separator every 4 digits
     * @param string $separator Separator string for formatting card number. Defaults to dash (-).
     *
     * @return string
     *
     * @example '1234567890'
     */
    public static function bankAccountNumber($bank = null)
    {
        if (is_null($bank)) {
            $bank = static::bankShortName();
        }
        $mask = static::randomElement(static::$formatAccount[$bank]);

        $number = static::numerify($mask);

        return $number;
    }
}
