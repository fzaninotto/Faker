<?php

namespace Faker\Provider\pt_BR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'uol.com.br', 'terra.com.br', 'ig.com.br', 'r7.com');
    protected static $tld = array('com', 'com', 'com.br', 'com.br', 'net', 'net.br', 'br', 'org');

    /**
     * Converts pt-BR characters to their ASCII representation
     *
     * @param  string $string
     * @return string
     */
    private static function toAscii($string)
    {
        return preg_replace('/&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml|caron);/i', '$1',
            htmlentities($string, ENT_QUOTES, 'UTF-8'));
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
