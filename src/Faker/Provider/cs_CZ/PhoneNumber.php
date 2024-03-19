<?php

namespace Faker\Provider\cs_CZ;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = [
        '+420 %## ### ###',
        '%## ### ###',
        '00420%########',
        '+420%########',
        '%########',
    ];
}
