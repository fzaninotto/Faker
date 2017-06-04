<?php

namespace Faker\Provider\fa_IR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://fa.wikipedia.org/wiki/%D8%B4%D9%85%D8%A7%D8%B1%D9%87%E2%80%8C%D9%87%D8%A7%DB%8C_%D8%AA%D9%84%D9%81%D9%86_%D8%AF%D8%B1_%D8%A7%DB%8C%D8%B1%D8%A7%D9%86#.D8.AA.D9.84.D9.81.D9.86.E2.80.8C.D9.87.D8.A7.DB.8C_.D9.87.D9.85.D8.B1.D8.A7.D9.87
     */
    protected static $formats = array(
        '011########',
        '021########',
        '025########',
        '026########',
        '028########',
        '031########',
        '031########',
        '041########',
        '044########',
        '045########',
        '051########',

    );
    protected static $mobileNumberPrefixes = array(
        '0901#######',
        '0902#######',
        '0903#######',
        '0910#######',//mci
        '0911#######',
        '0912#######',
        '0913#######',
        '0914#######',
        '0915#######',
        '0916#######',
        '0917#######',
        '0918#######',
        '0919#######',
        '0920#######',
        '0921#######',
        '0922#######',
        '0930#######',
        '0931#######',
        '0933#######',
        '0934#######',
        '0935#######',
        '0936#######',
        '0937#######',
        '0938#######',
        '0939#######',
    );
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileNumberPrefixes));
    }
}
