<?php

namespace Faker\Provider\pt_PT;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        'Grupo {{lastName}} {{companySuffix}}'
    );

    protected static $companySuffix = array('e Filhos', 'e Associados', 'Lda.', 'S.A.');
}
