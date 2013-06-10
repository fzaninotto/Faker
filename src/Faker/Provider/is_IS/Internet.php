<?php

namespace Faker\Provider\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class Internet extends \Faker\Provider\Internet
{
    /**
     * @var array Some email domains in Denmark.
     */
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', 'visir.is', 'simnet.is', 'internet.is'
    );

    /**
     * @var array Some TLD.
     */
    protected static $tld = array(
        'com', 'com', 'com', 'net', 'is', 'is', 'is',
    );

    /**
     * Converts Icelandic characters to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('Á','á','É','é','Ú','ú','Ý','ý','Ó','ó','Þ','þ','Ð','ð','Æ','æ','Ö','ö');
        $to   = array('A','a','E','e','U','u','Y','y','O','o','Th','th','D','d','Ae','ae','O','o');

        return str_replace($from, $to, $string);
    }

    /**
     * @example 'jeppe'
     * @return string
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::toLower(static::toAscii(static::bothify($this->generator->parse($format))));
    }

    /**
     * @example 'jensen.is'
     * @return string
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
