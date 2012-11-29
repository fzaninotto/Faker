<?php

namespace Faker\Provider\en_US;

class Person extends \Faker\Provider\Person {
	protected static $formats = array (
			'{{firstName}} {{lastName}}'
	);
	protected static $firstName = array (
			'Emir',
			'Cem',
			'Ege',
			'Çağan',
			'Sarp',
			'Kerem',
			'Deniz',
			'Yağız',
			'Yiğit',
			'Emre',
			'Kağan',
			'Mert',
			'Görkem',
			'Burak',
			'Meriç',
			'Berke',
			'Kutay',
			'Tuna',
			'Baran',
			'Efe',
			'Onur',
			'Doruk',
			'Bartu',
			'Emirhan',
			'Alp',
			'Arhan',
			'Bora',
			'Canberk',
			'Dağhan',
			'Rüzgar',
			'Derin',
			'Toprak',
			'Arın',
			'Aşkın',
			'Çınar',
			'Armağan',
			'Derin',
			'Koray',
			'Barlas',
			'Ada',
			'Atakan',
			'Berk',
			'Ali',
			'Polat',
			'Göktürk',
			'Serhan',
			'Ege',
			'Utku',
			'Berkay',
			'Güney'
	);
	protected static $lastName = array (
			'Emir',
			'Cem',
			'Ege',
			'Çağan',
			'Sarp',
			'Kerem',
			'Deniz',
			'Yağız',
			'Yiğit',
			'Emre',
			'Kağan',
			'Mert',
			'Görkem',
			'Burak',
			'Meriç',
			'Berke',
			'Kutay',
			'Tuna',
			'Baran',
			'Efe',
			'Onur',
			'Doruk',
			'Bartu',
			'Emirhan',
			'Alp',
			'Arhan',
			'Bora',
			'Canberk',
			'Dağhan',
			'Rüzgar',
			'Derin',
			'Toprak',
			'Arın',
			'Aşkın',
			'Çınar',
			'Armağan',
			'Derin',
			'Koray',
			'Barlas',
			'Ada',
			'Atakan',
			'Berk',
			'Ali',
			'Polat',
			'Göktürk',
			'Serhan',
			'Ege',
			'Utku',
			'Berkay',
			'Güney'
	);
	private static $prefix = array (
			'Doç. Dr.',
			'Dr.'
	);
	private static $suffix = array (

	);

	/**
	 *
	 * @example 'Mrs.'
	 */
	public static function prefix() {
		return static::randomElement ( static::$prefix );
	}

	/**
	 *
	 * @example 'PhD'
	 */
	public static function suffix() {
		return static::randomElement ( static::$suffix );
	}
}
