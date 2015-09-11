<?php

namespace Faker\Provider;

class PhoneNumber extends \Faker\Provider\Base
{
    protected static $formats = array('###-###-###');

    /**
     * @example '555-123-546'
     */
    public function phoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$formats)));
    }
}
