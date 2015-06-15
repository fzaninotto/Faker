<?php

namespace Faker\Provider\pl_PL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+48 ## ### ## ##',
        '0048 ## ### ## ##',
        '### ### ###',
        '+48 ### ### ###',
        '0048 ### ### ###',
        '#########',
        '(##) ### ## ##',
        '+48(##)#######',
        '0048(##)#######',
    );
}
