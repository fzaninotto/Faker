<?php

namespace Faker\Provider\uk_UA;

class Internet extends \Faker\Provider\Internet
{
    protected static $tld = array('ua', 'com.ua', 'org.ua', 'net.ua', 'com', 'net', 'org', 'in.ua');
    protected static $freeEmailDomain = array('gmail.com', 'ukr.net', 'i.ua', 'meta.ua');
}
