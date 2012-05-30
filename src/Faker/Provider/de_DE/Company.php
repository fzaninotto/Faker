<?php

namespace Faker\Provider\de_DE;

class Company extends \Faker\Provider\Company
{
	protected static $formats = array(
		'{{lastName}} {{companySuffix}}',
		'{{lastName}} {{lastName}} {{companySuffix}}',
		'{{lastName}}',
		'{{lastName}}',
	);

	protected static $companySuffix = array('GmbH', 'AG', 'KG');
}