<?php

namespace Faker\Provider\plPL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+## ### ### ####',
        '### ### ###',
        '#########',
        '(##) ### ## ##',
        '+##(##)#######',
    );
}
