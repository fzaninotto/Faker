<?php

namespace Faker\Provider\de_CH;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '076 #######',
        '077 #######',
        '078 #######',
        '0774 #######',
        '0779 #######',
        '+49 #### ####',
        '+49 #### ####-##',
    );
}
