<?php

namespace Faker\Provider\hr_HR;

class Address extends \Faker\Provider\Address
{
    protected static $streetPrefix = array(
        'Trg', 'Ulica', 'Avenija'
    );

    protected static $street = array(
        'Ante Starčevića', 'bana Jelačića', 'Ive Andrića', 'Gojka Šuška', 'Vladimira Nazora', 'Augusta Cesareca',
        'Josipa Kozarca', 'Ljudevita Gaja', 'Tina Ujevića', 'Kralja Tomislava', 'Krešimira Ćosića',
        'Hrvatskih velikana', 'Nikole Tesle'
    );

    protected static $streetNameFormats = array(
        '{{street}}',
        '{{streetPrefix}} {{street}}',
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );

    protected static $addressFormats = array(
        '{{streetAddress}}, {{postcode}} {{city}}',
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $cityNames = array(
        'Zagreb', 'Split', 'Rijeka', 'Osijek', 'Varaždin', 'Dubrovnik', 'Vinkovci', 'Županja', 'Ogulin', 'Pula',
        'Poreč', 'Čakovec', 'Zadar', 'Opatija', 'Hvar', 'Brač', 'Kutina', 'Virovitica', 'Ilok', 'Đakovo', 'Šibenik'
    );

    /**
     * @link https://github.com/umpirsky/country-list/blob/master/country/cldr/sr_Latn/country.php
     */
    protected static $country = array(
        'Andora', 'Ujedinjeni Arapski Emirati', 'Afganistan', 'Albanija', 'Armenija', 'Nizozemski Antili', 'Angola',
        'Antarktika', 'Argentina', 'Američka Samoa', 'Austrija', 'Australija', 'Azerbejdžan', 'Bosna i Hercegovina',
        'Barbados', 'Bangladeš', 'Belgija', 'Burkina Faso', 'Bugarska', 'Bahrein', 'Burundi', 'Benin', 'Bolivija',
        'Brazil', 'Bjelorusija', 'Belize', 'Kanada', 'Švicarska', 'Obala Bjelokosti', 'Čile', 'Kamerun', 'Kina',
        'Kolumbija', 'Kostarika', 'Srbija', 'Crna Gora', 'Kuba', 'Cipar', 'Češka', 'Njemačka', 'Danska',
        'Dominikanska Republika', 'Alžir', 'Ekvador', 'Estonija', 'Egipat', 'Španjolska', 'Etiopija', 'Finska',
        'Farski Otoci', 'Francuska', 'Ujedinjeno Kraljevstvo', 'Gruzija', 'Gana', 'Gibraltar', 'Gambija', 'Grčka',
        'Gvatemala', 'Honduras', 'Hrvatska', 'Mađarska', 'Indonezija', 'Irska', 'Izrael', 'Irak', 'Iran', 'Island',
        'Italija', 'Jamajka', 'Jordan', 'Japan', 'Sjeverna Koreja', 'Južna Koreja', 'Kuvajt', 'Kazahstan',
        'Lihtenštajn', 'Šri Lanka', 'Luksemburg', 'Libija', 'Maroko', 'Moldavija', 'Makedonija', 'Mali', 'Malta',
        'Meksiko', 'Malezija', 'Mozambik', 'Namibija', 'Nigerija', 'Nikaragva', 'Nizozemska', 'Norveška', 'Nepal',
        'Novi Zeland', 'Oman', 'Panama', 'Peru', 'Pakistan', 'Poljska', 'Portugal', 'Paragvaj', 'Katar', 'Rumunjska',
        'Rusija', 'Saudijska Arabija', 'Švedska', 'Singapur', 'Slovenija', 'Slovačka', 'San Marino', 'Senegal',
        'Tajland', 'Turska', 'Trinidad i Tobago', 'Ukrajina', 'Sjedinjene Američke Države', 'Urugvaj', 'Uzbekistan',
    );

    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }
}
