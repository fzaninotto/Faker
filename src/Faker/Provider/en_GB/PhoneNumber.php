<?php

namespace Faker\Provider\en_GB;

require_once __DIR__ . '/../PhoneNumber.php';

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
	protected static $formats = array(
		'+44(0)##########',
                '+44(0)#### ######',
                '+44(0)#########',
                '+44(0)#### #####',
		'0##########',
                '0#########',
                '0#### ######',
                '0#### #####',
                '(0####) ######',
                '(0####) #####',

	);
}