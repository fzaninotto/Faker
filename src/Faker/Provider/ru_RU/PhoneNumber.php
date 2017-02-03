<?php

namespace Faker\Provider\ru_RU;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '(812) ###-##-##',
        '(495) ###-####',
        '+7 (9##) ###-####',
        '8-800-###-####',
    );
}
