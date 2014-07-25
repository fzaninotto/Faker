<?php

namespace Faker\Provider\sk_SK;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'zoznam.sk', 'atlas.sk', 'centrum.sk', 'azet.sk', 'post.sk');
    protected static $tld = array('sk', 'sk', 'sk', 'sk', 'sk', 'sk', 'eu', 'com', 'info', 'net', 'org');
}
