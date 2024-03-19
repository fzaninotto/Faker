<?php

namespace Faker\Provider\de_AT;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static array $companySuffix = ['AG', 'EWIV', 'Ges.m.b.H.', 'GmbH', 'KEG', 'KG', 'OEG', 'OG', 'OHG', 'SE'];
}
