<?php

namespace Faker\Provider\tr_TR;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Ali', 'Alp', 'Armağan', 'Atakan', 'Aşkın', 'Baran', 'Bartu', 'Berk', 'Berkay', 'Berke', 'Bora', 'Burak', 'Canberk',
        'Cem', 'Deniz', 'Efe', 'Ege', 'Ege', 'Emir', 'Emirhan', 'Emre', 'Ferid', 'Göktürk', 'Görkem', 'Güney',
        'Kağan', 'Kerem', 'Koray', 'Kutay', 'Mert', 'Onur', 'Polat', 'Rüzgar', 'Sarp', 'Serhan', 'Toprak', 'Tuna',
        'Türker', 'Utku', 'Yağız', 'Yiğit', 'Çınar', 'Derin', 'Arhan', 'Meriç', 'Barlas', 'Dağhan', 'Doruk', 'Çağan',
    );

    protected static $firstNameFemale = array(
        'Ada', 'Aliye', 'Derin', 'Fatimah', 'Zeynep', 'Arın', 'Meriç', 'Naila', 'Rasha', 'Sarila'
    );

    protected static $lastName = array(
        'Emirhanlı', 'Cemşid', 'Ege', 'Çağan', 'Sarp', 'Kerem', 'Deniz', 'Yağız', 'Yiğit', 'Emre', 'Kağan',
        'Mert', 'Görkem', 'Burak', 'Meriç', 'Berke', 'Kutay', 'Tuna', 'Baran', 'Efe', 'Onur', 'Doruk', 'Bartu',
        'Emirhan', 'Alp', 'Arhan', 'Bora', 'Canberk', 'Mövsümov', 'Dağhan', 'Rüzgar', 'Derin', 'Toprak', 'Arın',
        'Aşkın', 'Çınar', 'Armağan', 'Derin', 'Koray', 'Barlas', 'Ada', 'Atakan', 'Berk', 'Polat', 'Göktürk',
        'Serhan', 'Ege', 'Utku', 'Berkay', 'Güney', 'İrtegün', 'Şentürk', 'Şükür'
    );

    protected static $title = array('Doç. Dr.', 'Dr.', 'Prof. Dr.');

    public function title($gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex Turkish title
     */
    public static function titleMale()
    {
        return static::randomElement(static::$title);
    }

    /**
     * replaced by specific unisex Turkish title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }
}
