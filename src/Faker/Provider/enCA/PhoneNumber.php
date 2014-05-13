<?php

namespace Faker\Provider\enCA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
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
