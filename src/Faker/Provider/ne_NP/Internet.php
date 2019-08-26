<?php

namespace Faker\Provider\ne_NP;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'net', 'org');

    protected static $emailFormats = array(
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{freeEmailDomain}}',
        '{{userName}}@{{domainName}}.np',
    );

    protected static $urlFormats = array(
        'http://www.{{domainName}}.np/',
        'http://{{domainName}}.np/',
        'http://www.{{domainName}}.np/{{slug}}',
        'http://www.{{domainName}}.np/{{slug}}.html',
        'http://{{domainName}}.np/{{slug}}',
        'http://{{domainName}}/{{slug}}.html',
        'http://www.{{domainName}}/',
        'http://{{domainName}}/',
    );
}
