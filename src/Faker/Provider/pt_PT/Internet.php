<?php

namespace Faker\Provider\pt_PT;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'sapo.pt', 'telepac.pt', 'optimus.pt', 'aeiou.pt','zmail.pt');
    protected static $tld = array('com', 'com', 'com.pt', 'nome.pt', 'net', 'pt', 'org');

    /**
     * Converts pt-PT characters to their ASCII representation
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
