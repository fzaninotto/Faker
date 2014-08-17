<?php

namespace Faker\Provider\id_ID;

class Internet extends \Faker\Provider\Internet
{    
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com'            
    );

    /**
     * @link http://idwebhost.com/
     * @link http://domain.id/
     */ 
    protected static $tld = array(
        'com', 'net', 'org', 'asia', 'tv', 'biz', 'info', 'in', 'name', 'co',
        'ac.id', 'sch.id', 'go.id', 'mil.id', 'co.id', 'or.id', 'web.id',
        'my.id', 'biz.id', 'desa.id'
    );
}