<?php

namespace Faker\Provider\tr_TR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '050# ### ## ##',
        '053# ### ## ##',
        '054# ### ## ##',
        '055# ### ## ##',
        '50# ### ## ##',
        '53# ### ## ##',
        '54# ### ## ##',
        '55# ### ## ##',
        '0(50#) ### ## ##',
        '0(53#) ### ## ##',
        '0(54#) ### ## ##',
        '0(55#) ### ## ##',
        '+9050########',
        '+9053########',
        '+9054########',
        '+9055########',
        '+90 50# ### ## ##',
        '+90 53# ### ## ##',
        '+90 54# ### ## ##',
        '+90 55# ### ## ###',
        '+90 (50#) ### ## ##',
        '+90 (53#) ### ## ##',
        '+90 (54#) ### ## ##',
        '+90 (55#) ### ## ##'
    );

    /**
     * An array of en_GB mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
      // Local
      '055########',
      '055# ### ## ##',
      '055# ### ## ##',
	  '054########',
      '054# ### ## ##',
      '054# ### ## ##',
	  '053########',
      '053# ### ## ##',
      '053# ### ## ##'
    );

    /**
     * Return a en_GB mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
