<?php

namespace Faker\Provider;

class Language extends Base
{
    /**
     * See Locales for longer languages lists
     **/
    protected static $language = array(
        'Afrikaans', 'English', 'Norwegian',
    );

    /**
     * @example 'Afrikaans'
     */
    public static function language()
    {
        return static::randomElement(static::$language);
    }
}
