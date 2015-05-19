<?php

namespace Faker\Provider\ko_KR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '010-####-####',
        '070-####-####',
        '02-####-####',
        '03#-####-####',
        '04#-####-####',
        '05#-####-####',
        '06#-####-####',
        '1588-####',
    );
}
