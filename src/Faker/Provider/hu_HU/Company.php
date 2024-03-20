<?php

namespace Faker\Provider\hu_HU;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static array $companySuffix = ['Kft', 'és Tsa', 'Kht', 'ZRT', 'NyRT', 'BT'];
}
