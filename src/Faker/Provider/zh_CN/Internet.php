<?php

namespace Faker\Provider\zh_CN;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', '126.com', '163.com', 'qq.com', 'sohu.com', 'sina.com'
    );
    protected static $tld = array(
        'com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'cn',
        'com.cn', 'edu.cn', 'net.cn', 'biz.cn', 'gov.cn', 'org.cn'
    );

    protected static $userNameFormats = array(
        '{{word}}.{{word}}',
        '{{word}}_{{word}}',
        '{{word}}##',
        '?{{word}}',
    );
    protected static $emailFormats = array(
        '{{userName}}@{{freeEmailDomain}}',
    );
}
