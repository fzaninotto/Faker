<?php

namespace Faker\Provider\de_CH;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('AG', 'GmbH');
}
