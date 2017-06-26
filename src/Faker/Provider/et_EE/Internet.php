<?php

namespace Faker\Provider\et_EE;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = array(
        '{{lastName}}.{{firstNameMale}}',
        '{{lastName}}.{{firstNameFemale}}',
        '{{firstNameMale}}##',
        '{{firstNameFemale}}##',
        '?{{lastName}}',
    );

    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'com', 'net', 'org', 'eu', 'eu', 'eu', 'ee', 'ee', 'ee', 'ee', 'ee', 'ee', 'ee');
}
