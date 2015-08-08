<?php

namespace Faker\Provider\fa_IR;

use Miladr\Jalali\jDateTime;

class DateTime extends \Faker\Provider\DateTime
{
    /**
     * Get a date string between January 1, 1970 and now
     *
     * @param string                 $format
     * @param \DateTime|int|string   $max    maximum timestamp used as random end limit, default to "now"
     * @param  boolean $convertChars False (by default) to keep Digits in normal english format, true to convert to Farsi chars(۰,۱,۲,۳,۴,۵,۶,۷,۸,۹)
     * @return string
     * @example '1367-09-28'
     */
    public static function date($format = 'Y-m-d', $max = 'now', $convertChars = false)
    {
        return jDateTime::date($format, static::dateTime($max)->getTimestamp(), $convertChars);
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example 'ق.ظ'
     */
    public static function amPm($max = 'now')
    {
        return jDateTime::date('a', static::dateTime($max)->getTimestamp());
    }

    /**
     * @param \DateTime|int|string   $max maximum timestamp used as random end limit, default to "now"
     * @param  boolean $convertChars False (by default) to keep Digits in normal english format, true to convert to Farsi chars(۰,۱,۲,۳,۴,۵,۶,۷,۸,۹)
     * @return string
     * @example '22'
     */
    public static function dayOfMonth($max = 'now', $convertChars = false)
    {
        return jDateTime::date('d', static::dateTime($max)->getTimestamp(), $convertChars);
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example 'دوشنبه'
     */
    public static function dayOfWeek($max = 'now')
    {
        return jDateTime::date('l', static::dateTime($max)->getTimestamp());
    }

    /**
     * @param \DateTime|int|string   $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @param  boolean $convertChars False (by default) to keep Digits in normal english format, true to convert to Farsi chars(۰,۱,۲,۳,۴,۵,۶,۷,۸,۹)
     * @example '7'
     */
    public static function month($max = 'now', $convertChars = false)
    {
        return jDateTime::date('m', static::dateTime($max)->getTimestamp(), $convertChars);
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example 'آذر'
     */
    public static function monthName($max = 'now')
    {
        return jDateTime::date('F', static::dateTime($max)->getTimestamp());
    }

    /**
     * @param \DateTime|int|string   $max maximum timestamp used as random end limit, default to "now"
     * @return int
     * @param  boolean $convertChars False (by default) to keep Digits in normal english format, true to convert to Farsi chars(۰,۱,۲,۳,۴,۵,۶,۷,۸,۹)
     * @example 1367
     */
    public static function year($max = 'now', $convertChars = false)
    {
        return jDateTime::date('Y', static::dateTime($max)->getTimestamp(), $convertChars);
    }
}
