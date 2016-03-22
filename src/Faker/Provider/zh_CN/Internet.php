<?php

namespace Faker\Provider\zh_CN;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com'];
    protected static $tld = ['com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org'];

    protected static $userNameFormats = [
        '{{word}}.{{word}}',
        '{{word}}_{{word}}',
        '{{word}}##',
        '?{{word}}',
    ];
    protected static $emailFormats = [
        '{{userName}}@{{freeEmailDomain}}',
    ];
}
