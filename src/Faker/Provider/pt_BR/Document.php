<?php

namespace Faker\Provider\pt_BR;

use \Sinergia\Brasil\CPF;
use \Sinergia\Brasil\CNPJ;

class Document extends \Faker\Provider\Base
{
    protected static $rgFormats = array('##.###.###.#');

    public static function cpf($numbers_only = true)
    {
        $cpf = CPF::gerar();
        return $numbers_only? CPF::digitos($cpf): $cpf;
    }

    public static function cnpj($numbers_only = true)
    {
        $cnpj = CNPJ::gerar();
        return $numbers_only? CNPJ::digitos($cnpj): $cnpj;
    }

    public static function rg($numbers_only = true)
    {
        $rg = static::numerify(static::randomElement(static::$rgFormats));
        return $numbers_only? preg_replace('/[\D]+/','', $rg): $rg;
    }
}
