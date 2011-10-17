<?php

namespace Faker\Provider;

require_once __DIR__ . '/Base.php';

class DateTime extends \Faker\Provider\Base
{
	protected static $century = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX','XX1');

	/**
	 * @example 1061306726
	 */
	public static function unixTime()
	{
		return mt_rand(0, time());
	}

	/**
	 * @example DateTime('2005-08-16 20:39:21')
	 * @return \DateTime
	 */
	public static function dateTime()
	{
		return new \DateTime('@' . static::unixTime());
	}
	
	/**
	 * @example '2003-10-21T16:05:52+0000'
	 */
	public static function iso8601()
	{
		return static::date(\DateTime::ISO8601);
	}

	/**
	 * @example '2008-11-27'
	 */
	public static function date($format = 'Y-m-d')
	{
		return static::dateTime()->format($format);
	}

	/**
	 * @example '15:02:34'
	 */
	public static function time($format = 'H:i:s')
	{
		return static::dateTime()->format($format);
	}

	/**
	 * @example DateTime('1999-02-02 11:42:52')
	 * @return \DateTime
	 */
	public static function dateTimeBetween($startDate = "-30 years", $endDate = "now")
	{
		$startTimestamp = strtotime($startDate);
		$endTimestamp = strtotime($endDate);
		$timestamp = mt_rand($startTimestamp, $endTimestamp);

		return new \DateTime('@' . $timestamp);
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

}