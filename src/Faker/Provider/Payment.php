<?php

namespace Faker\Provider;

use Faker\Provider\Person;

class Payment extends Base
{
    public static $expirationDateFormat = "m/y";

    protected static $cardsParams = array(
        'visa' => array(
            'mask' => array(
                "4539#########",
                "4539############",
                "4556#########",
                "4556############",
                "4916#########",
                "4916############",
                "4532#########",
                "4532############",
                "4929#########",
                "4929############",
                "40240071#####",
                "40240071########",
                "4485#########",
                "4485############",
                "4716#########",
                "4716############",
                "4############",
                "4###############"
            ),
            'name' => 'Visa'
        ),
        'mastercard' => array(
            'mask' => array(
                "51##############",
                "52##############",
                "53##############",
                "54##############",
                "55##############"
            ),
            'name' => 'MasterCard'
        ),
        'amex' => array(
            'mask' => array(
                "34#############",
                "37#############"),
            'name' => 'American Express'
        ),
        'discover' => array(
            'mask' => array("6011############"),
            'name' => 'Discover'
        ),
    );

    public static function randomCard($valid = true)
    {
        $params = static::randomElement(static::$cardsParams);
        $CCNumber = static::randomCardNumber($params['mask']);

        return array(
            'type' => $params['name'],
            'number' => $CCNumber,
            'name' => strtoupper(Person::firstName() . " " . Person::lastName()),
            'expirationDate' => static::expirationDate($valid)
        );
    }

    public static function randomCardNumber($mask = null)
    {
        if (is_null($mask)) {
            $cp = static::randomElement(static::$cardsParams);
            $mask = $cp['mask'];
        }

        return static::numerify($mask);
    }

    /**
     * @example '04/13'
     */
    public static function expirationDate($valid = true)
    {
        $dt = new \DateTime();
        $sign = ($valid) ? '+' : '-';
        $dt->modify(sprintf($sign . "%s %s", rand(1,36), 'month'));

        return $dt->format(static::$expirationDateFormat);
    }
}
