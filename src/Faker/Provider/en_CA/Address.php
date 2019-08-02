<?php

namespace Faker\Provider\en_CA;

/**
 * Extend US class since most fields share the same format
 */

class Address extends \Faker\Provider\en_US\Address
{
    protected static $postcode = array('?#? #?#', '?#?-#?#', '?#?#?#');

    protected static $validpostcode = array('?#? #?#');

    protected static $postcodeFirstLetters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','X','Y');

    protected static $postcodeLetters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','W','X','Y','Z');

    protected static $province = array(
        'Alberta', 'British Columbia', 'Manitoba', 'New Brunswick', 'Newfoundland and Labrador', 'Northwest Territories', 'Nova Scotia', 'Nunavut', 'Ontario', 'Prince Edward Island', 'Quebec', 'Saskatchewan', 'Yukon Territory',
    );

    protected static $provinceAbbr = array(
        'AB', 'BC', 'MB', 'NB', 'NL', 'NT', 'NS', 'NU', 'ON', 'PE', 'QC', 'SK', 'YT'
    );

    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}, {{provinceAbbr}}  {{postcode}}",
    );

    /**
     * @example 'Ontario'
     */
    public static function province()
    {
        return static::randomElement(static::$province);
    }

    /**
     * @example 'ON'
     */
    public static function provinceAbbr()
    {
        return static::randomElement(static::$provinceAbbr);
    }

    /**
     * Returns a postalcode-safe first letter
     * @example A1B 2C3
     */
    public static function randomPostcodeFirstLetter()
    {
        return static::randomElement(static::$postcodeFirstLetters);
    }

    /**
     * Returns a postalcode-safe letter
     * @example A1B 2C3
     */
    public static function randomPostcodeLetter()
    {
        return static::randomElement(static::$postcodeLetters);
    }

    /**
     * @example A1B 2C3
     * @example A1B-2C3
     * @example A1B2C3
     */
    public static function postcode()
    {
        $string = static::randomElement(static::$postcode);

        $string = preg_replace_callback('/\#/u', 'static::randomDigit', $string);
        $string = preg_replace_callback('/\?/u', 'static::randomPostcodeLetter', $string);

        return static::toUpper($string);
    }

    /**
     * Return a postal code that respects the Canadian Post standards
     * @example A1B 2C3
     */
    public static function validpostcode()
    {
        $string = static::randomElement(static::$validpostcode);

        $string = preg_replace_callback('/\#/u', 'static::randomDigit', $string);
        $string = preg_replace_callback('/\?/u', 'static::randomPostcodeLetter', $string);
        $string = preg_replace_callback('/^./', 'static::randomPostcodeFirstLetter', $string);

        return static::toUpper($string);
    }

}
