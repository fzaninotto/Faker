<?php

namespace Faker\Provider\de_AT;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('aon.at', 'chello.at', 'gmail.com', 'gmx.at', 'univie.ac.at');
    protected static $tld = array('at', 'co.at', 'com', 'net', 'org');

    /**
     * Converts German characters (Umlaute) to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('ä', 'Ä', 'ü', 'Ü', 'ö', 'Ö', 'ß');
        $to   = array('a', 'A', 'u', 'U', 'o', 'O', 'ss');

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
