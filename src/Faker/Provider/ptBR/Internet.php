<?php

namespace Faker\Provider\pt_BR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'uol.com.br', 'terra.com.br', 'ig.com.br', 'r7.com');
    protected static $tld = array('com', 'com', 'com.br', 'com.br', 'net', 'net.br', 'br', 'org');

    /**
     * Convert accent chars to their canonical
     *
     * @link http://stackoverflow.com/questions/1017599/how-do-i-remove-accents-from-characters-in-a-php-string
     * @param string $string
     *
     * @return string
     */
    private static function toAscii($string)
    {
        $a = array(
            'À', 'Á', 'Â', 'Ã', 'Ç', 'ç', 'È', 'É', 'Ê', 'Ì', 'Í', 'Ò', 'Ó', 'Ô', 'Õ', 'Ù', 'Ú', 'Û', 'à', 'á', 'â', 'ã', 'è', 'é', 'ê', 'ì', 'í', 'î', 'ò', 'ó', 'ô', 'õ', 'ù', 'ú', 'û',
        );
        $b = array(
            'A', 'A', 'A', 'A', 'C', 'c', 'E', 'E', 'E', 'I', 'I', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'a', 'a', 'a', 'a', 'e', 'e', 'e', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'u', 'u', 'u',
        );

        return str_replace($a, $b, $string);
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
