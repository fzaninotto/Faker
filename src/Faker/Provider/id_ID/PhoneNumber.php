<?php

namespace Faker\Provider\id_ID;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '(021) ###-####',
        '(0###) ###-###',
        '(0###) ###-####',
        '0811-####-####',
        '0812-####-####',
        '0838-####-####',
        '0856-####-####',
        '0857-####-####',
        '0878-####-####',
        '0898-####-####',
    );
}
