<?php


namespace Faker\Provider\ar_EG;

/**
 * Provide some of the default emails naming that is popular in Egypt.
 *
 * Class Internet
 * @package Faker\Provider\ar_EG
 */
class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );

    protected static $tld = array(
        'com', 'biz', 'net', 'org', 'eg', 'info',
    );

    protected static $firstNameAscii = array(
        'ahmad', 'abdullah', 'khaled', 'muhammed', 'ibrahim', 'alaa', 'mazen', 'menna', 'aml',
    );

    protected static $lastNameAscii = array(
        'raafat', 'hassan', 'adel', 'salama', 'hanfy', 'hamed', 'kamal', 'hossam', 'abdoal',
    );

    /**
     * @return mixed
     */
    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * @return mixed
     */
    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    /**
     * @example khaled.adel
     * @return mixed|string
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example welove.eg
     * @return string
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii).'.'.$this->tld();
    }
}
