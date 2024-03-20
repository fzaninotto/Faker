<?php

namespace Faker\Provider\pt_BR;

require_once 'check_digit.php';

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} e {{lastName}} {{companySuffix}}',
        '{{lastName}} Comercial Ltda.',
    ];

    protected static array $companySuffix = ['e Filhos', 'e Associados', 'Ltda.', 'S.A.'];

    /**
     * A random CNPJ number.
     *
     * @see http://en.wikipedia.org/wiki/CNPJ
     *
     * @param bool $formatted If the number should have dots/slashes/dashes or not.
     */
    public function cnpj(bool $formatted = true): string
    {
        $n = $this->generator->numerify('########0001');
        $n .= check_digit($n);
        $n .= check_digit($n);

        return $formatted ? \vsprintf('%d%d.%d%d%d.%d%d%d/%d%d%d%d-%d%d', \str_split($n)) : $n;
    }
}
