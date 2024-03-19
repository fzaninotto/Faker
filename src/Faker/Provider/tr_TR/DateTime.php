<?php

namespace Faker\Provider\tr_TR;

class DateTime extends \Faker\Provider\DateTime
{
    public static function amPm(\DateTime|int|string $max = 'now'): string
    {
        return 'am' === static::dateTime($max)->format('a') ? 'öö' : 'ös';
    }

    public static function dayOfWeek(\DateTime|int|string $max = 'now'): string
    {
        $map = [
            'Sunday' => 'Pazar',
            'Monday' => 'Pazartesi',
            'Tuesday' => 'Salı',
            'Wednesday' => 'Çarşamba',
            'Thursday' => 'Perşembe',
            'Friday' => 'Cuma',
            'Saturday' => 'Cumartesi',
        ];
        $week = static::dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }

    public static function monthName(\DateTime|int|string $max = 'now'): string
    {
        $map = [
            'January' => 'Ocak',
            'February' => 'Şubat',
            'March' => 'Mart',
            'April' => 'Nisan',
            'May' => 'Mayıs',
            'June' => 'Haziran',
            'July' => 'Temmuz',
            'August' => 'Ağustos',
            'September' => 'Eylül',
            'October' => 'Ekim',
            'November' => 'Kasım',
            'December' => 'Aralık',
        ];
        $month = static::dateTime($max)->format('F');

        return $map[$month] ?? $month;
    }
}
