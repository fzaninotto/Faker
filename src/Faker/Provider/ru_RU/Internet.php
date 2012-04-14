<?php

namespace Faker\Provider\ru_RU;

class Internet extends \Faker\Provider\Internet
{
	protected static $tld = array('com', 'com', 'net', 'org', 'ru', 'ru', 'ru', 'ru');
	
	/**
	 * @example 'jdoe'
	 */	
	public function userName()
	{
		$format = static::randomElement(static::$userNameFormats);
		return static::bothify($this->generator->parse($format));
	}

	/**
	 * @example 'faber'
	 */
	public function domainWord()
	{
		$company = $this->generator->format('company');
		$companyElements = explode(' ', $company);
		$company = $companyElements[0];
		$company = preg_replace('/,/', '', $company);

		return $company;
	}

}
