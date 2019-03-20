<?php

namespace Faker\Provider\en_CA;

class PhoneNumber extends \Faker\Provider\en_CA\PhoneNumber
{
    protected static $formats = array(
        '%##-###-####',
        '%##.###.####',
        '%## ### ####',
        '(%##) ###-####',
        '1-%##-###-####',
        '1 (%##) ###-####',
        '+1 (%##) ###-####',
        '%##-###-#### x###',
        '(%##) ###-#### x###',
    );
}
