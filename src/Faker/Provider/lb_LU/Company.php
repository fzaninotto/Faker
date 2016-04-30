<?php

namespace Faker\Provider\lb_LU;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        'Fondation {{lastName}}',
        '{{lastName}}',
    );

    // Source: http://www.guichet.public.lu/entreprises/en/creation-developpement/forme-juridique/index.html
    protected static $companySuffix = array('s.à r.l.', 's.à r.l.', 's.à r.l.', 'SA', 'SA', 'SC', 'SE', 'Société Civile', 'SECA', 'SCA');
}
