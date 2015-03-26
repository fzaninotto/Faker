<?php

namespace Faker\Provider;

class DateTime extends \Faker\Provider\Base
{
    protected static $century = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX','XXI');

    protected static function getMaxTimestamp($max = 'now')
    {
        if (is_numeric($max)) {
            return (int) $max;
        }

        if ($max instanceof \DateTime) {
            return $max->getTimestamp();
        }

        return strtotime(empty($max) ? 'now' : $max);
    }

    /**
     * Get a timestamp between January 1, 1970 and now
     *
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return int
     *
     * @example 1061306726
     */
    public static function unixTime($max = 'now')
    {
        return mt_rand(0, static::getMaxTimestamp($max));
    }

    /**
     * Get a datetime object for a date between January 1, 1970 and now
     *
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @example DateTime('2005-08-16 20:39:21')
     * @return \DateTime
     */
    public static function dateTime($max = 'now')
    {
        return new \DateTime('@' . static::unixTime($max));
    }

    /**
     * Get a datetime object for a date between January 1, 001 and now
     *
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @example DateTime('1265-03-22 21:15:52')
     * @return \DateTime
     */
    public static function dateTimeAD($max = 'now')
    {
        return new \DateTime('@' . mt_rand(-62135597361, static::getMaxTimestamp($max)));
    }

    /**
     * get a date string formatted with ISO8601
     *
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example '2003-10-21T16:05:52+0000'
     */
    public static function iso8601($max = 'now')
    {
        return static::date(\DateTime::ISO8601, $max);
    }

    /**
     * Get a date string between January 1, 1970 and now
     *
     * @param string               $format
     * @param \DateTime|int|string $max    maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example '2008-11-27'
     */
    public static function date($format = 'Y-m-d', $max = 'now')
    {
        return static::dateTime($max)->format($format);
    }

    /**
     * Get a time string (24h format by default)
     *
     * @param string               $format
     * @param \DateTime|int|string $max    maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example '15:02:34'
     */
    public static function time($format = 'H:i:s', $max = 'now')
    {
        return static::dateTime($max)->format($format);
    }

    /**
     * Get a DateTime object based on a random date between two given dates.
     * Accepts date strings that can be recognized by strtotime().
     *
     * @param string $startDate Defaults to 30 years ago
     * @param string $endDate   Defaults to "now"
     * @example DateTime('1999-02-02 11:42:52')
     * @return \DateTime
     */
    public static function dateTimeBetween($startDate = '-30 years', $endDate = 'now')
    {
        $startTimestamp = $startDate instanceof \DateTime ? $startDate->getTimestamp() : strtotime($startDate);
        $endTimestamp = static::getMaxTimestamp($endDate);

        if ($startTimestamp > $endTimestamp) {
            throw new \InvalidArgumentException('Start date must be anterior to end date.');
        }

        $timestamp = mt_rand($startTimestamp, $endTimestamp);

        $ts = new \DateTime('@' . $timestamp);
        $ts->setTimezone(new \DateTimeZone(date_default_timezone_get()));

        return $ts;
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @example DateTime('1964-04-04 11:02:02')
     * @return \DateTime
     */
    public static function dateTimeThisCentury($max = 'now')
    {
        return static::dateTimeBetween('-100 year', $max);
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @example DateTime('2010-03-10 05:18:58')
     * @return \DateTime
     */
    public static function dateTimeThisDecade($max = 'now')
    {
        return static::dateTimeBetween('-10 year', $max);
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @example DateTime('2011-09-19 09:24:37')
     * @return \DateTime
     */
    public static function dateTimeThisYear($max = 'now')
    {
        return static::dateTimeBetween('-1 year', $max);
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @example DateTime('2011-10-05 12:51:46')
     * @return \DateTime
     */
    public static function dateTimeThisMonth($max = 'now')
    {
        return static::dateTimeBetween('-1 month', $max);
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example 'am'
     */
    public static function amPm($max = 'now')
    {
        return static::dateTime($max)->format('a');
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example '22'
     */
    public static function dayOfMonth($max = 'now')
    {
        return static::dateTime($max)->format('d');
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example 'Tuesday'
     */
    public static function dayOfWeek($max = 'now')
    {
        return static::dateTime($max)->format('l');
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example '7'
     */
    public static function month($max = 'now')
    {
        return static::dateTime($max)->format('m');
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example 'September'
     */
    public static function monthName($max = 'now')
    {
        return static::dateTime($max)->format('F');
    }

    /**
     * @param \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return int
     * @example 1673
     */
    public static function year($max = 'now')
    {
        return static::dateTime($max)->format('Y');
    }

    /**
     * @return string
     * @example 'XVII'
     */
    public static function century()
    {
        return static::randomElement(static::$century);
    }

    /**
     * @return string
     * @example 'Europe/Paris'
     */
    public static function timezone()
    {
        return static::randomElement(\DateTimeZone::listIdentifiers());
    }
}
