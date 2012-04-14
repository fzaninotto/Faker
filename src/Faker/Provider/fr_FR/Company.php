<?php

namespace Faker\Provider\fr_FR;

class Company extends \Faker\Provider\Company
{
	protected static $formats = array(
		'{{lastName}} {{companySuffix}}',
		'{{lastName}} {{lastName}} {{companySuffix}}',
		'{{lastName}}',
		'{{lastName}}',
	);

	protected static $companySuffix = array('SA', 'S.A.', 'SARL', 'S.A.R.L.', 'S.A.S.');
}