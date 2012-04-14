<?php

namespace Faker\Provider\fr_FR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
	protected static $formats = array(
		'+33 (0)# ## ## ## ##',
		'+33 # ## ## ## ##',
		'0#########',
		'0# ## ## ## ##',
		'0# ## ## ## ##',
	);
}