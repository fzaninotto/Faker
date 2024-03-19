<?php

namespace Faker\Provider\lt_LT;

class Internet extends \Faker\Provider\Internet
{
    protected static array $userNameFormats = [
        '{{lastNameMale}}.{{firstNameMale}}',
        '{{lastNameFemale}}.{{firstNameFemale}}',
        '{{firstNameMale}}##',
        '{{firstNameFemale}}##',
        '?{{lastNameFemale}}',
        '?{{lastNameMale}}',
    ];

    protected static array $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com'];
    protected static array $tld = ['com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt', 'lt'];
}
