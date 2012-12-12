<?php

namespace Faker\Provider\ua_UA;

class Internet extends \Faker\Provider\Internet
{
    protected static $tld = array('ua', 'com.ua', 'org.ua', 'net.ua', 'com', 'net', 'org');
    protected static $freeEmailDomain = array('gmail.com', 'mail.ru', 'ukr.net', 'i.ua', 'rambler.ru');

    /**
     * @example 'roman93'
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
