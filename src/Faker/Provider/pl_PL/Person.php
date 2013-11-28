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
     * PESEL - Universal Electronic System for Registration of the Population
     * @link http://en.wikipedia.org/wiki/PESEL
     * @param  DateTime $birthdate
     * @param  string   $sex       M for male or F for female
     * @return string   11 digit number, like 44051401358
     */
    public static function pesel($birthdate = null, $sex = null)
    {
        if ($birthdate === null) {
            $birthdate = \Faker\Provider\DateTime::dateTimeThisCentury();
        }

        $weights = array(1, 3, 7, 9, 1, 3, 7, 9, 1, 3);
        $length = count($weights);

        $fullYear = (int) $birthdate->format('Y');
        $year = (int) $birthdate->format('y');
        $month = $birthdate->format('m') + (((int) ($fullYear/100) - 14) % 5) * 20;
        $day = $birthdate->format('d');

        $result = array((int) ($year / 10), $year % 10, (int) ($month / 10), $month % 10, (int) ($day / 10), $day % 10);

        for ($i = 6; $i < $length; $i++) {
            $result[$i] = static::randomDigit();
        }
        if ($sex == "M") {
            $result[$length - 1] |= 1;
        } elseif ($sex == "F") {
            $result[$length - 1] ^= 1;
        }
        $checksum = 0;
        for ($i = 0; $i < $length; $i++) {
            $checksum += $weights[$i] * $result[$i];
        }
        $checksum = (10 - ($checksum % 10)) % 10;
        $result[] = $checksum;

        return implode('',$result);
    }

    /**
     * National Identity Card number
     * @link http://en.wikipedia.org/wiki/Polish_National_Identity_Card
     * @return string 3 letters and 6 digits, like ABA300000
     */
    public static function personalIdentityNumber()
    {
        $range = str_split("ABCDEFGHIJKLMNPRSTUVWXYZ");
        $low = array("A", static::randomElement($range), static::randomElement($range));
        $high = array(static::randomDigit(), static::randomDigit(), static::randomDigit(), static::randomDigit(), static::randomDigit());
        $weights = array(7, 3, 1, 7, 3, 1, 7, 3);
        $checksum = 0;
        for ($i = 0, $size = count($low); $i < $size; $i++) {
            $checksum += $weights[$i] * (ord($low[$i]) - 55);
        }
        for ($i = 0, $size = count($high); $i < $size; $i++) {
            $checksum += $weights[$i+3] * $high[$i];
        }
        $checksum %= 10;

        return implode('',$low).$checksum.implode('',$high);
    }

    /**
     * Taxpayer Identification Number (NIP in Polish)
     * @link http://en.wikipedia.org/wiki/PESEL#Other_identifiers
     * @link http://pl.wikipedia.org/wiki/NIP
     * @return string 10 digit number
     */
    public static function taxpayerIdentificationNumber()
    {
        $weights = array(6, 5, 7, 2, 3, 4, 5, 6, 7);
        $result = array();
        do {
            $result = array(
                static::randomDigitNotNull(), static::randomDigitNotNull(), static::randomDigitNotNull(),
                static::randomDigit(), static::randomDigit(), static::randomDigit(),
                static::randomDigit(), static::randomDigit(), static::randomDigit(),
            );
            $checksum = 0;
            for ($i = 0, $size = count($result); $i < $size; $i++) {
                $checksum += $weights[$i] * $result[$i];
            }
            $checksum %= 11;
        } while ($checksum == 10);
        $result[] = $checksum;

        return implode('', $result);
    }
}
