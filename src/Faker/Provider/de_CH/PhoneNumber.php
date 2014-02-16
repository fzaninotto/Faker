<?php

namespace Faker\Provider\de_CH;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+41(0)#########',
        '+41(0)#### #####',
        '+41 (0) ## ### ## ##',
        '+41(0) #########',
        '0#########',
        '0## ### ## ##',
        '0## #######',
        '(0##) #######'
    );
}
