<?php

namespace Faker\Provider\pl_PL;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{prefix}} {{prefix}} {{firstName}} {{lastName}}',
    );

    protected static $firstName = array(
        'Adam', 'Adrian', 'Agata', 'Alan', 'Aleksander', 'Aleksandra', 'Alicja', 'Amelia', 'Anna', 'Antoni', 'Antonina',
        'Błażej', 'Barbara', 'Bartłomiej', 'Bartosz', 'Blanka', 'Damian', 'Daniel', 'Daria', 'Dawid', 'Dominik', 'Dominika',
        'Emilia', 'Fabian', 'Filip', 'Franciszek', 'Gabriel', 'Gabriela', 'Hanna', 'Hubert', 'Iga', 'Igor', 'Izabela',
        'Jagoda', 'Jakub', 'Jan', 'Joanna', 'Julia', 'Justyna', 'Kacper', 'Kamil', 'Kamila', 'Karol', 'Karolina', 'Katarzyna',
        'Kinga', 'Klaudia', 'Konrad', 'Kornelia', 'Krystian', 'Krzysztof', 'Ksawery', 'Laura', 'Lena', 'Maciej', 'Magdalena',
        'Małgorzata', 'Maja', 'Maksymilian', 'Malwina', 'Marcel', 'Marcin', 'Maria', 'Marta', 'Martyna', 'Mateusz', 'Micha',
        'Michał', 'Michalina', 'Miko', 'Mikołaj', 'Milena', 'Miłosz', 'Nadia', 'Natalia', 'Nikodem', 'Nikola', 'Nina',
        'Oliwia', 'Oliwier', 'Oskar', 'Patrycja', 'Patryk', 'Paulina', 'Pawe', 'Paweł', 'Piotr', 'Pola', 'Rafał', 'Roksana',
        'Sandra', 'Sebastian', 'Stanisław', 'Szymon', 'Tomasz', 'Tymoteusz', 'Łukasz', 'Weronika', 'Wiktor', 'Wiktoria',
        'Wojciech', 'Zofia', 'Zuzanna',
    );

    protected static $lastName = array(
        'Nowak', 'Kowalski', 'Wiśniewski', 'Dąbrowski', 'Lewandowski', 'Wójcik', 'Kamiński', 'Kowalczyk', 'Zieliński', 'Szymański',
        'Woźniak', 'Kozłowski', 'Jankowski', 'Wojciechowski', 'Kwiatkowski', 'Kaczmarek', 'Mazur', 'Krawczyk', 'Piotrowski',
        'Grabowski', 'Nowakowski', 'Pawłowski', 'Michalski', 'Nowicki', 'Adamczyk', 'Dudek', 'Zając', 'Wieczorek', 'Jabłoński',
        'Król', 'Majewski', 'Olszewski', 'Jaworski', 'Wróbel', 'Malinowski', 'Pawlak', 'Witkowski', 'Walczak', 'Stępień',
        'Górski', 'Rutkowski', 'Michalak', 'Sikora', 'Ostrowski', 'Baran', 'Duda', 'Szewczyk', 'Tomaszewski', 'Pietrzak',
        'Marciniak', 'Wróblewski', 'Zalewski', 'Jakubowski', 'Jasiński', 'Zawadzki', 'Sadowski', 'Bąk', 'Chmielewski',
        'Włodarczyk', 'Borkowski', 'Czarnecki', 'Sawicki', 'Sokołowski', 'Urbański', 'Kubiak', 'Maciejewski', 'Szczepański',
        'Kucharski', 'Wilk', 'Kalinowski', 'Lis', 'Mazurek', 'Wysocki', 'Adamski', 'Kaźmierczak', 'Wasilewski', 'Sobczak',
        'Czerwiński', 'Andrzejewski', 'Cieślak', 'Głowacki', 'Zakrzewski', 'Kołodziej', 'Sikorski', 'Krajewski', 'Gajewski',
        'Szymczak', 'Szulc', 'Baranowski', 'Laskowski', 'Brzeziński', 'Makowski', 'Ziółkowski', 'Przybylski', 'Domański',
        'Nowacki', 'Borowski', 'Błaszczyk', 'Chojnacki', 'Ciesielski',
    );

    private static $prefix = array('mgr','inż.', 'dr', 'doc.');

    /**
     * @example 'mgr'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

	/**
	 * @param DateTime $birthdate
	 * @param string $sex M for male or F for female
	 */
	public static function pesel($birthdate = null, $sex = null)
	{
		if ($birthdate === null)
			$birthdate = new \DateTime(date('Y-m-d',mt_rand(strtotime('1800-01-0'), time())));

		$weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
		$length = count($weights);

		$fullYear = (int)$birthdate->format('Y');
		$year = (int)$birthdate->format('y');
		$month = $birthdate->format('m') + (((int)($fullYear/100) - 14) % 5) * 20;
		$day = $birthdate->format('d');

		$result = array((int)($year / 10), $year % 10, (int)($month / 10), $month % 10, (int)($day / 10), $day % 10);

		for ($i = 6; $i < $length; $i++) {
			$result[$i] = static::randomDigit();
		}
		if ($sex == "M") {
			$b[$length - 1] |= 1;
		} elseif ($sex == "F") {
			$b[$length - 1] ^= 1;
		}
		$checksum = 0;
		for ($i = 0; $i < $length; $i++) {
			$checksum += $weights[$i] * $result[$i];
		}
		$checksum = (10 - ($checksum % 10)) % 10;
		$result[] = $checksum;
		return implode('',$result);
	}

	public static function personalIdentityNumber()
	{
		$range = str_split("ABCDEFGHIJKLMNPRSTUVWXYZ");
		$low = array("A", static::randomElement($range), static::randomElement($range));
		$high = array(static::randomDigit(), static::randomDigit(), static::randomDigit(), static::randomDigit(), static::randomDigit());
		$weights = array(7, 3, 1, 7, 3, 1, 7, 3);
		$checksum = 0;
		for ($i = 0; $i < count($low); $i++) {
			$checksum += $weights[$i] * (ord($low[$i]) - 55);
		}
		for ($i = 0; $i < count($high); $i++) {
			$checksum += $weights[$i+3] * $high[$i];
		}
		$checksum %= 10;
		return implode('',$low).$checksum.implode('',$high);
	}
}
