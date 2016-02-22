<?php

namespace Faker\Provider\lt_LT;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{firstNameMale}}.{{lastNameMale}}',
        '{{lastNameMale}}.{{firstNameMale}}',
        '{{firstNameFemale}}.{{lastNameFemale}}',
        '{{lastNameFemale}}.{{firstNameFemale}}',
        '{{firstName}}##',
        '?{{lastName}}',
    );
    
    protected static $freeEmailDomain = array('one.lt','super.lt','blog.lt','gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt');
}
