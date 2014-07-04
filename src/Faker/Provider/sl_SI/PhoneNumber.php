<?php

namespace Faker\Provider\sl_SI;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+386 ## ### ###',
        '00386 ## ### ###',
        '0## ### ###',
        '00386########',
        '+386########',
        '0########',
        '+386 # ### ####',
        '00386 # ### ####',
        '0# ### ####'
    );
}
