<?php

namespace Faker\Provider\sv_SE;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} och {{lastName}}',
        '{{lastName}} och {{lastName}} {{companySuffix}}',
    ];

    protected static $companySuffix = ['AB', 'HB'];
}
