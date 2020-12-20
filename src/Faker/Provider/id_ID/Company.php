<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{lastName}} {{companySuffix}}',
    ];

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companyPrefix = ['PT', 'CV', 'UD', 'PD', 'Perum'];

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companySuffix = ['(Persero) Tbk', 'Tbk'];

    /**
     * Get company prefix
     *
     * @return string company prefix
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Get company suffix
     *
     * @return string company suffix
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }
}
