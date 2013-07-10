<?php

namespace Faker\Provider\lv_LV;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('mail.lv','apollo.lv','inbox.lv','gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'com', 'net', 'org', 'lv', 'lv', 'lv', 'lv');

    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        $company = $this->generator->format('company');
        $companyElements = explode(' ', $company);
        $company = $companyElements[0];
        $company = preg_replace('/,/u', '', $company);

        return $company;
    }
}
