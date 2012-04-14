<?php

namespace Faker\Provider;

class Internet extends \Faker\Provider\Base
{
	protected static $safeEmailTld = array('org', 'com', 'net');
	protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
	protected static $tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org');

	protected static $userNameFormats = array(
		'{{lastName}}.{{firstName}}',
		'{{firstName}}.{{lastName}}',
		'{{firstName}}##',
		'?{{lastName}}',
	);
	protected static $emailFormats = array(
		'{{userName}}@{{domainName}}',
		'{{userName}}@{{freeEmailDomain}}',
	);
	protected static $urlFormats = array(
		'http://www.{{domainName}}/',
		'http://{{domainName}}/',
	);

	/**
	 * @example 'jdoe@acme.biz'
	 */
	public function email()
	{
		$format = static::randomElement(static::$emailFormats);
		return $this->generator->parse($format);
	}

	/**
	 * @example 'jdoe@example.com'
	 */
	public function safeEmail()
	{
		return $this->userName() . '@example.' . static::randomElement(static::$safeEmailTld);
	}

	/**
	 * @example 'jdoe@gmail.com'
	 */
	public function freeEmail()
	{
		return $this->userName() . '@' . static::freeEmailDomain();
	}

	/**
	 * @example 'jdoe@dawson.com'
	 */
	public function companyEmail()
	{
		return $this->userName() . '@' . $this->domainName();
	}
	
	/**
	 * @example 'gmail.com'
	 */
	public static function freeEmailDomain()
	{
		return static::randomElement(static::$freeEmailDomain);
	}

	/**
	 * @example 'jdoe'
	 */	
	public function userName()
	{
		$format = static::randomElement(static::$userNameFormats);
		return strtolower(static::bothify($this->generator->parse($format)));
	}
	
	/**
	 * @example 'tiramisu.com'
	 */
	public function domainName()
	{
		return $this->domainWord() . '.' . $this->tld();
	}

	/**
	 * @example 'faber'
	 */
	public function domainWord()
	{
		$company = $this->generator->format('company');
		$companyElements = explode(' ', $company);
		$company = $companyElements[0];
		$company = preg_replace('/\W/', '', $company);

		return strtolower($company);
	}
	
	/**
	 * @example 'com'
	 */
	public function tld()
	{
		return static::randomElement(static::$tld);
	}
	
	/**
	 * @example 'http://www.runolfsdottir.com/'
	 */
	public function url()
	{
		$format = static::randomElement(static::$urlFormats);
		return $this->generator->parse($format);
	}
	
	/**
	 * @example '237.149.115.38'
	 */
	public function ipv4()
	{
		return long2ip(mt_rand(-2147483648, 2147483647));
	}
	
	/**
	 * @example '35cd:186d:3e23:2986:ef9f:5b41:42a4:e6f1'
	 */
	public function ipv6()
	{
		$res = array();
		for ($i=0; $i < 8; $i++) { 
			$res []= dechex(mt_rand(0, "65535"));
		}
		return join(':', $res);
	}
}