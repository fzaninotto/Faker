<?php

namespace Faker\Provider\vi_VN;

class DateTime extends \Faker\Provider\DateTime
{
    public static function date($format = 'd-m-Y', $max = 'now')
    {
        return static::dateTime($max)->format($format);
    }
}
