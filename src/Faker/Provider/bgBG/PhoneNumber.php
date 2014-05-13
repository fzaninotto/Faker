<?php

namespace Faker\Provider\bgBG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+359(0)#########',
        '+359(0)### ######',
        '+359(0)### ### ###',
        '+359#########',
        '0#########',
        '0### ######',
        '0### ### ###',
        '0### ###-###',
        '(0###) ######',
        '(0###) ### ###',
        '(0###) ###-###',
    );
}
