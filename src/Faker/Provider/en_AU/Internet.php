<?php

namespace Faker\Provider\en_AU;

class Internet extends \Faker\Provider\Internet
{
    protected static array $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com', 'gmail.com.au', 'yahoo.com.au', 'hotmail.com.au'];
    protected static array $tld = ['com', 'com.au', 'org', 'org.au', 'net', 'net.au', 'biz', 'info', 'edu', 'edu.au'];
}
