<?php

namespace Faker\Provider\es_ES;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}}-{{lastName}}',
        '{{lastName}}-{{lastName}} {{companySuffix}}',
        '{{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}} de {{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}'
    );


    protected static $companyPrefix = array('Asociación', 'Centro', 'Corporación', 'Empresa', 'Gestora', 'Global', 'Grupo', 'Viajes', 'Air');
    protected static $companySuffix = array('e Hijo', 'e Hija', 'e Hijos', 'y Asoc.', 'y Flia.', 'SRL', 'SA', 'S. de H.');

    /**
     * @example 'Grupo'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

}
