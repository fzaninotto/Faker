<?php

namespace Faker\Provider\el_GR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+30 2# ########',
        '+30 6# ########',
        '+30 2### ######',
        '+30 6### ######',
        '+302#########',
        '+306#########',
        '2#########',
        '6#########',
        '2### ######',
        '6### ######',
    );
}
