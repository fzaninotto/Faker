<?php

namespace Faker\Provider;

use Faker\Provider\Person;

class Payment extends Base
{
    public static $expirationDateFormat = "m/y";

    protected static $cardsParams = array(
        'visa' => array(
            'prefix' => array("4539","4556","4916","4532","4929","40240071","4485","4716","4"),
            'length' => array(16, 13),
            'name' => 'Visa'
        ),
        'mastercard' => array(
            'prefix' => array("51","52","53","54", "55"),
            'length' => array(16),
            'name' => 'MasterCard'
        ),
        'amex' => array(
            'prefix' => array("34", "37"),
            'length' => array(15),
            'name' => 'American Express'
        ),
        'discover' => array(
            'prefix' => array("6011"),
            'length' => array(16),
            'name' => 'Discover'
        ),
    );

    public static function randomCard($valid = true)
    {
        $params = static::randomElement(static::$cardsParams);

        $CCPrefix = static::randomElement($params['prefix']);
        $CCLength = static::randomElement($params['length']);

        $CCNumber = static::randomCardNumber($CCPrefix, $CCLength);

        return array(
            'type' => $params['name'],
            'number' => $CCNumber,
            'name' => strtoupper(Person::firstName() . " " . Person::lastName()),
            'expirationDate' => static::expirationDate($valid)
        );
    }

    public static function randomCardNumber($prefix, $length)
    {
        $cardNumber = $prefix;
        while( strlen($cardNumber) < $length ) {
            $cardNumber .= static::randomDigit();
        }

        return $cardNumber;
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
