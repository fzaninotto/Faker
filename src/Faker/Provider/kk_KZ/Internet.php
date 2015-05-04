<?php

namespace Faker\Provider\kz_KZ;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('mail.kz', 'yandex.kz', 'host.kz');
    protected static $tld = array('com', 'com', 'net', 'org', 'kz', 'kz', 'kz', 'kz');
}
