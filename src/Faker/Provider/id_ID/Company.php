<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{lastName}} {{companySuffix}}',
    ];

    /**
     * @see http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static array $companyPrefix = ['PT', 'CV', 'UD', 'PD', 'Perum'];

    /**
     * @see http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static array $companySuffix = ['(Persero) Tbk', 'Tbk'];

    /**
     * Get company prefix.
     *
     * @return string company prefix
     */
    public static function companyPrefix(): string
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Get company suffix.
     *
     * @return string company suffix
     */
    public static function companySuffix(): string
    {
        return static::randomElement(static::$companySuffix);
    }
}
