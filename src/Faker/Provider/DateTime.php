<?php

namespace Faker\Provider;

class DateTime extends \Faker\Provider\Base
{
    protected static $century = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX','XX1');

    /**
     * Get a timestamp between January 1, 1970 and now
     *
     * @example 1061306726
     */
    public static function unixTime()
    {
        return mt_rand(0, time());
    }

    /**
     * Get a datetime object for a date between January 1, 1970 and now
     *
     * @example DateTime('2005-08-16 20:39:21')
     * @return \DateTime
     */
    public static function dateTime()
    {
        return new \DateTime('@' . static::unixTime());
    }

    /**
     * Get a datetime object for a date between January 1, 001 and now
     *
     * @example DateTime('1265-03-22 21:15:52')
     * @return \DateTime
     */
    public static function dateTimeAD()
    {
        return new \DateTime('@' . mt_rand(-62135597361, time()));
    }

    /**
     * @example '2003-10-21T16:05:52+0000'
     */
    public static function iso8601()
    {
        return static::date(\DateTime::ISO8601);
    }

    /**
     * Get a date string between January 1, 1970 and now
     *
     * @param string $format
     * @example '2008-11-27'
     */
    public static function date($format = 'Y-m-d')
    {
        return static::dateTime()->format($format);
    }

    /**
     * Get a time string (24h format by default)
     *
     * @param string $format
     * @example '15:02:34'
     */
    public static function time($format = 'H:i:s')
    {
        return static::dateTime()->format($format);
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
    public static function dateTimeBetween($startDate = "-30 years", $endDate = "now")
    {
        $startTimestamp = $startDate instanceof \DateTime ? $startDate->getTimestamp() : strtotime($startDate);
        $endTimestamp = $endDate instanceof \DateTime ? $endDate->getTimestamp() : strtotime($endDate);
        $timestamp = mt_rand($startTimestamp, $endTimestamp);

        $ts = new \DateTime('@' . $timestamp);
        $ts->setTimezone(new \DateTimeZone(date_default_timezone_get()));

        return $ts;
    }

    /**
     * @example DateTime('1964-04-04 11:02:02')
     * @return \DateTime
     */
    public static function dateTimeThisCentury()
    {
        return static::dateTimeBetween("-100 year");
    }

    /**
     * @example DateTime('2010-03-10 05:18:58')
     * @return \DateTime
     */
    public static function dateTimeThisDecade()
    {
        return static::dateTimeBetween("-10 year");
    }

    /**
     * @example DateTime('2011-09-19 09:24:37')
     * @return \DateTime
     */
    public static function dateTimeThisYear()
    {
        return static::dateTimeBetween("-1 year");
    }

    /**
     * @example DateTime('2011-10-05 12:51:46')
     * @return \DateTime
     */
    public static function dateTimeThisMonth()
    {
        return static::dateTimeBetween("-1 month");
    }

    /**
     * @example 'am'
     */
    public static function amPm()
    {
        return static::dateTime()->format('a');
    }

    /**
     * @example '22'
     */
    public static function dayOfMonth()
    {
        return static::dateTime()->format('d');
    }

    /**
     * @example 'Tuesday'
     */
    public static function dayOfWeek()
    {
        return static::dateTime()->format('l');
    }

    /**
     * @example '7'
     */
    public static function month()
    {
        return static::dateTime()->format('m');
    }

    /**
     * @example 'September'
     */
    public static function monthName()
    {
        return static::dateTime()->format('F');
    }

    /**
     * @example 1673
     */
    public static function year()
    {
        return static::dateTime()->format('Y');
    }

    /**
     * @example 'XVII'
     */
    public static function century()
    {
        return static::randomElement(static::$century);
    }

    /**
     * @example 'Europe/Paris'
     */
    public static function timezone()
    {
        return static::randomElement(\DateTimeZone::listIdentifiers());
    }
}
