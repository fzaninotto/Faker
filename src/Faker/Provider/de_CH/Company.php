<?php

namespace Faker\Provider\de_CH;

class Company extends \Faker\Provider\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    protected static array $companySuffix = ['AG', 'GmbH'];
}
