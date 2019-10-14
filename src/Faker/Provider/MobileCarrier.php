<?php
/**
 * Created by PhpStorm.
 * User: Djunehor
 * Date: 10/14/2019
 * Time: 4:04 PM
 */

namespace Faker\Provider;


use Faker\Provider\Base;

class MobileCarrier extends Base {
	protected static $networks = array(
		'AT&T',
		'Sprint',
		'Verizon Wireless',
		'T-Mobile',
		'U.S. Cellular'
	);

	public function carrier() {
		return static::randomElement( static::$networks );
	}

}