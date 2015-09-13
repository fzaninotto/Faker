<?php

namespace Faker\Provider;

use Faker\Calculator\Iban;
use Faker\Calculator\Luhn;
use Faker\Calculator\Vat;

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
            "4539########",
            "4539###########",
            "4556########",
            "4556###########",
            "4916########",
            "4916###########",
            "4532########",
            "4532###########",
            "4929########",
            "4929###########",
            "40240071####",
            "40240071#######",
            "4485########",
            "4485###########",
            "4716########",
            "4716###########",
            "4###########",
            "4##############"
        ),
        'MasterCard' => array(
            "51#############",
            "52#############",
            "53#############",
            "54#############",
            "55#############"
        ),
        'American Express' => array(
            "34############",
            "37############"
        ),
        'Discover Card' => array(
            "6011###########"
        ),
    );

    /**
     * @var array list of IBAN formats, source: @link http://www.swift.com/dsp/resources/documents/IBAN_Registry.txt
     */
    protected static $ibanFormats = array(
        'AD' => array(array('n', 4),    array('n', 4),  array('c', 12)),
        'AE' => array(array('n', 3),    array('n', 16)),
        'AL' => array(array('n', 8),    array('c', 16)),
        'AT' => array(array('n', 5),    array('n', 11)),
        'AZ' => array(array('a', 4),    array('c', 20)),
        'BA' => array(array('n', 3),    array('n', 3),  array('n', 8),  array('n', 2)),
        'BE' => array(array('n', 3),    array('n', 7),  array('n', 2)),
        'BG' => array(array('a', 4),    array('n', 4),  array('n', 2),  array('c', 8)),
        'BH' => array(array('a', 4),    array('c', 14)),
        'BR' => array(array('n', 8),    array('n', 5),  array('n', 10), array('a', 1),  array('c', 1)),
        'CH' => array(array('n', 5),    array('c', 12)),
        'CR' => array(array('n', 3),    array('n', 14)),
        'CY' => array(array('n', 3),    array('n', 5),  array('c', 16)),
        'CZ' => array(array('n', 4),    array('n', 6),  array('n', 10)),
        'DE' => array(array('n', 8),    array('n', 10)),
        'DK' => array(array('n', 4),    array('n', 9),  array('n', 1)),
        'DO' => array(array('c', 4),    array('n', 20)),
        'EE' => array(array('n', 2),    array('n', 2),  array('n', 11), array('n', 1)),
        'ES' => array(array('n', 4),    array('n', 4),  array('n', 1),  array('n', 1),  array('n', 10)),
        'FR' => array(array('n', 5),    array('n', 5),  array('c', 11), array('n', 2)),
        'GB' => array(array('a', 4),    array('n', 6),  array('n', 8)),
        'GE' => array(array('a', 2),    array('n', 16)),
        'GI' => array(array('a', 4),    array('c', 15)),
        'GR' => array(array('n', 3),    array('n', 4),  array('c', 16)),
        'GT' => array(array('c', 4),    array('c', 20)),
        'HR' => array(array('n', 7),    array('n', 10)),
        'HU' => array(array('n', 3),    array('n', 4),  array('n', 1),  array('n', 15), array('n', 1)),
        'IE' => array(array('a', 4),    array('n', 6),  array('n', 8)),
        'IL' => array(array('n', 3),    array('n', 3),  array('n', 13)),
        'IS' => array(array('n', 4),    array('n', 2),  array('n', 6),  array('n', 10)),
        'IT' => array(array('a', 1),    array('n', 5),  array('n', 5),  array('c', 12)),
        'KW' => array(array('a', 4),    array('n', 22)),
        'KZ' => array(array('n', 3),    array('c', 13)),
        'LB' => array(array('n', 4),    array('c', 20)),
        'LI' => array(array('n', 5),    array('c', 12)),
        'LT' => array(array('n', 5),    array('n', 11)),
        'LU' => array(array('n', 3),    array('c', 13)),
        'LV' => array(array('a', 4),    array('c', 13)),
        'MC' => array(array('n', 5),    array('n', 5),  array('c', 11), array('n', 2)),
        'MD' => array(array('c', 2),    array('c', 18)),
        'ME' => array(array('n', 3),    array('n', 13), array('n', 2)),
        'MK' => array(array('n', 3),    array('c', 10), array('n', 2)),
        'MR' => array(array('n', 5),    array('n', 5),  array('n', 11), array('n', 2)),
        'MT' => array(array('a', 4),    array('n', 5),  array('c', 18)),
        'MU' => array(array('a', 4),    array('n', 2),  array('n', 2),  array('n', 12), array('n', 3),  array('a', 3)),
        'NL' => array(array('a', 4),    array('n', 10)),
        'NO' => array(array('n', 4),    array('n', 6),  array('n', 1)),
        'PK' => array(array('a', 4),    array('c', 16)),
        'PL' => array(array('n', 8),    array('n', 16)),
        'PS' => array(array('a', 4),    array('c', 21)),
        'PT' => array(array('n', 4),    array('n', 4),  array('n', 11), array('n', 2)),
        'RO' => array(array('a', 4),    array('c', 16)),
        'RS' => array(array('n', 3),    array('n', 13), array('n', 2)),
        'SA' => array(array('n', 2),    array('c', 18)),
        'SE' => array(array('n', 3),    array('n', 16), array('n', 1)),
        'SI' => array(array('n', 5),    array('n', 8),  array('n', 2)),
        'SK' => array(array('n', 4),    array('n', 6),  array('n', 10)),
        'SM' => array(array('a', 1),    array('n', 5),  array('n', 5),  array('c', 12)),
        'TN' => array(array('n', 2),    array('n', 3),  array('n', 13), array('n', 2)),
        'TR' => array(array('n', 5),    array('n', 1),  array('c', 16)),
        'VG' => array(array('a', 4),    array('n', 16)),
    );

    /**
     * A list of format patterns indexed by country code.
     * Each format is an array of:
     * * a format string, passed to static::bothify()
     * * an atom, which is an array with two elements:
     *      * a 'c', 'n' or 'a' character that stands for random alfanumeric, digit or letter
     *        or an array of other atoms
     *      * number of repeated characters or an array of such numbers
     *
     * @var array
     * @link http://ec.europa.eu/taxation_customs/vies/faq.html?locale=lt#item_11
     * @link http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @link http://en.wikipedia.org/wiki/VAT_identification_number
     * @link https://github.com/ronanguilloux/IsoCodes/blob/master/src/IsoCodes/Vat.php
     * @link http://www.braemoor.co.uk/software/_private/jsvatx.js
     */
    public static $vatFormats = array(
        'AL' => array(
            'K########L',
            'J########L',
        ),
        'AR' => '###########',
        'AT' => 'U########',
        'AU' => '#########',
        'BE' => array(
            '0#########',
            '#########',
        ),
        'BG' => array(
            '#########',
            '##########',
        ),
        'BY' => '#########',
        'CL' => '########-#',
        'CO' => '##########',
        'CH' => array(
            '#########',
            '#########MWST',
        ),
        'CY' => array(
            '0#######?',
            '1#######?',
            '2#######?',
            '3#######?',
            '4#######?',
            '5#######?',
            '9#######?',
        ),
        'CZ' => array(
            '########',
            '#########',
            '##########',
        ),
        'DE' => array(
            '1########',
            '2########',
            '3########',
            '4########',
            '5########',
            '6########',
            '7########',
            '8########',
            '9########',
        ),
        'DK' => '## ## ## ##',
        'EC' => '#############',
        'EE' => '10#######',
        'EL' => '#########',
        'ES' => array(
            '?#######',
            '########',
            '#######?',
        ),
        'FI' => '########',
        'FR' => array(
            '??#########',
            '#?#########',
            '?##########',
            '###########',
        ),
        'GB' => array(
            '#########',
            '############',
            'GD0##',
            'GD1##',
            'GD2##',
            'GD3##',
            'GD4##',
            'HA5##',
            'HA6##',
            'HA7##',
            'HA8##',
            'HA9##',
        ),
        'GT' => '###########-#',
        'HR' => '###########',
        'HU' => '########',
        'IE' => array(
            '########',
            '######?#',
        ),
        'IT' => '###########',
        'LT' => array(
            '#########',
            '############',
        ),
        'LU' => '########',
        'LV' => '###########',
        'MT' => array(
            '1#######',
            '2#######',
            '3#######',
            '4#######',
            '5#######',
            '6#######',
            '7#######',
            '8#######',
            '9#######',
        ),
        'MX' => '### ###### ###',
        'NL' => '#########B##',
        'NO' => '#########MVA',
        'PH' => '############',
        'PL' => '#########',
        'PT' => array(
            '1#######',
            '2#######',
            '3#######',
            '45######',
            '5#######',
            '6#######',
            '70######',
            '71######',
            '72######',
            '77######',
            '79######',
            '8#######',
            '90######',
            '98######',
            '99######',
        ),
        'RO' => array(
            '##',
            '###',
            '####',
            '#####',
            '######',
            '#######',
            '########',
            '#########',
            '##########',
        ),
        'RU' => array(
            '##########',
            '############',
        ),
        'SE' => '##########01',
        'SI' => array(
            '1#######',
            '2#######',
            '3#######',
            '4#######',
            '5#######',
            '6#######',
            '7#######',
            '8#######',
            '9#######',
        ),
        'SK' => '##########',
        'TR' => '##########',
        'UA' => '############',
        'VE' => array(
            'J########-#',
            'G########-#',
            'V########-#',
            'E########-#',
            'J#########',
            'G#########',
            'V#########',
            'E#########',
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
     * @param string  $type      Supporting any of 'Visa', 'MasterCard', 'American Express', and 'Discover'
     * @param boolean $formatted Set to true if the output string should contain one separator every 4 digits
     * @param string  $separator Separator string for formatting card number. Defaults to dash (-).
     * @return string
     *
     * @example '4485480221084675'
     */
    public static function creditCardNumber($type = null, $formatted = false, $separator = '-')
    {
        if (is_null($type)) {
            $type = static::creditCardType();
        }
        $mask = static::randomElement(static::$cardParams[$type]);

        $number = static::numerify($mask);
        $number .= Luhn::computeCheckDigit($number);

        if ($formatted) {
            $p1 = substr($number, 0, 4);
            $p2 = substr($number, 4, 4);
            $p3 = substr($number, 8, 4);
            $p4 = substr($number, 12);
            $number = $p1 . $separator . $p2 . $separator . $p3 . $separator . $p4;
        }

        return $number;
    }

    /**
     * @param boolean $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return \DateTime
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
     * @param boolean $valid                True (by default) to get a valid expiration date, false to get a maybe valid date
     * @param string  $expirationDateFormat
     * @return string
     * @example '04/13'
     */
    public function creditCardExpirationDateString($valid = true, $expirationDateFormat = null)
    {
        return $this->creditCardExpirationDate($valid)->format(is_null($expirationDateFormat) ? static::$expirationDateFormat : $expirationDateFormat);
    }

    /**
     * @param  boolean $valid True (by default) to get a valid expiration date, false to get a maybe valid date
     * @return array
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

    /**
     * International Bank Account Number (IBAN)
     *
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  integer $length      total length without country code and 2 check digits
     * @return string
     */
    public static function iban($countryCode, $prefix = '', $length = null)
    {
        $countryCode = is_null($countryCode) ? self::randomKey(self::$ibanFormats) : strtoupper($countryCode);

        $format = !isset(static::$ibanFormats[$countryCode]) ? null : static::$ibanFormats[$countryCode];
        if ($length === null) {
            if ($format === null) {
                $length = 24;
            } else {
                $length = 0;
                foreach ($format as $part) {
                    list($class, $groupCount) = $part;
                    $length += $groupCount;
                }
            }
        }
        if ($format === null) {
            $format = array(array('n', $length));
        }

        $expandedFormat = '';
        foreach ($format as $item) {
            list($class, $length) = $item;
            $expandedFormat .=  str_repeat($class, $length);
        }

        $result = $prefix;
        $expandedFormat = substr($expandedFormat, strlen($result));
        foreach (str_split($expandedFormat) as $class) {
            switch ($class) {
                default:
                case 'c':
                    $result .= mt_rand(0, 100) <= 50 ? static::randomDigit() : strtoupper(static::randomLetter());
                    break;
                case 'a':
                    $result .= strtoupper(static::randomLetter());
                    break;
                case 'n':
                    $result .= static::randomDigit();
                    break;
            }
        }

        $result = static::addBankCodeChecksum($result, $countryCode);

        $checksum = Iban::checksum($countryCode . '00' . $result);

        return $countryCode . $checksum . $result;
    }

    /**
     * Calculates a checksum for the national bank and branch code part in the IBAN.
     *
     * @param  string $iban        randomly generated $iban
     * @param  string $countryCode ISO 3166-1 alpha-2 country code
     * @return string IBAN with one character altered to a proper checksum
     */
    protected static function addBankCodeChecksum($iban, $countryCode = '')
    {
        return $iban;
    }

    /**
     * Return the String of a SWIFT/BIC number
     *
     * @example 'RZTIAT22263'
     * @link    http://en.wikipedia.org/wiki/ISO_9362
     * @return  string Swift/Bic number
     */
    public static function swiftBicNumber()
    {
        return self::regexify("^([A-Z]){4}([A-Z]){2}([0-9A-Z]){2}([0-9A-Z]{3})?$");
    }

    /**
     * Generate a national VAT number.
     *
     * The Value Added Tax, or VAT, is a general, broadly based consumption tax
     * assessed on the value added to goods and services.
     *
     * @link http://ec.europa.eu/taxation_customs/vies/faq.html for European VAT numbers rules
     * @example (belgian) BE0629078028, (polish) PL5206136094
     * @param string $country              country code (ex: 'BE')
     * @param bool $addPrefix
     * @return string a fake valid VAT number
     */
    public static function vat($country = null, $addPrefix = true)
    {
        $country = is_null($country) ? self::randomElement(array_keys(self::$vatFormats)) : $country;
        if (!array_key_exists($country, self::$vatFormats)) {
            throw new \InvalidArgumentException(sprintf("There is no VAT generator for %s so far.", $country));
        }
        $format = self::$vatFormats[$country];
        if (is_array($format)) {
            $format = self::randomElement($format);
        }
        $vat = static::bothify($format);
        if (method_exists('\Faker\Calculator\Vat', 'checksum' . $country)) {
            $vat .= call_user_func('\Faker\Calculator\Vat::checksum' . $country, $vat);
        }

        return ($addPrefix ? $country : '') . $vat;
    }
}
