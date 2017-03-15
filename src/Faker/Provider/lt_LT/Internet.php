<?php

namespace Faker\Provider\lt_LT;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastNameMale}}.{{firstNameMale}}',
        '{{lastNameFemale}}.{{firstNameFemale}}',
        '{{firstNameMale}}##',
        '{{firstNameFemale}}##',
        '?{{lastNameFemale}}',
        '?{{lastNameMale}}',
    );

    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt', 'lt');
}
