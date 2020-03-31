<?php

namespace Faker\Provider\fr_CD;

class Company extends \Faker\Provider\fr_FR\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('SNC', 'SARL', 'SA', 'SCS', 'SEP', 'SPAS');
}
