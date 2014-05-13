<?php

namespace Faker\Provider\skSK;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+421 ### ### ###',
        '00421 ### ### ###',
        '#### ### ###',
        '00421#########',
        '+421#########',
        '########',
    );
}
