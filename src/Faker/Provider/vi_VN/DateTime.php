<?php

namespace Faker\Provider\vi_VN;

class DateTime extends \Faker\Provider\DateTime
{
    /**
     * Get a date string between January 1, 1970 and now
     *
     * @param string               $format
     * @param \DateTime|int|string $max    maximum timestamp used as random end limit, default to "now"
     * @example '28-10-2014'
     */
    public static function date($format = 'd-m-Y', $max = 'now')
    {
        return static::dateTime($max)->format($format);
    }
}
