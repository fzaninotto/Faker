<?php

namespace Faker\Provider\fr_BE;

class Address extends \Faker\Provider\Address
{
    protected static $postcode = array('####');

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );

    protected static $streetNameFormats = array('{{streetSuffix}} {{lastName}}');

    protected static $cityFormats = array('{{cityName}}');

    protected static $addressFormats = array(
        "{{streetAddress}}\n {{postcode}} {{city}}",
    );

    protected static $streetSuffix = array(
        'rue', 'avenue', 'boulevard', 'chemin', 'chaussée', 'impasse', 'place'
    );

    /**
     * Source: http://fr.wikipedia.org/wiki/Ville_de_Belgique
     *
     * @var array
     */
    protected static $cityNames = array(
        'Aarschot','Alost','Andenne','Antoing','Anvers','Arlon','Ath','Audenarde','Bastogne','Beaumont','Beauraing','Beringen','Bilzen','Binche',
        'Blankenberge','Bouillon','Braine-le-Comte','Bree','Bruges','Bruxelles','Charleroi','Châtelet','Chièvres','Chimay','Chiny','Ciney','Comines-Warneton','Courtrai',
        'Couvin','Damme','Deinze','Diest','Dilsen-Stokkem','Dinant','Dixmude','Durbuy','Eeklo','Enghien','Eupen','Fleurus','Florenville','Fontaine-l\'Évêque','Fosses-la-Ville',
        'Furnes','Gand','Geel','Gembloux','Genappe','Genk','Gistel','Grammont','Hal','Halen','Hamont-Achel','Hannut','Harelbeke','Hasselt',
        'Herck-la-Ville','Herentals','Herstal','Herve','Hoogstraten','Houffalize','Huy','Izegem','Jodoigne','La Louvière','La Roche-en-Ardenne','Landen','Léau',
        'Le Rœulx','Lessines','Leuze-en-Hainaut','Liège','Lierre','Limbourg','Lokeren','Lommel','Looz','Lo-Reninge','Louvain','Maaseik','Malines',
        'Malmedy','Marche-en-Famenne','Menin','Messines','Mons','Montaigu-Zichem','Mortsel','Mouscron','Namur','Neufchâteau','Nieuport',
        'Ninove','Nivelles','Ostende','Ottignies-Louvain-la-Neuve','Oudenburg','Peer','Péruwelz','Philippeville','Poperinge','Renaix','Rochefort','Roulers',
        'Saint-Ghislain','Saint-Hubert','Saint-Nicolas','Saint-Trond','Saint-Vith','Seraing','Soignies','Stavelot','Termonde','Thuin',
        'Tielt','Tirlemont','Tongres','Torhout','Tournai','Turnhout','Verviers','Vilvorde','Virton','Visé','Walcourt','Waregem','Waremme','Wavre','Wervik',
        'Ypres','Zottegem'
    );

    protected static $region = array(
        'wallonne', 'flammande', 'Bruxelles-Capitale'
    );

    protected static $province = array(
        'Anvers', 'Limbourg', 'Flandre orientale', 'Brabant flamand', 'Flandre occidentale',
        'Hainaut', 'Liège', 'Luxembourg', 'Namur', 'Brabant wallon'
    );

    protected static $country = array(
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Les Bermudes', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Îles Bouvet', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Îles Cayman', 'Chili', 'Chine', 'Île Christmas', 'Chypre', 'Îles Cocos', 'Colombie', 'Comores', 'Îles Cook', 'Corée du Nord', 'Corée du Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\'Ivoire', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie', 'Île Falkland', 'République des Fidji', 'Finlande', 'France', 'Îles Féroé', 'Gabon',
        'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Îles Géorgie du Sud et Sandwich du Sud', 'Haïti', 'Îles Heard et McDonald', 'Honduras', 'Hong Kong', 'Hongrie', 'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit', 'La Barbad', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg', 'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Îles Maldives', 'Mali', 'Malte', 'Îles Mariannes du Nord', 'Maroc', 'Îles Marshall', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'États fédérés de Micronésie', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar', 'Namibie', 'Nauru', 'Nepal',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Îles Norfolk', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Îles Pitcairn', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou', 'Qatar', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. dém. du Congo', 'République centrafricaine', 'République dominicaine', 'République tchèque', 'La Réunion', 'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Îles Svalbard et Jan Mayen', 'Swaziland', 'Syrie', 'São Tomé et Príncipe', 'Sénégal', 'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad',
        'Territoire britannique de l\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Îles Turks et Caïques', 'Turquie', 'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Vatican', 'Venezuela', 'Îles Vierges', 'Îles Vierges britanniques', 'Vietnam', 'Îles Wallis et Futuna', 'Yemen', 'Yougoslavie', 'Zambie', 'Zaïre', 'Zimbabwe'
    );

    /**
     * Randomly returns a belgian region.
     *
     * @example 'wallonne'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::$region);
    }

    /**
     * Randomly returns a belgian province.
     *
     * @example 'Hainaut'
     *
     * @return string
     */
    public static function province()
    {
        return static::randomElement(static::$province);
    }

    /**
     * @see parent
     */
    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }
}
