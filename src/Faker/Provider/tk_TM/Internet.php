<?php

namespace Faker\Provider\tk_TM;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'ok.ru', 'vk.com', 'mail.ru', 'ertir.com');
    protected static $tld = array('com', 'com', 'com', 'tm', 'com.tk', 'com.tm', 'info', 'net', 'org', 'org.tm','edu', 'edu.tm', 'edu.tk');
}
