<?php

namespace Faker\Provider\ms_MY;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} bin {{lastName}}',
        '{{firstNameMale}} bin {{lastName}}',
        '{{titleMale}} {{firstNameMale}} bin {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{secondPersonalNameMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{secondPersonalNameMale}} {{firstNameMale}} bin {{lastName}}',
        '{{prefix}} {{firstNameMale}} bin {{lastName}}',
        '{{prefix}} {{titleMale}} {{firstNameMale}} bin {{lastName}}',
        '{{prefix}} {{titleMale}} {{secondPersonalNameMale}} {{firstNameMale}} bin {{lastName}}',
        '{{prefix}} {{secondPersonalNameMale}} {{firstNameMale}} bin {{lastName}}',

    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} binte {{lastName}}',
        '{{firstNameFemale}} binti {{lastName}}',
        '{{secondPersonalNameFemale}} {{firstNameFemale}} binte {{lastName}}',
        '{{secondPersonalNameFemale}} {{firstNameFemale}} binti {{lastName}}',
        '{{secondPersonalNameFemale}} {{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} binte {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} binti {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{secondPersonalNameFemale}} {{firstNameFemale}} binte {{lastName}}',
        '{{titleFemale}} {{secondPersonalNameFemale}} {{firstNameFemale}} binti {{lastName}}',
        '{{titleFemale}} {{secondPersonalNameFemale}} {{firstNameFemale}} {{lastName}}',
        '{{prefix}} {{titleFemale}} {{secondPersonalNameFemale}} {{firstNameFemale}} binte {{lastName}}',
        '{{prefix}} {{titleFemale}} {{secondPersonalNameFemale}} {{firstNameFemale}} binti {{lastName}}',
        '{{prefix}} {{secondPersonalNameFemale}} {{firstNameFemale}} binte {{lastName}}',
        '{{prefix}} {{secondPersonalNameFemale}} {{firstNameFemale}} binti {{lastName}}',
        '{{prefix}} {{firstNameFemale}} binte {{lastName}}',
        '{{prefix}} {{firstNameFemale}} binti {{lastName}}',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians
     */
    protected static $firstNameMale = array(
        'Sudirman', 'Awal', 'Asmawi', 'Azhar', 'Sean', 'Aziddin', 'Shanon', 'Hani', 'Mohsin', 'Aziz', 'Azmyl', 'Aznil',
        'Din', 'Zamil', 'Adnan', 'Saidi', 'Syarif', 'Anwar', 'Fazal', 'Nasimuddin', 'Halim', 'Azman', 'Nasir', 'Anuar',
        'Zain', 'Afifi', 'Akim', 'Fitri', 'Ibrahim', 'Asif', 'Harfan', 'Kamal', 'Khairul', 'Izuan', 'Nazirul', 'Naim',
        'Irfan', 'Fadhli', 'Azmi', 'Khyril', 'Safee', 'Rudie', 'Fadzli', 'Safiq', 'Fahmi', 'Norshahrul', 'Akmal', 'Rizal',
        'Fakri', 'Nazmi', 'Mokhtar', 'Fairuz', 'Fariqe', 'Zulfahmi', 'Norman'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_women_writers
     */
    protected static $firstNameFemale = array(
        'Shila', 'Yasmin', 'Kasma', 'Erra', 'Fazira', 'Fauziah', 'Sheila', 'Amy', 'Nurhaliza', 'Misha', 'Fasha Sandha',
        'Hannah', 'Scha', 'Adira', 'Aini', 'Yuna', 'Nurhaliza', 'Sophia', 'Damia', 'Zara', 'Aishah', 'Alya', 'Humaira',
        'Farah', 'Sofea', 'Mira', 'Wani', 'Husna' ,'Nadia', 'Insyirah', 'Sasha', 'Sabrina', 'Aziah', 'Aqila', 'Suriani',
        'Adibah', 'Fatimah', 'Khadijah', 'Zainon', 'Khasnor', 'Salmi', 'Azalia', 'Dina', 'Irene'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians
     */
    protected static $lastName = array(
        'Amzah', 'Arshad', 'Ashaari', 'Ani', 'Othman', 'Booty', 'Ghazi', 'Latiff', 'Majid', 'Yusof', 'Shah', 'Omar',
        'Yunor', 'Nawawi', 'Alyahya', 'Suhaimi', 'Masahor', 'Mazlan', 'Hashim', 'Razak', 'Ibrahim', 'Zain', 'Zamli',
        'Fazail', 'Shas', 'Muslim', 'Zambri', 'Sali', 'Ramli', 'Saari', 'Rahim', 'Idlan', 'Rakhli', 'Saarani', 'Faiz',
        'Dahari', 'Fauzy', 'Hairuman', 'Khairuddin'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    protected static $secondPersonalNameMale = array(
        'Ahmad', 'Mohammad', 'Mohammed', 'Mohd', 'Mamat', 'Mat', 'Muhymeen'
    );

    protected static $secondPersonalNameMaleFormats = array(
        '{{secondPersonalNameMale}}'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    protected static $secondPersonalNameFemale = array(
        'Nur', 'Nurul' ,'Noor', 'Nor', 'Siti'
    );

    protected static $secondPersonalNameFemaleFormats = array(
        '{{secondPersonalNameFemale}}'
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    protected static $titleMale = array('Raja', 'Tunku', 'Tengku', 'Megat', 'Engku', 'Ungku', 'Tun', 'Meor', 'Wan', 'Nik');

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    protected static $titleFemale = array('Puteri', 'Syarifah', 'Sharifah', 'Sayyidah', 'Tun', 'Wan');

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    private static $prefix = array('Dr.', 'Prof.', 'Y.Bhg', 'Y.A', 'Y.A.A', 'Y.B', 'Y.A.B', 'JP', 'Datuk', 'Dato\'',
        'Datuk Seri', 'Dato\' Sri', '');

    /**
     * @example 'Y.Bhg'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

    public static function secondPersonalNameMale()
    {
        return static::randomElement(static::$secondPersonalNameMale);
    }

    public static function secondPersonalNameFemale()
    {
        return static::randomElement(static::$secondPersonalNameFemale);
    }
}
