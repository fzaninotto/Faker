<?php

namespace Faker\Provider\fi_FI;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+358 (40) ### ####',
        '+358 (50) ### ####',
        '+358 40 ### ####',
        '+358 50 ### ####',
        '040 ### ####',
        '050 ### ####',
        '###-########',
        '### #######',
        '040-#######',
        '050-#######',
        '(###) #######'
    );
}
