<?php

namespace Faker\Provider\fr_CD;

class Address extends \Faker\Provider\fr_FR\Address
{
    protected static $buildingNumber = array('###', '##', '#', '#a', '#b', '#c');

    protected static $streetPrefix = array('Rue', 'Avenue', 'Boulevard', 'Place');

    protected static $postcode = array('#######');

    /**
     * @var array
     * @link https://fr.wikipedia.org/wiki/Liste_des_villes_de_la_r%C3%A9publique_d%C3%A9mocratique_du_Congo
     */
    protected static $cityNames = array(
        "Bandundu", "Baraka", "Beni", "Boende", "Boma", "Bukavu", "Bunia", "Buta", "Butembo", "Gbadolite", "Gemena",
        "Goma", "Inongo", "Isiro", "Kabinda", "Kalemie", "Kamina", "Kananga", "Kenge", "Kikwit", "Kindu", "Kisangani",
        "Kinshasa", "Kolwezi", "Likasi", "Lisala", "Lubumbashi", "Lusambo", "Matadi", "Mbandaka", "Mbujimayi",
        "Muene-Ditu", "Tshikapa", "Uvira", "Zongo"
    );

    /**
     * @link https://en.wikipedia.org/wiki/Provinces_of_the_Democratic_Republic_of_the_Congo
     */
    protected static $provinces = array(
        array('KN' => 'KINSHASA'),
        array('KO' => 'KASAI ORIENTAL'),
        array('IT' => 'ITURI'),
        array('KC' => 'KONGO-CENTRAL'),
        array('HU' => 'HAUT-UELE'),
        array('KG' => 'KWANGO'),
        array('TO' => 'TSHOPO'),
        array('KU' => 'KWILU'),
        array('KC' => 'KASAI CENTRAL'),
        array('BU' => 'BAS-UELE'),
        array('MN' => 'MAI-NDOMBE'),
        array('NU' => 'NORD-UBANGI'),
        array('KA' => 'KASAI'),
        array('MO' => 'MONGALA'),
        array('LO' => 'LOMAMI'),
        array('SU' => 'SUD-UBANGI'),
        array('EQ' => 'EQUATEUR'),
        array('TU' => 'TSHUAPA'),
        array('TA' => 'TANGANYIKA'),
        array('SA' => 'SANKURU'),
        array('MA' => 'MANIEMA'),
        array('HL' => 'HAUT-LOMAMI'),
        array('SK' =>'SUD KIVU'),
        array('NK' => 'NORD KIVU'),
        array('LU' => 'LUALABA'),
        array('HK' => 'HAUT-KATANGA')
    );

    /**
     * @var array
     */
    protected static $cityFormats = array(
        '{{cityName}}',
    );

    /**
     * @var array
     */
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{cityName}}',
        '{{streetPrefix}} {{lastName}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );

    /**
     * Returns a random street prefix
     * @example Rue
     * @return string
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * Returns a random city name.
     * @example Lubumbashi
     * @return string
     */
    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    /**
     * Returns a province
     * @example array('HK' => 'HAUT-KATANGA')
     * @return array
     */
    public static function province()
    {
        return static::randomElement(static::$provinces);
    }

    /**
     * Returns the abbreviation of a province.
     * @return string
     */
    public static function provinceShort()
    {
        $province = static::province();
        return key($province);
    }

    /**
     * Returns the name of province.
     * @return string
     */
    public static function provinceName()
    {
        $province = static::province();
        return current($province);
    }
}
