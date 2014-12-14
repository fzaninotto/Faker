<?php

namespace Faker\Provider\en_SG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    // http://en.wikipedia.org/wiki/Telephone_numbers_in_Singapore#Numbering_plan
    protected static $formats = array(
        '+659#######',
        '+65 9#######',
        '9#######',
        '+658#######',
        '+65 8#######',
        '8#######',
        '+657#######',
        '+65 7#######',
        '7#######',
        '+656#######',
        '+65 6#######',
        '6#######',
        '+653#######',
        '+65 3#######',
        '3#######',
    );
}
