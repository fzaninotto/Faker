<?php

namespace Faker\Provider\en_HK;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', 'yahoo.com.hk', 'hotmail.com.hk'
    );
    protected static $tld = array(
        'com', 'com.hk', 'biz', 'info', 'net', 'org', 'edu.hk', 'org.hk', 'idv.hk'
    );
}
