<?php

namespace Faker\Provider\es_CL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+56 9## ### ###',
        '+56 9########',
        '9## ### ###',
        '9########',
        '+56 #### ####',
        '+56 ########',
        '#### ####',
        '########',
    );
}
