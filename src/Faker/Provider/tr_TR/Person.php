<?php

namespace Faker\Provider\tr_TR;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}}'
    );

    protected static $firstName = array(
        'Emir', 'Cem', 'Ege', 'Çağan', 'Sarp', 'Kerem', 'Ferid', 'Zeynep', 'Deniz', 'Yağız', 'Yiğit', 'Emre', 'Kağan',
        'Mert', 'Görkem', 'Burak', 'Meriç', 'Berke', 'Kutay', 'Tuna', 'Baran', 'Efe', 'Onur', 'Doruk', 'Bartu',
        'Emirhan', 'Alp', 'Arhan', 'Bora', 'Canberk', 'Dağhan', 'Rüzgar', 'Derin', 'Toprak', 'Arın',
        'Aşkın', 'Çınar', 'Armağan', 'Derin', 'Koray', 'Barlas', 'Ada', 'Atakan', 'Berk', 'Ali', 'Polat', 'Göktürk',
        'Serhan', 'Ege', 'Utku', 'Berkay', 'Güney', 'Türker'
    );

    protected static $lastName = array(
        'Emirhanlı', 'Cemşid', 'Ege', 'Çağan', 'Sarp', 'Kerem', 'Deniz', 'Yağız', 'Yiğit', 'Emre', 'Kağan',
        'Mert', 'Görkem', 'Burak', 'Meriç', 'Berke', 'Kutay', 'Tuna', 'Baran', 'Efe', 'Onur', 'Doruk', 'Bartu',
        'Emirhan', 'Alp', 'Arhan', 'Bora', 'Canberk', 'Mövsümov', 'Dağhan', 'Rüzgar', 'Derin', 'Toprak', 'Arın',
        'Aşkın', 'Çınar', 'Armağan', 'Derin', 'Koray', 'Barlas', 'Ada', 'Atakan', 'Berk', 'Polat', 'Göktürk',
        'Serhan', 'Ege', 'Utku', 'Berkay', 'Güney', 'İrtegün', 'Şentürk', 'Şükür'
    );

    private static $prefix = array('Doç. Dr.', 'Dr.', 'Prof. Dr.');

    /**
     * @example 'Mrs.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }
}
