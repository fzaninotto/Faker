<?php

namespace Faker\Provider\fr_CI;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    // Phone numbers can't start by 00 in France
    // 01 is the most common prefix
    protected static $formats = array(
        '+225 20 ## ## ##',
        '+225 21 ## ## ##',
        '+225 22 ## ## ##',
        '+225 23 ## ## ##',
        '+225 24 ## ## ##',
        '+225 30 ## ## ##',
        '+225 31 ## ## ##',
        '+225 32 ## ## ##',
        '+225 33 ## ## ##',
        '+225 34 ## ## ##',
        '+225 35 ## ## ##',
        '+225 36 ## ## ##',
        '20######',
        '21######',
        '22######',
        '23######',
        '24######',
        '30######',
        '31######',
        '32######',
        '33######',
        '34######',
        '35######',
        '36######',
        '20 ## ## ##',
        '21 ## ## ##',
        '22 ## ## ##',
        '23 ## ## ##',
        '24 ## ## ##',
        '30 ## ## ##',
        '31 ## ## ##',
        '32 ## ## ##',
        '33 ## ## ##',
        '34 ## ## ##',
        '35 ## ## ##',
        '36 ## ## ##',
    );

    // Mobile phone numbers start by 0 and 07
    // 06 is the most common prefix
    protected static $mobileFormats  = array(
        '+225 0# ## ## ##',
        '+225 4# ## ## ##',
        '+225 5# ## ## ##',
        '+225 6# ## ## ##',
        '+225 7# ## ## ##',
        '+225 8# ## ## ##',
        '0#######',
        '4#######',
        '5#######',
        '6#######',
        '7#######',
        '8#######',
        '0# ## ## ##',
        '4# ## ## ##',
        '5# ## ## ##',
        '6# ## ## ##',
        '7# ## ## ##',
        '8# ## ## ##',
    );

    /**
     * @example '0601020304'
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
