<?php

namespace Faker\Provider\nl_BE;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'yahoo.com', 'advalvas.be');
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'be', 'be', 'be');

    /**
     * Converts French characters to their ASCII representation
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $from = array('à', 'À', 'ç', 'Ç', 'é', 'É', 'è', 'È', 'ë', 'Ë', 'ï', 'Ï', 'î', 'Î', 'ô', 'Ô', 'ù', 'Ù');
        $to   = array('a', 'A', 'c', 'c', 'e', 'E', 'e', 'E', 'e', 'E', 'i', 'I', 'i', 'I', 'o', 'O', 'u', 'U');

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
