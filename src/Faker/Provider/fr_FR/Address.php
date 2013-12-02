<?php

namespace Faker\Provider\fr_FR;

class Address extends \Faker\Provider\Address
{
    protected static $citySuffix = array('Ville', 'Bourg', '-les-Bains', '-sur-Mer', '-la-Forêt', 'boeuf', 'nec', 'dan');
    protected static $streetPrefix = array('rue', 'rue', 'chemin', 'avenue', 'boulevard');
    protected static $cityFormats = array(
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}{{citySuffix}}',
        '{{lastName}}-sur-{{lastName}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}',
        '{{streetPrefix}} de {{lastName}}',
    );
    protected static $streetAddressFormats = array(
        '{{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
        '{{buildingNumber}}, {{streetName}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );

    protected static $buildingNumber = array('%', '%#', '%#', '%#', '%##');
    protected static $postcode = array('#####', '## ###');

    protected static $country = array(
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Bermudes (Les)', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Bouvet (Îles)', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Cayman (Îles)', 'Chili', 'Chine (Rép. pop.)', 'Christmas (Île)', 'Chypre', 'Cocos (Îles)', 'Colombie', 'Comores', 'Cook (Îles)', 'Corée du Nord', 'Corée, Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\'Ivoire', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie', 'Falkland (Île)', 'Fidji (République des)', 'Finlande', 'France', 'Féroé (Îles)', 'Gabon',
        'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Géorgie du Sud et Sandwich du Sud (Îles)', 'Haïti', 'Heard et McDonald (Îles)', 'Honduras', 'Hong Kong', 'Hongrie', 'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit', 'La Barbad', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg', 'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives (Îles)', 'Mali', 'Malte', 'Mariannes du Nord (Îles)', 'Maroc', 'Marshall (Îles)', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Micronésie (États fédérés de)', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar', 'Namibie', 'Nauru', 'Nepal',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk (Îles)', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Pitcairn (Îles)', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou', 'Qatar', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. Dém. du Congo', 'République centrafricaine', 'République Dominicaine', 'République tchèque', 'Réunion (La)', 'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin (Rép. de)', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Svalbard et Jan Mayen (Îles)', 'Swaziland', 'Syrie', 'São Tomé et Príncipe (Rép.)', 'Sénégal', 'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad',
        'Territoire britannique de l\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Turks et Caïques (Îles)', 'Turquie', 'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Vatican (Etat du)', 'Venezuela', 'Vierges (Îles)', 'Vierges britanniques (Îles)', 'Vietnam', 'Wallis et Futuna (Îles)', 'Yemen', 'Yougoslavie', 'Zambie', 'Zaïre', 'Zimbabwe'
    );

    private static $regions = array(
        'Alsace', 'Aquitaine', 'Auvergne', 'Bourgogne', 'Bretagne', 'Centre', 'Champagne-Ardenne',
        'Corse', 'Franche-Comté', 'Île-de-France', 'Languedoc-Roussillon', 'Limousin',
        'Lorraine', 'Midi-Pyrénées', 'Nord-Pas-de-Calais', 'Basse-Normandie', 'Haute-Normandie',
        'Pays-de-Loire', 'Picardie', 'Poitou-Charentes', "Provence-Alpes-Côte d'Azur", 'Rhone-Alpes',
        'Guadeloupe', 'Martinique', 'Guyane', 'Réunion', 'Saint-Pierre-et-Miquelon', 'Mayotte',
        'Saint-Barthélémy', 'Saint-Martin', 'Wallis-et-Futuna', 'Polynésie française', 'Nouvelle-Calédonie'
    );

    private static $departments = array(
        array('01' => 'Ain'), array('02' => 'Aisne'), array('03' => 'Allier'), array('04' => 'Alpes-de-Haute-Provence'), array('05' => 'Hautes-Alpes'),
        array('06' => 'Alpes-Maritimes'), array('07' => 'Ardèche'), array('08' => 'Ardennes'), array('09' => 'Ariège'), array('10' => 'Aube'),
        array('11' => 'Aude'), array('12' => 'Aveyron'), array('13' => 'Bouches-du-Rhône'), array('14' => 'Calvados'), array('15' => 'Cantal'),
        array('16' => 'Charente'), array('17' => 'Charente-Maritime'), array('18' => 'Cher'), array('19' => 'Corrèze'), array('2A' => 'Corse-du-Sud'),
        array('2B' => 'Haute-Corse'), array('21' => "Côte-d'Or"), array('22' => "Côtes-d'Armor"), array('23' => 'Creuse'), array('24' => 'Dordogne'),
        array('25' => 'Doubs'), array('26' => 'Drôme'), array('27' => 'Eure'), array('28' => 'Eure-et-Loir'), array('29' => 'Finistère'), array('30' => 'Gard'),
        array('31' => 'Haute-Garonne'), array('32' => 'Gers'), array('33' => 'Gironde'), array('34' => 'Hérault'), array('35' => 'Ille-et-Vilaine'),
        array('36' => 'Indre'), array('37' => 'Indre-et-Loire'), array('38' => 'Isère'), array('39' => 'Jura'), array('40' => 'Landes'), array('41' => 'Loir-et-Cher'),
        array('42' => 'Loire'), array('43' => 'Haute-Loire'), array('44' => 'Loire-Atlantique'), array('45' => 'Loiret'), array('46' => 'Lot'),
        array('47' => 'Lot-et-Garonne'), array('48' => 'Lozère'), array('49' => 'Maine-et-Loire'), array('50' => 'Manche'), array('51' => 'Marne'),
        array('52' => 'Haute-Marne'), array('53' => 'Mayenne'), array('54' => 'Meurthe-et-Moselle'), array('55' => 'Meuse'), array('56' => 'Morbihan'),
        array('57' => 'Moselle'), array('58' => 'Nièvre'), array('59' => 'Nord'), array('60' => 'Oise'), array('61' => 'Orne'), array('62' => 'Pas-de-Calais'),
        array('63' => 'Puy-de-Dôme'), array('64' => 'Pyrénées-Atlantiques'), array('65' => 'Hautes-Pyrénées'), array('66' => 'Pyrénées-Orientales'),
        array('67' => 'Bas-Rhin'), array('68' => 'Haut-Rhin'), array('69' => 'Rhône'), array('70' => 'Haute-Saône'), array('71' => 'Saône-et-Loire'),
        array('72' => 'Sarthe'), array('73' => 'Savoie'), array('74' => 'Haute-Savoie'), array('75' => 'Paris'), array('76' => 'Seine-Maritime'),
        array('77' => 'Seine-et-Marne'), array('78' => 'Yvelines'), array('79' => 'Deux-Sèvres'), array('80' => 'Somme'), array('81' => 'Tarn'),
        array('82' => 'Tarn-et-Garonne'), array('83' => 'Var'), array('84' => 'Vaucluse'), array('85' => 'Vendée'), array('86' => 'Vienne'),
        array('87' => 'Haute-Vienne'), array('88' => 'Vosges'), array('89' => 'Yonne'), array('90' => 'Territoire de Belfort'), array('91' => 'Essonne'),
        array('92' => 'Hauts-de-Seine'), array('93' => 'Seine-Saint-Denis'), array('94' => 'Val-de-Marne'), array('95' => "Val-d'Oise"),
        array('971' => 'Guadeloupe'), array('972' => 'Martinique'), array('973' => 'Guyane'), array('974' => 'La Réunion'), array('976' => 'Mayotte')
     );

     /**
     * @example 'rue'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * Randomly returns a french region.
     *
     * @example 'Guadeloupe'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::$regions);
    }

    /**
     * Randomly returns a french department ('departmentNumber' => 'departmentName').
     *
     * @example array('2B' => 'Haute-Corse')
     *
     * @return array
     */
    public static function department()
    {
        return static::randomElement(static::$departments);
    }

    /**
     * Randomly returns a french department name.
     *
     * @example 'Ardèche'
     *
     * @return string
     */
    public static function departmentName()
    {
        $randomDepartmentName = array_values(static::department());

        return $randomDepartmentName[0];
    }

    /**
     * Randomly returns a french department number.
     *
     * @example '59'
     *
     * @return string
     */
    public static function departmentNumber()
    {
        $randomDepartmentNumber = array_keys(static::department());

        return $randomDepartmentNumber[0];
    }
}
