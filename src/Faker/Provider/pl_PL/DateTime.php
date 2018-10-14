<?php

namespace Faker\Provider\pl_PL;

class DateTime extends \Faker\Provider\DateTime
{
    public static function dayOfWeek($max = 'now')
    {
        $map = array(
            'Sunday' => 'niedziela',
            'Monday' => 'poniedziałek',
            'Tuesday' => 'wtorek',
            'Wednesday' => 'środa',
            'Thursday' => 'czwartek',
            'Friday' => 'piątek',
            'Saturday' => 'sobota',
        );
        $week = static::dateTime($max)->format('l');
        return isset($map[$week]) ? $map[$week] : $week;
    }

    public static function monthName($max = 'now')
    {
        $map = array(
            'January' => 'styczeń',
            'February' => 'luty',
            'March' => 'marzec',
            'April' => 'kwiecień',
            'May' => 'maj',
            'June' => 'czerwiec',
            'July' => 'lipiec',
            'August' => 'sierpień',
            'September' => 'wrzesień',
            'October' => 'październik',
            'November' => 'listopad',
            'December' => 'grudzień',
        );
        $month = static::dateTime($max)->format('F');
        return isset($map[$month]) ? $map[$month] : $month;
    }
}
