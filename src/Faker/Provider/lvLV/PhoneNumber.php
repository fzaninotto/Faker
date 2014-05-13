<?php

namespace Faker\Provider\lvLV;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '##-###-###',
        '##-######',
        '########',
        '+371 #######',
    );
}
