<?php

namespace Faker\Provider\el_CY;

class Company extends \Faker\Provider\Company
{
    protected static $companySuffix = array(
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
    );

    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    );
}
