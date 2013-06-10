<?php

namespace Faker\Provider\tr_TR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '0##########',
        '05#########'
    );
}
