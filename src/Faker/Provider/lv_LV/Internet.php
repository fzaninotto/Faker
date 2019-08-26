<?php

namespace Faker\Provider\lv_LV;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('mail.lv','apollo.lv','inbox.lv','gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'net', 'org', 'lv');
}
