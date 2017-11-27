<?php

namespace Faker\Provider\es_CO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        /* Estandard landline telephone number formats */
        '#######',
        '### ####',
        '### ## ##',
        /* Landline telephone numbers with national indicative */
        '+57 #######',
        '+57 ### ####',
        '+57 ### ## ##',
        /* Landline telephone numbers with regional indicatives */
        '+57-# #######',
        '+57-# ### ####',
        '+57-# ### ## ##',
        '+57-# ### ## ##',
        /* Estandard cellphone number formats */
        '3#########',
        '3## #######',
        '3## ### ####',
        '3##-#######',
        '3##-###-####',
        /* Cellphone numbers with national indicative */
        '+57 3#########',
        '+57 3## #######',
        '+57 3## ### ####',
        '+57 3##-#######',
        '+57 3##-###-####',
    );
}
