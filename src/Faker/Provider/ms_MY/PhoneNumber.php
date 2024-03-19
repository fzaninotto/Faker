<?php

namespace Faker\Provider\ms_MY;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = [
        '{{mobileNumber}}',
        '{{fixedLineNumber}}',
        '{{voipNumber}}',
    ];

    protected static array $plusSymbol = [
        '+',
    ];

    protected static array $countryCodePrefix = [
        '6',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static array $zeroOneOnePrefix = ['10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '22', '23', '32'];
    protected static array $zeroOneFourPrefix = ['2', '3', '4', '5', '6', '7', '8', '9'];
    protected static array $zeroOneFivePrefix = ['1', '2', '3', '4', '5', '6', '9'];

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static array $mobileNumberFormatsWithFormatting = [
        '010-### ####',
        '011-{{zeroOneOnePrefix}}## ####',
        '012-### ####',
        '013-### ####',
        '014-{{zeroOneFourPrefix}}## ####',
        '016-### ####',
        '017-### ####',
        '018-### ####',
        '019-### ####',
    ];

    protected static array $mobileNumberFormats = [
        '010#######',
        '011{{zeroOneOnePrefix}}######',
        '012#######',
        '013#######',
        '014{{zeroOneFourPrefix}}######',
        '016#######',
        '017#######',
        '018#######',
        '019#######',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Geographic_area_codes
     */
    protected static array $fixedLineNumberFormatsWithFormatting = [
        '03-#### ####',
        '04-### ####',
        '05-### ####',
        '06-### ####',
        '07-### ####',
        '08#-## ####',
        '09-### ####',
    ];

    protected static array $fixedLineNumberFormats = [
        '03########',
        '04#######',
        '05#######',
        '06#######',
        '07#######',
        '08#######',
        '09#######',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/Telephone_numbers_in_Malaysia#Mobile_phone_codes_and_IP_telephony
     */
    protected static array $voipNumberWithFormatting = [
        '015-{{zeroOneFivePrefix}}## ####',
    ];

    protected static array $voipNumber = [
        '015{{zeroOneFivePrefix}}######',
    ];

    /**
     * Return a Malaysian Mobile Phone Number.
     *
     * @param bool $countryCodePrefix true, false
     * @param bool $formatting        true, false
     *
     * @example '+6012-345-6789'
     */
    public function mobileNumber(bool $countryCodePrefix = true, bool $formatting = true): string
    {
        if ($formatting) {
            $format = static::randomElement(static::$mobileNumberFormatsWithFormatting);
        } else {
            $format = static::randomElement(static::$mobileNumberFormats);
        }

        if ($countryCodePrefix) {
            return static::countryCodePrefix($formatting).static::numerify($this->generator->parse($format));
        } else {
            return static::numerify($this->generator->parse($format));
        }
    }

    /**
     * Return prefix digits for 011 numbers.
     *
     * @example '10'
     */
    public static function zeroOneOnePrefix(): string
    {
        return static::numerify(static::randomElement(static::$zeroOneOnePrefix));
    }

    /**
     * Return prefix digits for 014 numbers.
     *
     * @example '2'
     */
    public static function zeroOneFourPrefix(): string
    {
        return static::numerify(static::randomElement(static::$zeroOneFourPrefix));
    }

    /**
     * Return prefix digits for 015 numbers.
     *
     * @example '1'
     */
    public static function zeroOneFivePrefix(): string
    {
        return static::numerify(static::randomElement(static::$zeroOneFivePrefix));
    }

    /**
     * Return a Malaysian Fixed Line Phone Number.
     *
     * @param bool $countryCodePrefix true, false
     * @param bool $formatting        true, false
     *
     * @example '+603-4567-8912'
     */
    public function fixedLineNumber(bool $countryCodePrefix = true, bool $formatting = true): string
    {
        if ($formatting) {
            $format = static::randomElement(static::$fixedLineNumberFormatsWithFormatting);
        } else {
            $format = static::randomElement(static::$fixedLineNumberFormats);
        }

        if ($countryCodePrefix) {
            return static::countryCodePrefix($formatting).static::numerify($this->generator->parse($format));
        } else {
            return static::numerify($this->generator->parse($format));
        }
    }

    /**
     * Return a Malaysian VoIP Phone Number.
     *
     * @param bool $countryCodePrefix true, false
     * @param bool $formatting        true, false
     *
     * @example '+6015-678-9234'
     */
    public function voipNumber(bool $countryCodePrefix = true, bool $formatting = true): string
    {
        if ($formatting) {
            $format = static::randomElement(static::$voipNumberWithFormatting);
        } else {
            $format = static::randomElement(static::$voipNumber);
        }

        if ($countryCodePrefix) {
            return static::countryCodePrefix($formatting).static::numerify($this->generator->parse($format));
        } else {
            return static::numerify($this->generator->parse($format));
        }
    }

    /**
     * Return a Malaysian Country Code Prefix.
     *
     * @param bool $formatting true, false
     *
     * @example '+6'
     */
    public static function countryCodePrefix(bool $formatting = true): string
    {
        if ($formatting) {
            return static::randomElement(static::$plusSymbol).static::randomElement(static::$countryCodePrefix);
        } else {
            return static::randomElement(static::$countryCodePrefix);
        }
    }
}
