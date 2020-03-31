<?php

namespace Faker\Provider\fr_CD;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'yahoo.com', 'googlemail.com');
    protected static $tld = array('com', 'com', 'com', 'biz', 'info', 'net', 'org', 'cd', 'cd', 'cd');
}
