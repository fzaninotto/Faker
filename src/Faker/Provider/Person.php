<?php

namespace Faker\Provider;

class Person extends \Faker\Provider\Base
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
    );

    protected static $firstName = array('John', 'Jane');

    protected static $lastName = array('Doe');

    /**
     * @example 'John Doe'
     */
    public function name()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'John'
     */
    public static function firstName()
    {
        return static::randomElement(static::$firstName);
    }

    /**
     * @example 'Doe'
     */
    public static function lastName()
    {
        return static::randomElement(static::$lastName);
    }
}
