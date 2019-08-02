<?php

namespace Faker\Provider\fr_CA;

class Address extends \Faker\Provider\fr_FR\Address
{
    protected static $postcode = array('?#? #?#', '?#?-#?#', '?#?#?#');

    protected static $validpostcode = array('?#? #?#');

    protected static $postcodeFirstLetters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','X','Y');

    protected static $postcodeLetters = array('A','B','C','E','G','H','J','K','L','M','N','P','R','S','T','V','W','X','Y','Z');

    protected static $cityPrefix = array('Saint-', 'Sainte-', 'St-', 'Ste-');

    /**
     * The suffixes come from this list of communities in Québec
     * http://fr.wikipedia.org/wiki/Liste_des_municipalités_locales_du_Québec
     */
    protected static $citySuffix = array(
        // Bas-Saint-Laurent
        '-des-Sables', '-sur-Mer', '-des-Neiges', '-des-Sept-Douleurs', '-du-Portage', '-du-Loup', '-des-Lacs', '-de-Lessard',
        '-de-Kamourasca', '-de-Témiscouata', '-de-Ladrière', '-de-Rimouski', '-de-Rivière-du-Loup', '-du-Lac', '-du-Ha! Ha!',
        '-du-Lac-Long', '-de-Rioux', '-du-Squatec', '-de-Métis', '-d\'Ixworth', '-de-la-Croix', '-de-Matane', '-du-Lac-Humqui',
        '-de-Mérici', '-de-la-Pocatière', '-sur-le-Lac',
        // Saguenay–Lac-Saint-Jean
        '-de-Lorette', '-du-Lac-Saint-Jean', '-de-Bourget', '-de-Falardeau', '-les-Plaines', '-de-Sales', '-de-Taillon',
        '-de-Milot', '-du-Nord',
        // Québec (Capitale-Nationale)
        '-aux-Coudres', '-des-Anges', '-de-Desmaures', '-les-Neiges', '-de-l\'Île-d\'Orléans', '-de-Valcartier',
        '-de-Portneuf', '-du-Cap-Tourmente', '-des-Carrières', '-des-Caps', '-de-Beaupré', '-de-Laval', '-de-la-Jacques-Cartier',
        '-d\'Auvergne',
        // Mauricie
        '-de-Monteauban', '-du-Mont-Carmel', '-des-Monts', '-de-Maskinongé', '-de-Caxton', '-des-Grès', '-le-Grand',
        '-de-Vincennes', '-du-Parc', '-de-Champlain', '-de-Mékinac', '-de-Prémont', '-de-la-Pérade', '-de-Batiscan',
        // Estrie (Cantons de l'est)
        '-Ouest', '-Est', '-Sud', '-Nord', '-des-Bois', '-de-Woburn', '-de-Brompton', '-de-Bolton', '-de-Windsor',
        '-de-Clifton', '-de-Paquette', '-de-la-Rochelle', '-de-Hatley', '-de-Whitton',
        // Montréal
        '-de-Bellevue',
        // Chaudière-Appalaches
        '-de-Buckland', '-des-Pins', '-du-Rosaire', '-d\'Issoudun', '-de-Jésus', '-d\'Irlande', '-de-l\'Isle-aux-Grues',
        '-de-Tilly', '-de-Lellis', '-de-Bellechasse', '-de-Lessard', '-de-L\'Islet', '-de-Lotbinière', '-de-Beauce',
        '-de-Forsyth', '-de-Panet', '-de-la-Rivière-du-Sud', '-de-Dorset', '-de-Shenley', '-de-Leeds', '-de-Wolfestown',
        '-de-Joly', '-de-Brébeuf', '-de-Coleraine', '-des-Érables', '-Bretenières', '-de-Lauzon', '-de-Standon',
        '-de-Gonzague', '-de-Beaurivage', '-de-Dorchester', '-de-Cranbourne', '-de-Broughton', '-de-la-Rivière-du-Sud',
        '-des-Aulnaies', '-les-Mines', '-de-Lotbinière', '-de-Patton', '-sur-Rivière-du-Sud', '-de-Beauregard', '-de-Watford'
    );

    /**
     * @example 'Saint-Marc-des-Carrières' or 'Sainte-Monique'
     */
    protected static $cityFormats = array(
        '{{cityPrefix}}{{firstName}}{{citySuffix}}',
        '{{cityPrefix}}{{firstName}}',
    );

    protected static $buildingNumber = array('#####', '####', '###', '##', '#');

    protected static $streetSuffix = array(
        'Autoroute', 'Avenue', 'Boulevard', 'Chemin', 'Route', 'Rue', 'Pont'
    );

    /**
     * @example 'Avenue Bolduc'
     */
    protected static $streetNameFormats = array(
        '{{streetSuffix}} {{firstName}}',
        '{{streetSuffix}} {{lastName}}'
    );

    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        '{{buildingNumber}} {{streetName}} {{secondaryAddress}}',
    );

    protected static $addressFormats = array(
        "{{streetAddress}}, {{city}}, {{stateAbbr}} {{postcode}}",
    );

    protected static $secondaryAddressFormats = array('Apt. ###', 'Suite ###', 'Bureau ###');

    protected static $state = array(
        'Alberta', 'Colombie-Britannique', 'Manitoba', 'Nouveau-Brunswick', 'Terre-Neuve-et-Labrador', 'Nouvelle-Écosse', 'Ontario', 'Île-du-Prince-Édouard', 'Québec', 'Saskatchewan'
    );

    protected static $stateAbbr = array(
        'AB', 'BC', 'MB', 'NB', 'NL', 'NS', 'ON', 'PE', 'QC', 'SK'
    );

    /**
     * @example 'Saint-'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example '-des-Sables'
     */
    public static function citySuffix()
    {
        return static::randomElement(static::$citySuffix);
    }

    /**
     * @example 'Bureau 500'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Québec'
     */
    public static function province()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'QC'
     */
    public static function provinceAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }

    /**
     * @example 'Québec'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }

    /**
     * @example 'QC'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::$stateAbbr);
    }

    /**
     * Returns a postalcode-safe first letter
     * @example A1B 2C3
     */
    public static function randomPostcodeFirstLetter()
    {
        return static::randomElement(static::$postcodeFirstLetters);
    }

    /**
     * Returns a postalcode-safe letter
     * @example A1B 2C3
     */
    public static function randomPostcodeLetter()
    {
        return static::randomElement(static::$postcodeLetters);
    }

    /**
     * @example A1B 2C3
     * @example A1B-2C3
     * @example A1B2C3
     */
    public static function postcode()
    {
        $string = static::randomElement(static::$postcode);

        $string = preg_replace_callback('/\#/u', 'static::randomDigit', $string);
        $string = preg_replace_callback('/\?/u', 'static::randomPostcodeLetter', $string);

        return static::toUpper($string);
    }

    /**
     * Return a postal code that respects the Canadian Post standards
     * @example A1B 2C3
     */
    public static function validpostcode()
    {
        $string = static::randomElement(static::$validpostcode);

        $string = preg_replace_callback('/\#/u', 'static::randomDigit', $string);
        $string = preg_replace_callback('/\?/u', 'static::randomPostcodeLetter', $string);
        $string = preg_replace_callback('/^./', 'static::randomPostcodeFirstLetter', $string);

        return static::toUpper($string);
    }
}
