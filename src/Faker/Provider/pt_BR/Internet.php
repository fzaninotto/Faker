<?php

namespace Faker\Provider\pt_BR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'uol.com.br', 'terra.com.br', 'ig.com.br', 'r7.com');
    protected static $tld = array('com', 'com', 'com.br', 'com.br', 'net', 'net.br', 'br', 'org');

    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        return static::convertToNormal(parent::userName());
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

        return static::toLower(static::convertToNormal($company));
    }
}
