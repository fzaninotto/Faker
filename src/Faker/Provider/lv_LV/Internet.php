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
        return static::convertToNormal(parent::userName());
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        //$company = preg_replace('/,/u', '', parent::domainWord());

        return static::convertToNormal(parent::domainWord());
    }
}
