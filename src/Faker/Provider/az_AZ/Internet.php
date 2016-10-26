<?php

namespace Faker\Provider\az_AZ;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('mail.az', 'box.az', '', 'gmail.com', 'hotmail.com');
    protected static $tld = array('com', 'com', 'net', 'org', 'az', 'com.az', 'az', 'az');
}
