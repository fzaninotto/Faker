<?php

namespace Faker\Provider\nb_NO;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstName}} {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}}',
        '{{lastName}} og {{lastName}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}'
    );

    /**
     * Common suffixes
     * @link https://www.brreg.no/bedrift/organisasjonsformer/
     */
    protected static $companySuffix = array('ANS', 'AS', 'ASA', 'BA', 'DA', 'ENK', 'GFS', 'KTRF', 'NUF', 'PK', 'SA', 'SPA', 'STI', 'VIFE');
}
