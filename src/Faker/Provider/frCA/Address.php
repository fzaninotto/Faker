<?php

namespace Faker\Provider\fr_CA;

class Address extends \Faker\Provider\Address
{
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

    protected static $postcode = array('?#? #?#', '?#?#?#');

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
        'Alberta', 'Colombie-Brittanique', 'Manitoba', 'Nouveau-Brunswick', 'Terre-Neuve-et-Labrador', 'Nouvelle-Écosse', 'Ontario', 'Île-du-Prince-Édouard', 'Québec', 'Saskatchewan'
    );

    protected static $stateAbbr = array(
        'AB', 'BC', 'MB', 'NB', 'NL', 'NS', 'ON', 'PE', 'QC', 'SK'
    );

    /**
     * This list is the same as in \Faker\Provider\fr_FR\Address.php
     */
    protected static $country = array(
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Bermudes (Les)', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Bouvet (Îles)', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi',
        'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Cayman (Îles)', 'Chili', 'Chine (Rép. pop.)', 'Christmas (Île)', 'Chypre', 'Cocos (Îles)', 'Colombie', 'Comores', 'Cook (Îles)', 'Corée du Nord', 'Corée, Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\'Ivoire',
        'Danemark', 'Djibouti', 'Dominique',
        'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie',
        'Falkland (Île)', 'Fidji (République des)', 'Finlande', 'France', 'Féroé (Îles)',
        'Gabon', 'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Géorgie du Sud et Sandwich du Sud (Îles)',
        'Haïti', 'Heard et McDonald (Îles)', 'Honduras', 'Hong Kong', 'Hongrie',
        'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie',
        'Jamaïque', 'Japon', 'Jordanie',
        'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit',
        'La Barbade', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg',
        'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives (Îles)', 'Mali', 'Malte', 'Mariannes du Nord (Îles)', 'Maroc', 'Marshall (Îles)', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Micronésie (États fédérés de)', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar',
        'Namibie', 'Nauru', 'Nepal', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk (Îles)', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande',
        'Oman', 'Ouganda', 'Ouzbékistan',
        'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Pitcairn (Îles)', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou',
        'Qatar',
        'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. Dém. du Congo', 'République centrafricaine', 'République Dominicaine', 'République tchèque', 'Réunion (La)',
        'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin (Rép. de)', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Svalbard et Jan Mayen (Îles)', 'Swaziland', 'Syrie', 'São Tomé et Príncipe (Rép.)', 'Sénégal',
        'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad', 'Territoire britannique de l\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Turks et Caïques (Îles)', 'Turquie', 'Tuvalu',
        'Ukraine', 'Uruguay',
        'Vanuatu', 'Vatican (Etat du)', 'Venezuela', 'Vierges (Îles)', 'Vierges britanniques (Îles)', 'Vietnam',
        'Wallis et Futuna (Îles)',
        'Yemen', 'Yougoslavie',
        'Zambie', 'Zaïre', 'Zimbabwe'
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
}
