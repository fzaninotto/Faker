<?php

namespace Faker\Provider\lt_lt;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companySuffix}} {{lastNameMale}}',
        '{{companySuffix}} {{lastNameMale}} ir {{lastNameMale}}',
        '{{companySuffix}} "{{lastNameMale}} ir {{lastNameMale}}"',
        '{{companySuffix}} "{{lastNameMale}}"',
    );

    protected static $companySuffix = array('UAB', 'AB', 'IĮ', 'MB', 'VŠĮ');
}
