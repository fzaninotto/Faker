<?php

namespace Faker\Provider\fr_CH;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+44 (0)## ### ## ##',
        '+44(0)#########',
        '+44 ## ### ## ##',
        '0#########',
        '0## ### ## ##',
    );
}
