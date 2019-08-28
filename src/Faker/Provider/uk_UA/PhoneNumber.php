<?php

namespace Faker\Provider\uk_UA;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see list of Ukraine mobile formats (2017-08-08), source: https://ru.wikipedia.org/wiki/%D0%A2%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9_%D0%BF%D0%BB%D0%B0%D0%BD_%D0%BD%D1%83%D0%BC%D0%B5%D1%80%D0%B0%D1%86%D0%B8%D0%B8_%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%8B
     */
    protected static $formats = array(

        // International format (mobile)
        '+38050#######',
        '+38066#######',
        '+38068#######',
        '+38096#######',
        '+38067#######',
        '+38091#######',
        '+38092#######',
        '+38093#######',
        '+38094#######',
        '+38095#######',
        '+38096#######',
        '+38097#######',
        '+38098#######',
        '+38063#######',
        '+38099#######',

        // Internal country format (mobile)
        '050#######',
        '066#######',
        '068#######',
        '096#######',
        '067#######',
        '091#######',
        '092#######',
        '093#######',
        '094#######',
        '095#######',
        '096#######',
        '097#######',
        '098#######',
        '063#######',
        '099#######',

        // More generic formats
        '+38(0##)#######',
        '+38(0###)######',
        '+38(0####)#####'
    );
}
