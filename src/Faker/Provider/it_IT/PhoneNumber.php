<?php

namespace Faker\Provider\it_IT;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+## ### ## ## ####',
        '+## ## #######',
        '+## ## ########',
        '+## ### #######',
        '+## ### ########',
        '+## #### #######',
        '+## #### ########',
        // According to http://it.wikipedia.org/wiki/Prefisso_telefonico#Elenco_degli_indicativi_in_Italia.2C_a_San_Marino_e_nel_Vaticano
        '0## ### ####',
        '+39 0## ### ###',
        '3## ### ###',
        '+39 3## ### ###'
    );
    protected static $mobileFormats = array('3#########');
    
     /**
     * Return an it_IT mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
