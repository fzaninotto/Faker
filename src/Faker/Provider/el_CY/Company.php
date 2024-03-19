<?php

namespace Faker\Provider\el_CY;

class Company extends \Faker\Provider\Company
{
    protected static array $companySuffix = [
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
    ];

    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    ];
}
