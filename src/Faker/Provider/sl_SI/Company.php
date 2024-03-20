<?php

namespace Faker\Provider\sl_SI;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{firstName}} {{lastName}} s.p.',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} in {{lastName}} {{companySuffix}}',
    ];

    protected static array $companySuffix = ['d.o.o.', 'd.d.', 'k.d.', 'k.d.d.', 'd.n.o.', 'so.p.'];
}
