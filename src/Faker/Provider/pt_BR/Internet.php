<?php

namespace Faker\Provider\pt_BR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'uol.com.br', 'terra.com.br', 'ig.com.br', 'r7.com');
    protected static $tld = array('com', 'com', 'com.br', 'com.br', 'net', 'net.br', 'br', 'org');

	protected static $accentedChars = 'ÀÁÂÃÇçÈÉÊÌÍÒÓÔÕÙÚÛàáâãèéêìíîòóôõùúû';
	protected static $normalChars   = 'AAAACcEEEIIOOOOUUUaaaaeeeiiioooouuu';

    /**
     * Convert accent chars to their canonical
     *
     * @link http://stackoverflow.com/questions/1017599/how-do-i-remove-accents-from-characters-in-a-php-string
     * @param string $string
     *
     * @return string
     */
    protected static function toAscii($string)
    {
        return strtr($string, static::$accentedChars, static::$normalChars);
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
        $company = static::toAscii($company);
        $companyElements = explode(' ', $company);
        $company = $companyElements[0];
        $company = preg_replace('/\W/u', '', $company);
        $company = static::toLower($company);

        return $company;
    }
}
