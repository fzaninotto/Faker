<?php

namespace Faker\Provider\hy_AM;

/**
 * Based on ../ua_UA/Internet.php
 */
class Internet extends \Faker\Provider\Internet
{
    protected static $tld = array('am', 'am', 'am', 'am', 'com', 'net', 'org');
    protected static $freeEmailDomain = array('gmail.com', 'mail.ru', 'freenet.am', 'hragir.aua.am', 'rambler.ru');

    /**
     * @example 'felo83'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);
        return static::toLower(static::bothify(
                Transliteration::transliterate($this->generator->parse($format))
            )
        );
    }

    /**
     * @example 'smart-dizayn'
     */
    public function domainWord()
    {
        $company = $this->generator->format('companyUrl');
        $company = str_replace(' ', '-', $company);
        $company = Transliteration::transliterate($company);
        return $company;
    }
}
