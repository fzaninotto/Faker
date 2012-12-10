<?php

namespace Faker\Provider;

class Miscellaneous extends \Faker\Provider\Base
{
    protected static $languageCode = array('cn', 'de', 'en', 'es', 'fr', 'it', 'pt', 'ru');

    protected static $countryCode = array('CA', 'CN', 'DE', 'ES', 'FR', 'IE', 'IN', 'IT', 'MX', 'PT', 'RU', 'UK', 'US');
    /**
     * Return a boolean, true or false
     *
     * @param integer $chanceOfGettingTrue Between 0 (always get false) and 100 (always get true).
     * @example true
     */
    public static function boolean($chanceOfGettingTrue = 50)
    {
        return mt_rand(1, 100) <= $chanceOfGettingTrue ? true: false;
    }

    /**
     * @example 'cfcd208495d565ef66e7dff9f98764da'
     */
    public static function md5()
    {
        return md5(mt_rand());
    }

    /**
     * @example 'b5d86317c2a144cd04d0d7c03b2b02666fafadf2'
     */
    public static function sha1()
    {
        return sha1(mt_rand());
    }

    /**
     * @example '85086017559ccc40638fcde2fecaf295e0de7ca51b7517b6aebeaaf75b4d4654'
     */
    public static function sha256()
    {
        return hash('sha256', mt_rand());
    }

    /**
     * @example 'fr_FR'
     */
    public function locale()
    {
        return $this->languageCode() . '_' . $this->countryCode();
    }

    /**
     * @example 'FR'
     */
    public static function countryCode()
    {
        return static::randomElement(static::$countryCode);
    }

    /**
     * @example 'fr'
     */
    public static function languageCode()
    {
        return static::randomElement(static::$languageCode);
    }
}
