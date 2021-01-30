<?php

namespace Faker\Provider\pt_BR;

require_once "check_digit.php";

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} e {{lastName}} {{companySuffix}}',
        '{{lastName}} Comercial Ltda.'
    );

    protected static $companySuffix = array('e Filhos', 'e Associados', 'Ltda.', 'S.A.');

    /**
     * A random CNPJ number.
     * @link http://en.wikipedia.org/wiki/CNPJ
     * @param bool $formatted If the number should have dots/slashes/dashes or not.
     * @return string
     */
    public function cnpj($formatted = true)
    {
        $n = $this->generator->numerify('########0001');
        $n .= check_digit_mod11($n);
        $n .= check_digit_mod11($n);

        return $formatted? vsprintf('%d%d.%d%d%d.%d%d%d/%d%d%d%d-%d%d', str_split($n)) : $n;
    }
    
    /**
     * A random IE number.
     * @link https://pt.wikipedia.org/wiki/Inscri%C3%A7%C3%A3o_estadual
     * @param bool $formatted If the number should have dots/slashes/dashes or not.
     * @return string
     */
    public function ie($formatted = true)
    {
        $n = '11004249';
        $n .= check_digit_ie($n);
        $n .= '11';
        $n .= check_digit_ie($n);

        return $formatted? vsprintf('%d%d%d.%d%d%d.%d%d%d.%d%d%d', str_split($n)) : $n;
    }
}
