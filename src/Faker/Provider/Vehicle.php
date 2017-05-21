<?php

namespace Faker\Provider;

class Vehicle extends Base
{
    const COUNTRY_UNITED_KINGDOM = 'GreatBritain';
    const COUNTRY_GERMANY = 'Germany';
    const COUNTRY_JAPAN = 'Japan';

    /**
     * @link https://en.wikipedia.org/wiki/List_of_automobile_manufacturers#G
     */
    protected static $madeInGermany = array(
        '9ff', 'Alpina', 'Artega', 'Audi', 'Bitter', 'BMW', 'Brabus', 'Büssing', 'Carlsson', 'Daimler', 'Gumpert',
        'Isdera', 'MAN', 'Mansory', 'Mercedes-Benz', 'Multicar', 'Neoplan', 'NSU', 'Opel', 'Porsche', 'Robur', 'RUF',
        'Smart', 'Volkswagen', 'Wiesmann', 'Yes'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_automobile_manufacturers#J
     */
    protected static $madeInJapan = array(
        'Autobacs Seven', 'Daihatsu', 'Datsun', 'Dome', 'Hino', 'Honda', 'Isuzu', 'Kawasaki', 'Mazda', 'Mitsubishi',
        'Mitsuoka', 'Nissan', 'Subaru', 'Suzuki', 'Toyota', 'Yamaha', 'Yello'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_automobile_manufacturers#U
     */
    protected static $madeInGreatBritain = array(
        'AC', 'Allard', 'Alvis', 'Ariel', 'Armstrong', 'Siddeley', 'Ascari', 'Aston Martin', 'Austin', 'Austin-Healey',
        'BAC', 'Bentley', 'Bowler', 'Bristol', 'British Leyland', 'Caterham', 'Daimler', 'Elva', 'Ginetta', 'GKD',
        'Gordon Keeble', 'Grinnall', 'Healey', 'Hillman', 'Humber', 'Jaguar', 'Javan', 'Jensen', 'Jowett', 'Lanchester',
        'Land Rover', 'Lister', 'Lotus', 'Marcos', 'McLaren', 'MG, Mini', 'Morgan', 'Morris', 'Noble', 'Radical',
        'Riley', 'Rolls Royce', 'Ronart Cars', 'Rover', 'Singer', 'Standard', 'Sunbeam', 'Triumph', 'Trojan', 'TVR',
        'Ultima Sports', 'Vauxhall', 'Wolseley'
    );

    /**
     * @param string $country
     *
     * @return string
     */
    public static function manufacturer($country = self::COUNTRY_GERMANY)
    {
        return static::randomElement(static::${"madeIn$country"});
    }
}
