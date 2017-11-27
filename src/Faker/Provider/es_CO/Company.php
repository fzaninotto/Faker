<?php

namespace Faker\Provider\es_CO;

class Company extends \Faker\Provider\Company {

    protected static $formats = array(
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}} de {{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} y {{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}}',
        '{{lastName}} y {{lastName}}',
        '{{lastName}} de {{lastName}}'
    );
    protected static $companyPrefix = array(
        'Asociación', 'Centro', 'Corporación', 'Cooperativa', 'Empresa', 'Gestora', 'Global', 'Grupo', 'Viajes',
        'Inversiones', 'Lic.', 'Dr.', 'Dra.', 'Contratistas', 'Ing.', ''
    );
    protected static $companySuffix = array('y Hermanos', 'e Hijos', 'y Asociados', 'S.A.', 'S.A.S.', 'Ltda.', '& Cia.', 'S. en C', 'S.C.A.', 'Corp.');

    /**
     * @example 'Grupo'
     */
    public static function companyPrefix() {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Generate random Taxpayer Identification Number (NIT in Colombia). Ex 900515123-4
     * @param string $separator The separator format to be used, the most commonly used 
     *      are hyphen '-', whitespace ' ' and nothing ''
     * @return string The NIT number in string format
     * 
     */
    public function taxPayerIdentificationNumber($separator = '-', $addVerificationNumber = true) {
        $verificationNumber = $addVerificationNumber ? ($separator . static::numerify('#')) : '';
        return static::numerify('#########') . $verificationNumber;
    }

}
