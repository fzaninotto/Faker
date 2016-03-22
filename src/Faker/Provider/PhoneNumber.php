<?php

namespace Faker\Provider;

class PhoneNumber extends Base
{
    protected static $formats = ['###-###-###'];

    /**
     * @example '555-123-546'
     */
    public function phoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$formats)));
    }

    /**
     * @example +27113456789
     *
     * @return string
     */
    public function e164PhoneNumber()
    {
        $formats = ['+#############'];

        return static::numerify($this->generator->parse(static::randomElement($formats)));
    }
}
