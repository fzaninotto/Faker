<?php

namespace Faker\Provider\fa_IR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '021#######', 
        '026#######',
        '031#######',
    );
    protected static $mobileNumberPrefixes = array(
        '0910#######', 
        '0911#######',
        '0912#######',
        '0913#######',
        '0914#######',
        '0915#######',
        '0916#######',
        '0917#######',
        '0918#######',
        '0919#######',
        '0901#######',
        '0901#######',
        '0902#######',
        '0903#######',
        '0930#######',
        '0933#######',
        '0935#######',
        '0936#######',
        '0937#######',
        '0938#######',
        '0939#######',
        '0920#######',
        '0921#######',
        '0937#######',
        '0937#######',
    );

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileNumberPrefixes));
    }
}

