<?php

namespace Faker\Provider\nl_NL;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('VOF', 'CV', 'LLP', 'BV', 'NV', 'IBC', 'CSL', 'EESV', 'SE', 'CV', 'Stichting', '& Zonen', '& Zn');
}
