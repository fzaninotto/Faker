<?php
declare(strict_types=1);

namespace Faker\Provider\en_HK;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array(
        'gmail.com',
        'yahoo.com',
        'hotmail.com',
        'yahoo.com.hk',
        'hotmail.com.hk',
    );
    protected static $tld = array(
        'com',
        'com',
        'com',
        'com.hk',
        'com.hk',
        'com',
        'biz',
        'info',
        'net',
        'org',
        'com.hk',
        'edu.hk',
        'org.hk',
        'idv.hk',
        '香港',
        '公司.香港',
        '教育.香港',
        '組織.香港',
        '個人.香港',
    );

}
