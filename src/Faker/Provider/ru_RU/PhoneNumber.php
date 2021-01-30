<?php

namespace Faker\Provider\ru_RU;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '(812) ###-##-##',
        '(495) ###-####',
        '+7 (922) ###-####',
        '(35222) ##-####',
        '8-800-###-####',
    );

    /**
     * @example +79991230080
     * @return string
     */
    public function e164PhoneNumber()
    {
        $formats = array('+7##########');
        return static::numerify($this->generator->parse(static::randomElement($formats)));
    }
}
