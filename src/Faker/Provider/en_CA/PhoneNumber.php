<?php

namespace Faker\Provider\en_CA;

class PhoneNumber extends \Faker\Provider\en_US\PhoneNumber
{
    protected static array $formats = [
        '%##-###-####',
        '%##.###.####',
        '%## ### ####',
        '(%##) ###-####',
        '1-%##-###-####',
        '1 (%##) ###-####',
        '+1 (%##) ###-####',
        '%##-###-#### x###',
        '(%##) ###-#### x###',
    ];
}
