<?php

namespace Faker\Provider\tr_TR;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'yahoo.com', 'yandex.com.tr', 'mynet.com', 'turk.net', 'ttnet.com.tr', 'windowslive.com');
    protected static $tld = array('com', 'com.tr', 'net', 'com', 'com.tr', 'com', 'biz', 'biz.tr', 'info', 'info.tr', 'net', 'net.tr', 'org', 'co.uk', 'org.tr');
}
