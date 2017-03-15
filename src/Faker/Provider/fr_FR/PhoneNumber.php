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
        '+33 (0)7 {{phoneNumber07WithSeparator}}',
        '+33 (0)8 ## ## ## ##',
        '+33 (0)9 ## ## ## ##',
        '+33 1 ## ## ## ##',
        '+33 1 ## ## ## ##',
        '+33 2 ## ## ## ##',
        '+33 3 ## ## ## ##',
        '+33 4 ## ## ## ##',
        '+33 5 ## ## ## ##',
        '+33 6 ## ## ## ##',
        '+33 7 {{phoneNumber07WithSeparator}}',
        '+33 8 ## ## ## ##',
        '+33 9 ## ## ## ##',
        '01########',
        '01########',
        '02########',
        '03########',
        '04########',
        '05########',
        '06########',
        '07{{phoneNumber07}}',
        '08########',
        '09########',
        '01 ## ## ## ##',
        '01 ## ## ## ##',
        '02 ## ## ## ##',
        '03 ## ## ## ##',
        '04 ## ## ## ##',
        '05 ## ## ## ##',
        '06 ## ## ## ##',
        '07 {{phoneNumber07WithSeparator}}',
        '08 ## ## ## ##',
        '09 ## ## ## ##',
    );

    // Mobile phone numbers start by 06 and 07
    // 06 is the most common prefix
    protected static $mobileFormats  = array(
        '+33 6 ## ## ## ##',
        '+33 7 {{phoneNumber07WithSeparator}}',
        '06########',
        '07########',
        '06 ## ## ## ##',
        '07 ## ## ## ##',
    );

    public function phoneNumber07()
    {
        $phoneNumber = $this->phoneNumber07WithSeparator();
        $phoneNumber = str_replace(' ', '', $phoneNumber);
        return $phoneNumber;
    }

    /**
     * Only 073 to 079 are acceptable prefixes with 07
     *
     * @see http://www.arcep.fr/index.php?id=8146
     */
    public function phoneNumber07WithSeparator()
    {
        $phoneNumber = $this->generator->numberBetween(3, 9);
        $phoneNumber .= $this->numerify('# ## ## ##');
        return $phoneNumber;
    }

    /**
     * @example '0601020304'
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
