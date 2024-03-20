<?php

namespace Faker\Provider\fr_BE;

class Company extends \Faker\Provider\fr_FR\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static array $companySuffix = [
        'ASBL',
        'SCS',
        'SNC',
        'SPRL',
        'Associations',
        'Entreprise individuelle',
        'GEIE',
        'GIE',
        'SA',
        'SCA',
        'SCRI',
        'SCRL',
    ];
}
