<?php

namespace Faker\Provider\fi_FI;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+### (##) ### ####',
        '+### ## ### ####',
        '### ### ####',
        '###-########',
        '### #######',
        '040-#######',
        '050-#######',
        '(###) #######'
	);
}
