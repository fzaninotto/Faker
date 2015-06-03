<?php

namespace Faker\Provider\ko_KR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com', 'gmail.co.kr', 'hotmail.co.kr');
    protected static $tld = array('com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'co.kr', 'kr');
}
