<?php

namespace Faker\Provider;

class Payment extends Base
{
    public static $expirationDateFormat = "m/y";

    protected static $cardVendors = array(
        'Visa', 'Visa', 'Visa', 'Visa', 'Visa',
        'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard', 'MasterCard',
        'American Express', 'Discover Card'
    );

    // see http://en.wikipedia.org/wiki/Bank_card_number for a reference of existing prefixes
    protected static $cardParams = array(
        'Visa' => array(
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
        'MasterCard' => array(
            "51##############",
            "52##############",
            "53##############",
            "54##############",
            "55##############"
        ),
        'American Express' => array(
            "34#############",
            "37#############"
        ),
        'Discover Card' => array(
            "6011############"
        ),
    );

    /**
     * @return string Returns a credit card vendor name
     * 
     * @example 'MasterCard'
     */
    public static function creditCardType()
    {
        return static::randomElement(static::$cardVendors);
    }

    /**
     * Returns the String of a credit card number.
     *
     * @param string  $type      Supporting any of 'Visa', 'MasterCard', 'Amercian Express', and 'Discover'
     * @param boolean $formatted Set to true if the output string should contain one separator every 4 digits
     * @param string  $separator Separator string for formatting card number. Defaults to dash (-).
     *
     * @example '4485480221084675'
     */
    public static function creditCardNumber($type = null, $formatted = false, $separator = '-')
    {
        if (is_null($type)) {
            $type = static::cardType();
        }
        $mask = static::randomElement(static::$cardParams[$type]);

        $number = static::numerify($mask);
        
        if ($formatted) {
            $p1 = substr($number, 0, 4);
            $p2 = substr($number, 4, 4);
            $p3 = substr($number, 8, 4);
            $p4 = substr($number, 12);
            $number = $p1 .$separator . $p2 . $separator . $p3 . $separator . $p4;
        }

        return $number;
    }

    /**
     * @param boolean $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @example 04/13
     */
    public function creditCardExpirationDate($valid = true)
    {
        if ($valid) {
            return $this->generator->dateTimeBetween('now', '36 months');
        }
        return $this->generator->dateTimeBetween('-36 months', '36 months');
    }

    /**
     * @param boolean $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @param string  $expirationDateFormat
     * @example '04/13'
     */
    public function creditCardExpirationDateString($valid = true, $expirationDateFormat = null)
    {
        return $this->creditCardExpirationDate($valid)->format(is_null($expirationDateFormat) ? static::$expirationDateFormat : $expirationDateFormat);
    }

    /**
     * @param boolean $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return array()
     */
    public function creditCardDetails($valid = true)
    {
        $type = static::creditCardType();

        return array(
            'type'   => $type,
            'number' => static::creditCardNumber($type),
            'name'   => $this->generator->name(),
            'expirationDate' => $this->creditCardExpirationDateString($valid)
        );
    }
}
