<?php

namespace Faker\Provider\hu_HU;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('Kft', 'és Tsa', 'Kht', 'ZRT', 'NyRT', 'BT');
}
