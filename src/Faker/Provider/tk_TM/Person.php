<?php

namespace Faker\Provider\tk_TM;

class Person extends \Faker\Provider\Person
{
    /**
     * @var array Turkmen person name formats.
     */
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}a',
        '{{firstNameFemale}} {{lastName}}a',
        '{{firstNameFemale}} {{lastName}}a',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}a',
    );

    /**
     * @var array Turkmen first names.
     */
    protected static $firstNameMale = array(
        'Ahmet', 'Aly', 'Arslan', 'Atajan', 'Babajan', 'Bagtyýar', 'Batyr', 'Baýram', 'Bäşim', 'Begenç',
        'Çary', 'Daňatar', 'Diýar', 'Döwlet', 'Didar', 'Durdy', 'Jepbar', 'Emin', 'Erkin', 'Gandym',
        'Gowşut', 'Guwanç', 'Haýdar', 'Hekim', 'Hydyr', 'Ilaman', 'Isa', 'Jepbar', 'Jeýhun', 'Jora',
        'Kerim', 'Kuwwat', 'Mahmyt', 'Merdan', 'Mergen', 'Meret', 'Nagmat', 'Nazar', 'Nepes', 'Nowruz',
        'Nury', 'Öwez', 'Pena', 'Polat', 'Rahym', 'Rahman', 'Rejep', 'Resul', 'Röwşen', 'Sadyk', 'Sapar',
        'Serdar', 'Süleýman', 'Şöhrat', 'Tahyr', 'Tirkiş', 'Töre', 'Ylýas', 'Ýagmyr', 'Ýunus', 'Ýusup',
    );

    /**
     * @var array Turkmen first names.
     */
    protected static $firstNameFemale = array(
        'Abadan', 'Akjagül', 'Akjemal', 'Altyn', 'Aýjemal', 'Aýna', 'Aýnur', 'Aýsoltan', 'Aýşagül',
        'Bahar', 'Bägül', 'Bibi', 'Bike', 'Çemen', 'Çynar', 'Dursun', 'Eneş', 'Göwher', 'Gözel',
        'Gunça', 'Gülnar', 'Hatyja', 'Jahan', 'Jeren', 'Laçyn', 'Läle', 'Leýla', 'Mahym', 'Maral', 'Maýa',
        'Maýsa', 'Merjen', 'Näzik', 'Nurgül', 'Meňli', 'Oguljan', 'Owadan', 'Pamyk', 'Selbi', 'Soltan',
        'Suraý', 'Şemşat', 'Şirin', 'Täzegül', 'Togtagül', 'Zöhre',
    );

    /**
     * @var array Turkmen last names.
     */
    protected static $lastName = array(
        'Ahmedow', 'Akmyradow', 'Allagulyýew', 'Alyýew', 'Amangeldiýew', 'Atajanow', 'Babajanow',
        'Baýramow', 'Bäşimow', 'Çaryýew', 'Döwletow', 'Durdyýew', 'Gowşudow', 'Hallyýew', 'Haýdarow',
        'Hemraýew', 'Hydyrow', 'Ilamanow', 'Işanow', 'Jepbarow', 'Joraýew', 'Jumaýew', 'Kadyrow',
        'Kerimow', 'Mahmydow', 'Meredow', 'Nazarow', 'Nepesow', 'Nowruzow', 'Nuryýew', 'Öwezow',
        'Rahymow', 'Rahmanow', 'Rejepow', 'Resulow', 'Saparow', 'Soltanow', 'Töräýew', 'Ylýasow',
        'Ýagmyrow', 'Ýusupow',
    );

    protected static $title = array('Dos. Dr.', 'Dr.', 'Prof. Dr.');

    public function title($gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex Turkmen title
     */
    public static function titleMale()
    {
        return static::randomElement(static::$title);
    }

    /**
     * replaced by specific unisex Turkmen title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }
}
