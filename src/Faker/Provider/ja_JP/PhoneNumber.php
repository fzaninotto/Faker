<?php

namespace Faker\Provider\ja_JP;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '080-####-####',
        '090-####-####',
        '##-####-####',
    ];
}
