<?php

namespace Faker\Provider\bg_BG;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'mail.bg', 'abv.bg', 'dir.bg');
    protected static $tld = array('bg', 'bg', 'bg', 'bg', 'bg', 'bg', 'com', 'biz', 'info', 'net', 'org');

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
        $company = preg_replace('/\W/u', '', $company);

        return $company;
    }
}
