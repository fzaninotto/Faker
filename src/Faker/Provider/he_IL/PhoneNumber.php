<?php

namespace Faker\Provider\he_IL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '05#-#######',
        '0#-#######',
        '972-5#-#######',
        '972-#-########',
        '0#########'
    );
}
