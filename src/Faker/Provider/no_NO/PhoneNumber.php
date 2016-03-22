<?php

namespace Faker\Provider\no_NO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @var array Norwegian phone number formats
     */
    protected static $formats = [
        '+47#########',
        '+47 ## ## ## ##',
        '## ## ## ##',
        '## ## ## ##',
        '########',
        '########',
        '9## ## ###',
        '4## ## ###',
        '9#######',
        '4#######',
    ];
}
