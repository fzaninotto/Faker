<?php

namespace Faker\Provider\de_CH;

class Company extends \Faker\Provider\de_DE\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('AG', 'GmbH');
}
