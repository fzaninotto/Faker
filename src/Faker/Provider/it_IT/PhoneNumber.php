<?php

namespace Faker\Provider\it_IT;

require_once __DIR__ . '/../PhoneNumber.php';

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
	protected static $formats = array(
		'+## ### ## ## ####',
		'+## ## #######',
		'+## ## ########',
		'+## ### #######',
		'+## ### ########',
		'+## #### #######',
		'+## #### ########'
	);
}