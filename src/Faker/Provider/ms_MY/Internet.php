<?php

namespace Faker\Provider\ms_MY;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array(
        'gmail.com', 'gmail.com.my',
        'yahoo.com', 'yahoo.com.my',
        'hotmail.com', 'hotmail.com.my',
    );
    protected static $tld = array('my', 'my', 'my', 'my', 'com', 'biz', 'net', 'org');
}
