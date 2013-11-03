<?php

namespace Faker\Provider\uk_UA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(

        // International format (mobile)
        '+38050#######',
        '+38096#######',
        '+38067#######',
        '+38093#######',
        '+38063#######',
        '+38099#######',

        // Internal country format (mobile)
        '050#######',
        '096#######',
        '067#######',
        '093#######',
        '063#######',
        '099#######',

        // More generic formats
        '+380#######',
        '+38(0##)#######',
        '+38(0###)######'
    );
}
