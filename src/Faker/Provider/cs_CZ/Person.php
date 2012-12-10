<?php

namespace Faker\Provider\cs_CZ;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{prefix}} {{firstNameMale}} {{lastNameMale}}',
        '{{prefix}} {{firstNameFemale}} {{lastNameFemale}}',
    );

    protected static $firstNameMale = array(
        'Jiří', 'Jan', 'Petr', 'Josef', 'Pavel', 'Jaroslav', 'Martin', 'Tomáš', 'Miroslav', 'František', 'Zdeněk', 'Václav',
        'Michal', 'Milan', 'Karel', 'Lukáš', 'David', 'Jakub', 'Vladimír', 'Ladislav', 'Roman', 'Stanislav', 'Ondřej', 'Marek',
        'Radek', 'Antonín', 'Daniel', 'Dagmar', 'Vojtěch', 'Filip', 'Adam', 'Miloslav', 'Ivan', 'Jaromír', 'Aleš', 'Libor',
        'Matěj', 'Vlastimil', 'Jindřich', 'Patrik', 'Miloš', 'Dominik', 'Oldřich', 'Rudolf', 'Lubomír', 'Robert', 'Luboš',
        'Ilona', 'Bohumil', 'Radim', 'Štěpán', 'Richard', 'Ivo', 'Rostislav', 'Vít', 'Dušan', 'Luděk', 'Vladislav', 'Kamil',
        'Bohuslav', 'Matyáš', 'Zbyněk', 'Alois', 'Viktor', 'Jozef', 'Ján', 'Michael', 'Šimon', 'Štefan', 'Vasyl', 'Vítězslav',
        'Eduard', 'René', 'Emil', 'Marcel', 'Peter', 'Dalibor', 'Ludvík', 'Kryštof', 'Radomír'
    );

    protected static $firstNameFemale = array(
        'Marie', 'Jana', 'Eva', 'Hana', 'Anna', 'Lenka', 'Věra', 'Kateřina', 'Alena', 'Lucie', 'Petra', 'Jaroslava', 'Veronika',
        'Martina', 'Ludmila', 'Helena', 'Jitka', 'Michaela', 'Zdeňka', 'Tereza', 'Ivana', 'Jarmila', 'Monika', 'Jiřina', 'Zuzana',
        'Markéta', 'Marcela', 'Barbora', 'Dana', 'Eliška', 'Božena', 'Vlasta', 'Kristýna', 'Libuše', 'Irena', 'Miroslava', 'Marta',
        'Pavla', 'Andrea', 'Olga', 'Šárka', 'Iveta', 'Adéla', 'Pavlína', 'Klára', 'Růžena', 'Nikola', 'Blanka', 'Renata', 'Karolína',
        'Gabriela', 'Milada', 'Zdenka', 'Simona', 'Radka', 'Natálie', 'Daniela', 'Aneta', 'Iva', 'Milena', 'Denisa', 'Miloslava',
        'Miluše', 'Romana', 'Stanislava', 'Anežka', 'Soňa', 'Naděžda', 'Kamila', 'Vladimíra', 'Emilie', 'Renáta', 'Jindřiška',
        'Vendula', 'Mária', 'Alžběta', 'Františka', 'Nela', 'Štěpánka', 'Dominika'
    );

    protected static $lastNameMale = array(
        'Novák', 'Svoboda', 'Novotný', 'Dvořák', 'Černý', 'Procházka', 'Kučera', 'Nguyen', 'Veselý', 'Horák', 'Krejčí', 'Němec',
        'Marek',	'Pospíšil','Pokorný', 'Hájek', 'Král', 'Jelínek', 'Růžička', 'Beneš', 'Fiala', 'Sedláček', 'Doležal', 'Zeman',
        'Kolář', 'Navrátil', 'Čermák', 'Urban', 'Vaněk', 'Blažek', 'Kříž', 'Kovář', 'Kratochvíl', 'Bartoš', 'Vlček', 'Polák',
        'Kopecký', 'Musil', 'Šimek', 'Konečný', 'Malý', 'Holub', 'Štěpánek', 'Čech', 'Kadlec', 'Staněk', 'Dostál', 'Soukup',
        'Šťastný', 'Mareš'
    );

    protected static $lastNameFemale = array(
        'Nováková', 'Svobodová', 'Novotná', 'Dvořáková', 'Černá', 'Procházková', 'Kučerová', 'Nguyen', 'Veselá', 'Horáková',
        'Krejčí', 'Němcová', 'Marková', 'Pospíšilová', 'Pokorná', 'Hájková', 'Králová', 'Jelínková', 'Růžičková', 'Benešová',
        'Fialová', 'Sedláčková', 'Doležalová', 'Zemanová', 'Kolářová', 'Navrátilová', 'Čermáková', 'Urbanová', 'Vaňková',
        'Blažková', 'Křížová', 'Kovářová', 'Kratochvílová', 'Bartošová', 'Vlčková', 'Poláková', 'Kopecká', 'Musilová', 'Šimková',
        'Konečná', 'Malá', 'Holubová', 'Štěpánková', 'Čechová', 'Kadlecová', 'Staňková', 'Dostálová', 'Soukupová', 'Šťastná',
        'Marešová'
    );

    private static $prefix = array(
        'Bc.', 'Ing.', 'MUDr.', 'MVDr.', 'Mgr.', 'JUDr.', 'PhDr.', 'RNDr.', 'doc.', 'Dr.'
    );

    public static function firstName()
    {
        $gender = static::randomElement(array('Male', 'Female'));

        return call_user_func(array('static', 'firstName'.$gender));
    }

    public static function firstNameMale()
    {
        return static::randomElement(static::$firstNameMale);
    }

    public static function firstNameFemale()
    {
        return static::randomElement(static::$firstNameFemale);
    }

    public static function lastName()
    {
        $gender = static::randomElement(array('Male', 'Female'));

        return call_user_func(array('static', 'lastName'.$gender));
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }

    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }
}
