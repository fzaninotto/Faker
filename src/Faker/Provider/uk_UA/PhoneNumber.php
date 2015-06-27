<?php

namespace Faker\Provider\uk_UA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(

        // International format (mobile)
        '+38050#######',
        '+38063#######',
        '+38066#######',
        '+38067#######',
        '+38068#######',
        '+38073#######',
        '+3809########',

        // Internal country format (mobile)
        '050#######',
        '063#######',
        '066#######',
        '067#######',
        '068#######',
        '073#######',
        '09########',

        // More generic formats. International prefix of Ukraine is +380, not +38
        '+380(##)#######',
        '+380(###)######',

        // Sometimes braces not used
        '+380 ## #######',
        '+380 ### ######'
    );
}
