<?php

namespace Faker\Provider\et_EE;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        'FIE {{firstName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} "{{lastName}} ja {{lastName}}"',
        '{{companyPrefix}} "{{lastName}} {{companySuffix}}"',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
    );

    protected static $companyPrefix = array('MTÜ', 'TÜ', 'OÜ', 'AS', 'FIE', 'UÜ');
    protected static $companySuffix = array('Talu', 'Kodu', 'Ehitus', 'Keskus', 'Elekter', 'Teenused', 'Tootmine');

    /**
     * @example 'Ltd'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
