<?php

namespace Faker\Provider\en_UG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+256 7## ### ###',
        '+2567########',
        '+256 4## ### ###',
        '+2564########',
        '07## ### ###',
        '07########',
        '04## ### ###',
        '04########'
    );
}
