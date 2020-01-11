<?php

namespace Faker\Provider\uk_UA;

class Internet extends \Faker\Provider\Internet
{
    protected static $tld = array('ua', 'com.ua', 'org.ua', 'net.ua', 'com', 'net', 'org');
    protected static $freeEmailDomain = array('gmail.com', 'meta.ua', 'ukr.net', 'i.ua', 'ukrpost.ua', 'ukrpost.net');
}
