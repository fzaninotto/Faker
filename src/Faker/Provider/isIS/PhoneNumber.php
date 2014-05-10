<?php

namespace Faker\Provider\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @var array Icelandic phonenumber formats.
     */
    protected static $formats = array(
        '+354 ### ####',
        '+354 #######',
        '+354#######',
        '### ####',
        '#######',
    );
}
