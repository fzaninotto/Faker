<?php

namespace Faker\Provider\ko_KR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '010-####-####',
        '011-####-####',
        '012-####-####',
    );
}
