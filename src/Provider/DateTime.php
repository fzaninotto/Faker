<?php

namespace Faker\Provider;

require_once __DIR__ . '/Base.php';

class DateTime extends \Faker\Provider\Base
{
	protected static $century = array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII','XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX','XX1');

	public static function unixTime()
	{
		return mt_rand(0, time());
	}
	
	public static function dateTime()
	{
		return new \DateTime('@' . static::unixTime());
	}
	
	public static function iso8601()
	{
		return static::date(\DateTime::ISO8601);
	}
	
	public static function date($format = 'Y-m-d')
	{
		return static::dateTime()->format($format);
	}

	public static function time($format = 'H:i:s')
	{
		return static::dateTime()->format($format);
	}

	public static function dateTimeBetween($startDate = "-30 years", $endDate = "now")
	{
		$startTimestamp = strtotime($startDate);
		$endTimestamp = strtotime($endDate);
		$timestamp = mt_rand($startTimestamp, $endTimestamp);

		return new \DateTime('@' . $timestamp);
	}
	
	public static function dateTimeThisCentury()
	{
		return static::dateTimeBetween("-100 year");
	}

	public static function dateTimeThisDecade()
	{
		return static::dateTimeBetween("-10 year");
	}

	public static function dateTimeThisYear()
	{
		return static::dateTimeBetween("-1 year");
	}

	public static function dateTimeThisMonth()
	{
		return static::dateTimeBetween("-1 month");
	}

	public static function amPm()
	{
		return static::dateTime()->format('a');
	}

	public static function dayOfMonth()
	{
		return static::dateTime()->format('d');
	}

	public static function dayOfWeek()
	{
		return static::dateTime()->format('l');
	}

	public static function month()
	{
		return static::dateTime()->format('m');
	}

	public static function monthName()
	{
		return static::dateTime()->format('F');
	}

	public static function year()
	{
		return static::dateTime()->format('Y');
	}

	public static function century()
	{
		return static::randomElement(static::$century);
	}

}