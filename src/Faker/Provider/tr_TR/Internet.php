<?php

namespace Faker\Provider\tr_TR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'yahoo.com', 'mynet.com', 'ttmail.com', 'turk.net');
    protected static $tld = array('com', 'com', 'com', 'com', 'com.tr', 'com.tr', 'info', 'net', 'org', 'org.tr','edu', 'edu.tr', 'edu.tr');

    /**
     * Converts Turkish characters to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {

        $from = array('ı', 'İ', 'ç', 'Ç', 'ğ', 'Ğ', 'ş', 'Ş', 'ü', 'Ü', 'ö', 'Ö');
        $to   = array('i', 'I', 'c', 'C', 'g', 'G', 's', 'S', 'u', 'U', 'o', 'O');

        return str_replace($from, $to, $string);
    }

    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::toLower(static::toAscii(static::bothify($this->generator->parse($format))));
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        $company = $this->generator->format('company');
        $companyElements = explode(' ', $company);
        $company = $companyElements[0];
        $company = preg_replace('/\W/u', '', $company);

        return static::toLower(static::toAscii($company));
    }
}
