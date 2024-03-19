<?php

namespace Faker\Provider\hu_HU;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static array $formats = [
        '+36-##-###-####',
        '+36#########',
        '+36(##)###-###',
        '06-##-###-####',
        '06(##)###-###',
    ];
}
