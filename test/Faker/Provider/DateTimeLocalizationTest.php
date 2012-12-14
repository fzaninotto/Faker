<?php

namespace Faker\Test\Provider;

use Faker\Factory;

class DateLocalizationTest extends \PHPUnit_Framework_TestCase
{
	public function localizedDayOfWeekProvider()
	{
		return array(
			array(
				null, // fallback to default locale
				array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')
			),
			array(
				'de_DE',
				array('Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag')
			),
			array(
				'en_US',
				array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')
			),
			array(
				'fr_FR',
				array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche')
			),
			array(
				'it_IT',
				array('lunedì', 'martedì', 'mercoledì', 'giovedì', 'venerdì', 'sabato', 'domenica')
			),
			array(
				'tr_TR',
				array('Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi', 'Pazar')
			)
			
		);
	}

	/**
	 * @dataProvider localizedDayOfWeekProvider
	 */
	public function testLocalizedDayOfWeek($locale, $reference)
	{
		$faker = $locale ? Factory::create($locale) : Factory::create();

		foreach($reference as $item)
		{
			$this->assertContains($faker->dayOfWeek, $reference);
		}
	}

	public function localizedMonthNameProvider()
	{
		return array(
			array(
				null, // fallback to default locale
				array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')
			),
			array(
				'de_AT',
				array('Jänner', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember')
			),
			array(
				'de_DE',
				array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember')
			),
			array(
				'en_US',
				array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')
			),
			array(
				'fr_FR',
				array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre')
			),
			array(
				'it_IT',
				array('gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre')
			),
			array(
				'tr_TR',
				array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık')
			)
		);
	}

	/**
	 * @dataProvider localizedMonthNameProvider
	 */
	public function testLocalizedMonthName($locale, $reference)
	{
		$faker = $locale ? Factory::create($locale) : Factory::create();

		foreach($reference as $item)
		{
			$this->assertContains($faker->monthName, $reference);
		}
	}
}
