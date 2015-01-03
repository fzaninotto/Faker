<?php

namespace Faker\Provider\id_ID;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @var array some email domains
     */
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'gmail.co.id', 'yahoo.co.id',
    );

    /**
     * General tld and local tld
     *
     * @link http://idwebhost.com/
     * @link http://domain.id/
     */
    protected static $tld = array(
        'com', 'net', 'org', 'asia', 'tv', 'biz', 'info', 'in', 'name', 'co',
        'ac.id', 'sch.id', 'go.id', 'mil.id', 'co.id', 'or.id', 'web.id',
        'my.id', 'biz.id', 'desa.id',
    );
}
