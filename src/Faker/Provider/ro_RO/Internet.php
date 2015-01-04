<?php

namespace Faker\Provider\ro_RO;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.ro', 'mail.com', 'hotmail.com');
    protected static $tld = array('ro', 'org', 'com', 'net', 'info');

    /**
* Converts Romanian characters to their ASCII representation
*
* @return string
*/
    private static function toAscii($string)
    {
        $from = array('ă', 'Ă', 'î', 'Î', 'â', 'Â', 'ţ', 'Ţ', 'ş', 'Ş');
        $to = array('a', 'A', 'i', 'I', 'a', 'A', 't', 'Ţ', 's', 'S');

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
