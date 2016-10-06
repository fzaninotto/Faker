<?php

namespace Faker\Provider\fr_FR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    // Phone numbers can't start by 00 in France
    // 01 is the most common prefix
    protected static $formats = array(
        '+33 (0)1 ## ## ## ##',
        '+33 (0)1 ## ## ## ##',
        '+33 (0)2 ## ## ## ##',
        '+33 (0)3 ## ## ## ##',
        '+33 (0)4 ## ## ## ##',
        '+33 (0)5 ## ## ## ##',
        '+33 (0)6 ## ## ## ##',
        '+33 (0)7 3# ## ## ##',
        '+33 (0)7 4# ## ## ##',
        '+33 (0)7 5# ## ## ##',
        '+33 (0)7 6# ## ## ##',
        '+33 (0)7 7# ## ## ##',
        '+33 (0)7 8# ## ## ##',
        '+33 (0)7 9# ## ## ##',
        '+33 (0)8 ## ## ## ##',
        '+33 (0)9 ## ## ## ##',
        '+33 1 ## ## ## ##',
        '+33 1 ## ## ## ##',
        '+33 2 ## ## ## ##',
        '+33 3 ## ## ## ##',
        '+33 4 ## ## ## ##',
        '+33 5 ## ## ## ##',
        '+33 6 ## ## ## ##',
        '+33 7 3# ## ## ##',
        '+33 7 4# ## ## ##',
        '+33 7 5# ## ## ##',
        '+33 7 6# ## ## ##',
        '+33 7 7# ## ## ##',
        '+33 7 8# ## ## ##',
        '+33 7 9# ## ## ##',
        '+33 8 ## ## ## ##',
        '+33 9 ## ## ## ##',
        '01########',
        '01########',
        '02########',
        '03########',
        '04########',
        '05########',
        '06########',
        '073#######',
        '074#######',
        '075#######',
        '076#######',
        '077#######',
        '078#######',
        '079#######',
        '08########',
        '09########',
        '01 ## ## ## ##',
        '01 ## ## ## ##',
        '02 ## ## ## ##',
        '03 ## ## ## ##',
        '04 ## ## ## ##',
        '05 ## ## ## ##',
        '06 ## ## ## ##',
        '07 3# ## ## ##',
        '07 4# ## ## ##',
        '07 5# ## ## ##',
        '07 6# ## ## ##',
        '07 7# ## ## ##',
        '07 8# ## ## ##',
        '07 9# ## ## ##',
        '08 ## ## ## ##',
        '09 ## ## ## ##',
    );

    // Mobile phone numbers start by 06 and 073 to 079
    // 06 is the most common prefix
    protected static $mobileFormats  = array(
        '+33 6 ## ## ## ##',
        '+33 7 3# ## ## ##',
        '+33 7 4# ## ## ##',
        '+33 7 5# ## ## ##',
        '+33 7 6# ## ## ##',
        '+33 7 7# ## ## ##',
        '+33 7 8# ## ## ##',
        '+33 7 9# ## ## ##',
        '06########',
        '073#######',
        '074#######',
        '075#######',
        '076#######',
        '077#######',
        '078#######',
        '079#######',
        '06 ## ## ## ##',
        '07 3# ## ## ##',
        '07 4# ## ## ##',
        '07 5# ## ## ##',
        '07 6# ## ## ##',
        '07 7# ## ## ##',
        '07 8# ## ## ##',
        '07 9# ## ## ##',
    );

    /**
     * @example '0601020304'
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
