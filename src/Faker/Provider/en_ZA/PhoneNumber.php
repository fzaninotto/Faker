<?php

namespace Faker\Provider\en_ZA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+27(##)##########',
        '+(#)##########',
        '08#########',
        '07########',
        '0##-###-####',
        '(0##)###-####',
        '0-800-###-####',
        '### ####'
    );
}
