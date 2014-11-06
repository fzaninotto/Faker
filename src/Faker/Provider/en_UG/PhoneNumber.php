<?php

namespace Faker\Provider\en_UG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
	protected static $formats = array(
		'+256 ### ### ###',
		'+256#########',
		'07## ### ###',
		'07########',
		'04## ### ###',
		'04########'
	);
}