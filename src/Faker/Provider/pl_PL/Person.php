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
}
