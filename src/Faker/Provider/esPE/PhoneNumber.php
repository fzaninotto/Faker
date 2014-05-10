<?php

namespace Faker\Provider\es_PE;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+51 9## ### ###',
        '+51 9########',
        '9## ### ###',
        '9########',
        '+51 1## ####',
        '+51 1######',
        '1## ####',
        '1######',
    );
}
