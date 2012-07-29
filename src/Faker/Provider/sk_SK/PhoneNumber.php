<?php

namespace Faker\Provider\sk_SK;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
	protected static $formats = array(
		'+420 ### ### ###',
		'### ### ###',
		'00420#########',
		'+420#########',
		'#########',
	);
}
