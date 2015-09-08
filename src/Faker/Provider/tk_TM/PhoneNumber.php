<?php

namespace Faker\Provider\tk_TM;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '6#######',
        '6# ## ## ##',
        '(6#) ## ## ##',
        '+9936#######',
        '+993 6# ## ## ##',
        '+993 (6#) ## ## ##'
    );
}
