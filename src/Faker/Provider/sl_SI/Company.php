<?php

namespace Faker\Provider\sl_SI;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{firstName}} {{lastName}} s.p.',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} in {{lastName}} {{companySuffix}}',
    );

    protected static $companySuffix = array('d.o.o.', 'd.d.', 'k.d.', 'k.d.d.','d.n.o.','so.p.');
}
