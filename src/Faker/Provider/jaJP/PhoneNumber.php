<?php

namespace Faker\Provider\jaJP;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '080-####-####',
        '090-####-####',
        '##-####-####'
    );
}
