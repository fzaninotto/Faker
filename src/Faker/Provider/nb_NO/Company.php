<?php

namespace Faker\Provider\nb_NO;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} og {{lastName}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}'
    );

    protected static $companySuffix = array('AS', 'DA', 'NUF');
}
