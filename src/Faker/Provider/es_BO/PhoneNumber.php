<?php

namespace Faker\Provider\es_BO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '2 ######',
        '3 ######',
        '4 ######',
        '6#######',
        '7#######'
    );
}
