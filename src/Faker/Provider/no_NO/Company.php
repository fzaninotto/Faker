<?php

namespace Faker\Provider\no_NO;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} og {{lastName}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}',
    ];

    protected static $companySuffix = ['AS', 'DA', 'NUF'];
}
