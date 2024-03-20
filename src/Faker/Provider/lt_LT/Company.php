<?php

namespace Faker\Provider\lt_LT;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{companySuffix}} {{lastNameMale}}',
        '{{companySuffix}} {{lastNameMale}} ir {{lastNameMale}}',
        '{{companySuffix}} "{{lastNameMale}} ir {{lastNameMale}}"',
        '{{companySuffix}} "{{lastNameMale}}"',
    ];

    protected static array $companySuffix = ['UAB', 'AB', 'IĮ', 'MB', 'VŠĮ'];
}
