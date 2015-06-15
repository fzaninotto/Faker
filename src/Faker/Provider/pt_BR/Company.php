<?php

namespace Faker\Provider\pt_BR;

require_once "check_digit.php";

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} de {{lastName}}',
        '{{lastName}}, {{lastName}} e {{lastName}}'
    );

    protected static $companySuffix = array('e Filho', 'e Filha', 'e Filhos', 'e Associados', 'e Flia.', 'SRL', 'SA', 'S. de H.');

    /**
     * A random CNPJ number.
     * @link http://en.wikipedia.org/wiki/CNPJ
     * @param bool $formatted If the number should have dots/slashes/dashes or not.
     * @return string
     */
    public function cnpj($formatted = true)
    {
        $n = $this->generator->numerify('########0001');
        $n .= check_digit($n);
        $n .= check_digit($n);

        return $formatted? vsprintf('%d%d.%d%d%d.%d%d%d/%d%d%d%d-%d%d', str_split($n)) : $n;
    }
}
