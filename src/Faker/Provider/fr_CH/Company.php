<?php

namespace Faker\Provider\fr_CH;

class Company extends \Faker\Provider\fr_FR\Company
{
    protected static array $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    ];

    protected static array $companySuffix = ['AG', 'Sàrl', 'SA', 'GmbH'];
}
