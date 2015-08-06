<?php

namespace Faker\Provider\fa_IR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        // Mobile
        '091########',
        '092########',
        '093########',
        '+9891########',
        '+9892########',
        '+9893########',
        '091# ### ####',
        '092# ### ####',
        '093# ### ####',
        
        // Land lines
        '########',
        '0##-########',
        '(0##)########',
        '+98##########',
        '0098##########',

        //International
        '00##-##########',
    );
}
