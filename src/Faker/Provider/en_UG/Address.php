<?php

namespace Faker\Provider\en_UG;

class Address extends \Faker\Provider\Address
{
    protected static $region = array( 'Central', 'East', 'North', 'West' );

    /**
     * @link http://en.wikipedia.org/wiki/Category:Districts_of_Uganda
     */
    protected static $district = array(
        'Abim','Adjumani','Agago','Alebtong','Amolatar','Amudat','Amuria','Amuru','Apac','Arua',
        'Budaka','Bududa','Bugiri','Buhweju','Buikwe','Bukedea','Bukomansimbi','Bukwo','Bulambuli',
        'Buliisa','Bundibugyo','Bushenyi','Busia','Butaleja','Butambala','Buvuma','Buyende',
        'Dokolo',
        'Gomba','Gulu',
        'Hoima',
        'Ibanda','Iganga','Isingiro',
        'Jinja',
        'Kaabong','Kabale','Kabarole','Kaberamaido','Kalangala','Kaliro','Kalungu','Kampala','Kamuli',
        'Kamwenge','Kanungu','Kapchorwa','Kasese','Katakwi','Kayunga','Kibaale','Kiboga','Kibuku',
        'Kigezi','Kiruhura','Kiryandongo','Kisoro','Kitgum','Koboko','Kole','Kotido','Kumi','Kween',
        'Kyankwanzi','Kyegegwa','Kyenjojo',
        'Lamwo','Lira','Luuka','Luweero','Lwengo','Lyantonde',
        'Manafwa','Maracha','Maracha-Terego','Masaka','Masindi','Mayuge','Mbale','Mbarara','Mitooma',
        'Mityana','Moroto','Moyo','Mpigi','Mubende','Mukono',
        'Nakapiripirit','Nakaseke','Nakasongola','Namayingo','Namutumba','Napak','Nebbi','Ngora',
        'Ntoroko','Ntungamo','Nwoya',
        'Otuke','Oyam',
        'Pader','Pallisa',
        'Rakai','Rubirizi','Rukungiri',
        'Sembabule','Serere','Sheema','Sironko','Soroti',
        'Tororo',
        'Wakiso',
        'Yumbe',
        'Zombo'
    );

    public static function region()
    {
        return static::randomElement(static::$region);
    }
    
    /**
     * @example 'Kampala'
     */
    public static function district()
    {
        return static::randomElement(static::$district);
    }
}
