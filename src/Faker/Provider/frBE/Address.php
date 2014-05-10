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
        'rue', 'avenue', 'boulevard', 'chemin', 'chaussée'
    );

    /**
     * Source: http://fr.wikipedia.org/wiki/Ville_de_Belgique
     *
     * @var array
     */
    protected static $cityNames = array(
        'Aarschot','Alost (Aalst)','Andenne','Antoing','Anvers (Antwerpen)','Arlon','Ath','Audenarde (Oudenaarde)','Bastogne','Beaumont','Beauraing','Beringen','Bilzen','Binche',
        'Blankenberge','Bouillon','Braine-le-Comte','Bree','Bruges (Brugge)','Bruxelles','Charleroi','Châtelet','Chièvres','Chimay','Chiny','Ciney','Comines-Warneton','Courtrai (Kortrijk)',
        'Couvin','Damme','Deinze','Diest','Dilsen-Stokkem','Dinant','Dixmude (Diksmuide)','Durbuy','Eeklo','Enghien','Eupen','Fleurus','Florenville','Fontaine-l\'Évêque','Fosses-la-Ville',
        'Furnes (Veurne)','Gand (Gent)','Geel','Gembloux','Genappe','Genk','Gistel','Grammont (Geraardsbergen)','Hal (Halle)','Halen','Hamont-Achel','Hannut','Harelbeke','Hasselt',
        'Herck-la-Ville (Herk-de-Stad)','Herentals','Herstal','Herve','Hoogstraten','Houffalize','Huy','Izegem','Jodoigne','La Louvière','La Roche-en-Ardenne','Landen','Léau (Zoutleeuw)',
        'Le Rœulx','Lessines','Leuze-en-Hainaut','Liège','Lierre (Lier)','Limbourg','Lokeren','Lommel','Looz (Borgloon)','Lo-Reninge','Louvain (Leuven)','Maaseik','Malines (Mechelen)',
        'Malmedy','Marche-en-Famenne','Menin (Menen)','Messines (Mesen)','Mons','Montaigu-Zichem (Scherpenheuvel-Zichem)','Mortsel','Mouscron','Namur','Neufchâteau','Nieuport (Nieuwpoort)',
        'Ninove','Nivelles','Ostende (Oostende)','Ottignies-Louvain-la-Neuve','Oudenburg','Peer','Péruwelz','Philippeville','Poperinge','Renaix (Ronse)','Rochefort','Roulers (Roeselare)',
        'Saint-Ghislain','Saint-Hubert','Saint-Nicolas (Sint-Niklaas)','Saint-Trond (Sint-Truiden)','Saint-Vith (Sankt Vith)','Seraing','Soignies','Stavelot','Termonde (Dendermonde)','Thuin',
        'Tielt','Tirlemont (Tienen)','Tongres (Tongeren)','Torhout','Tournai','Turnhout','Verviers','Vilvorde (Vilvoorde)','Virton','Visé','Walcourt','Waregem','Waremme','Wavre','Wervik',
        'Ypres (Ieper)','Zottegem'
    );

    protected static $region = array(
        'wallonne', 'flammande', 'Bruxelles-Capitale'
    );

    protected static $province = array(
        'Anvers', 'Limbourg', 'Flandre Orientale', 'Brabant Flamand', 'Flandre Occidentale',
        'Hainaut', 'Liège', 'Luxembourg', 'Namur', 'Brabant Wallon'
    );

    protected static $country = array(
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Bermudes (Les)', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Bouvet (Îles)', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Cayman (Îles)', 'Chili', 'Chine (Rép. pop.)', 'Christmas (Île)', 'Chypre', 'Cocos (Îles)', 'Colombie', 'Comores', 'Cook (Îles)', 'Corée du Nord', 'Corée, Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\'Ivoire', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie', 'Falkland (Île)', 'Fidji (République des)', 'Finlande', 'France', 'Féroé (Îles)', 'Gabon',
        'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Géorgie du Sud et Sandwich du Sud (Îles)', 'Haïti', 'Heard et McDonald (Îles)', 'Honduras', 'Hong Kong', 'Hongrie', 'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit', 'La Barbad', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg', 'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives (Îles)', 'Mali', 'Malte', 'Mariannes du Nord (Îles)', 'Maroc', 'Marshall (Îles)', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Micronésie (États fédérés de)', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar', 'Namibie', 'Nauru', 'Nepal',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk (Îles)', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Pitcairn (Îles)', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou', 'Qatar', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. Dém. du Congo', 'République centrafricaine', 'République Dominicaine', 'République tchèque', 'Réunion (La)', 'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin (Rép. de)', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Svalbard et Jan Mayen (Îles)', 'Swaziland', 'Syrie', 'São Tomé et Príncipe (Rép.)', 'Sénégal', 'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad',
        'Territoire britannique de l\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Turks et Caïques (Îles)', 'Turquie', 'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Vatican (Etat du)', 'Venezuela', 'Vierges (Îles)', 'Vierges britanniques (Îles)', 'Vietnam', 'Wallis et Futuna (Îles)', 'Yemen', 'Yougoslavie', 'Zambie', 'Zaïre', 'Zimbabwe'
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
