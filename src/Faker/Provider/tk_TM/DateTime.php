<?php

namespace Faker\Provider\tk_TM;

class DateTime extends \Faker\Provider\DateTime
{
    public static function amPm($max = 'now')
    {
        return static::dateTime($max)->format('a') === 'am' ? 'gö' : 'gs';
    }

    public static function dayOfWeek($max = 'now')
    {
        $map = array(
            'Sunday' => 'Ýekşenbe',
            'Monday' => 'Duşenbe',
            'Tuesday' => 'Sişenbe',
            'Wednesday' => 'Çarşenbe',
            'Thursday' => 'Penşenbe',
            'Friday' => 'Anna',
            'Saturday' => 'Şenbe'
        );
        $week = static::dateTime($max)->format('l');
        return isset($map[$week]) ? $map[$week] : $week;
    }

    public static function monthName($max = 'now')
    {
        $map = array(
            'January' => 'Ýanwar',
            'February' => 'Fewral',
            'March' => 'Mart',
            'April' => 'Aprel',
            'May' => 'Maý',
            'June' => 'Iýun',
            'July' => 'Iýul',
            'August' => 'Awgust',
            'September' => 'Sentýabr',
            'October' => 'Oktýabr',
            'November' => 'Noýabr',
            'December' => 'Dekabr'
        );
        $month = static::dateTime($max)->format('F');
        return isset($map[$month]) ? $map[$month] : $month;
    }
}
