<?php

namespace Faker\Provider\az_AZ;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '(050) ###-##-##',
        '(055) ###-##-##',
        '(070) ###-##-##',
        '+994 (922) ###-####',
    );
}
