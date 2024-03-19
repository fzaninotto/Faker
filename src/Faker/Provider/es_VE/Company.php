<?php

namespace Faker\Provider\es_VE;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} y {{lastName}}',
        '{{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}} de {{lastName}} {{companySuffix}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}',
    ];

    protected static array $companyPrefix = [
        'Asociación',
        'Centro',
        'Corporación',
        'Cooperativa',
        'Empresa',
        'Gestora',
        'Global',
        'Grupo',
        'Viajes',
        'Inversiones',
        'Lic.',
        'Dr.',
    ];
    protected static array $companySuffix = ['S.R.L.', 'C.A.', 'S.A.', 'R.L.', 'etc'];

    /**
     * @example 'Grupo'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Generate random Taxpayer Identification Number (RIF in Venezuela). Ex J-123456789-1.
     */
    public function taxpayerIdentificationNumber(string $separator = ''): string
    {
        return static::randomElement(['J', 'G', 'V', 'E', 'P', 'C']).$separator.static::numerify('########').$separator.static::numerify('#');
    }
}
