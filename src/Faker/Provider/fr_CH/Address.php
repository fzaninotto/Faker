<?php

namespace Faker\Provider\fr_CH;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#', '#a', '#b', '#c');

    protected static $streetPrefix = array('Rue', 'Rue', 'Chemin', 'Avenue', 'Boulevard', 'Place', 'Impasse');

    protected static $postcode = array('####');

    /**
     * @link https://fr.wikipedia.org/wiki/Villes_de_Suisse
     */
    protected static $cityNames = array(
        'Aarau', 'Aarberg', 'Aarburg', 'Agno', 'Aigle VD', 'Altdorf', 'Altstätten', 'Appenzell', 'Arbon', 'Ascona', 'Aubonne', 'Avenches',
        'Baden', 'Bad Zurzach', 'Bâle', 'Bellinzone', 'Berne', 'Beromünster', 'Berthoud', 'Biasca', 'Bienne', 'Bischofszell', 'Boudry', 'Bourg-Saint-Pierre', 'Bremgarten AG', 'Brigue', 'Brugg', 'Bulle', 'Bülach',
        'Cerlier', 'Châtel-Saint-Denis',
        'Coire', 'Conthey', 'Coppet', 'Cossonay', 'Croglio', 'Cudrefin', 'Cully',
        'Delémont', 'Diessenhofen', 'Échallens', 'Eglisau', 'Elgg', 'Estavayer-le-Lac',
        'Frauenfeld', 'Fribourg',
        'Genève', 'Glaris', 'Gordola', 'Grandcour', 'Grandson', 'Greifensee', 'Grüningen', 'Gruyères',
        'Hermance', 'Huttwil',
        'Ilanz',
        'Kaiserstuhl', 'Klingnau',
        'La Chaux-de-Fonds', 'La Neuveville', 'La Sarraz', 'La Tour-de-Peilz', 'La Tour-de-Trême', 'Le Landeron', 'Les Clées', 'Lachen', 'Langenthal', 'Laufon', 'Laufenburg', 'Laupen', 'Lausanne', 'Lenzburg', 'Loèche', 'Lichtensteig', 'Liestal', 'Locarno', 'Losone', 'Lugano', 'Lutry', 'Lucerne',
        'Maienfeld', 'Martigny', 'Mellingen', 'Mendrisio', 'Monthey', 'Morat', 'Morcote', 'Morges', 'Moudon', 'Moutier', 'Münchenstein',
        'Neuchâtel', 'Neunkirch', 'Nidau', 'Nyon',
        'Olten', 'Orbe', 'Orsières',
        'Payerne', 'Porrentruy',
        'Rapperswil', 'Regensberg', 'Rheinau', 'Rheineck', 'Rheinfelden', 'Riva San Vitale', 'Rolle', 'Romainmôtier', 'Romont FR', 'Rorschach', 'Rue',
        'Saillon', 'Saint-Maurice', 'Saint-Prex', 'Saint-Ursanne', 'Sala', 'Saint-Gall', 'Sargans', 'Sarnen', 'Schaffhouse', 'Schwytz', 'Sembrancher', 'Sempach', 'Sion', 'Soleure', 'Splügen', 'Stans', 'Steckborn', 'Stein am Rhein', 'Sursee',
        'Thoune', 'Thusis',
        'Unterseen', 'Uznach',
        'Valangin', 'Vevey', 'Villeneuve', 'Viège',
        'Waldenburg', 'Walenstadt', 'Wangen an der Aare', 'Werdenberg', 'Wiedlisbach', 'Wil', 'Willisau', 'Winterthour',
        'Yverdon-les-Bains',
        'Zofingue', 'Zoug', 'Zurich'
    );

    /**
     * @link https://fr.wikipedia.org/wiki/Canton_suisse
     */
    protected static $canton = array(
        array('AG' => 'Argovie'),
        array('AI' => 'Appenzell Rhodes-Intérieures'),
        array('AR' => 'Appenzell Rhodes-Extérieures'),
        array('BE' => 'Berne'),
        array('BL' => 'Bâle-Campagne'),
        array('BS' => 'Bâle-Ville'),
        array('FR' => 'Fribourg'),
        array('GE' => 'Genève'),
        array('GL' => 'Glaris'),
        array('GR' => 'Grisons'),
        array('JU' => 'Jura'),
        array('LU' => 'Lucerne'),
        array('NE' => 'Neuchâtel'),
        array('NW' => 'Nidwald'),
        array('OW' => 'Obwald'),
        array('SG' => 'Saint-Gall'),
        array('SH' => 'Schaffhouse'),
        array('SO' => 'Soleure'),
        array('SZ' => 'Schwytz'),
        array('TG' => 'Thurgovie'),
        array('TI' => 'Tessin'),
        array('UR' => 'Uri'),
        array('VD' => 'Vaud'),
        array('VS' => 'Valais'),
        array('ZG' => 'Zoug'),
        array('ZH' => 'Zurich')
    );

    protected static $country = array(
        'Afghanistan', 'Afrique du sud', 'Albanie', 'Algérie', 'Allemagne', 'Andorre', 'Angola', 'Anguilla', 'Antarctique', 'Antigua et Barbuda', 'Antilles néerlandaises', 'Arabie saoudite', 'Argentine', 'Arménie', 'Aruba', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Belgique', 'Belize', 'Benin', 'Bermudes (Les)', 'Bhoutan', 'Biélorussie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Bouvet (Îles)', 'Brunei', 'Brésil', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun', 'Canada', 'Cap Vert', 'Cayman (Îles)', 'Chili', 'Chine (Rép. pop.)', 'Christmas (Île)', 'Chypre', 'Cocos (Îles)', 'Colombie', 'Comores', 'Cook (Îles)', 'Corée du Nord', 'Corée, Sud', 'Costa Rica', 'Croatie', 'Cuba', 'Côte d\'Ivoire', 'Danemark', 'Djibouti', 'Dominique', 'Égypte', 'El Salvador', 'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Ethiopie', 'Falkland (Île)', 'Fidji (République des)', 'Finlande', 'France', 'Féroé (Îles)', 'Gabon',
        'Gambie', 'Ghana', 'Gibraltar', 'Grenade', 'Groenland', 'Grèce', 'Guadeloupe', 'Guam', 'Guatemala', 'Guinée', 'Guinée Equatoriale', 'Guinée-Bissau', 'Guyane', 'Guyane française', 'Géorgie', 'Géorgie du Sud et Sandwich du Sud (Îles)', 'Haïti', 'Heard et McDonald (Îles)', 'Honduras', 'Hong Kong', 'Hongrie', 'Îles Mineures Éloignées des États-Unis', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie', 'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweit', 'La Barbad', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Libye', 'Libéria', 'Liechtenstein', 'Lithuanie', 'Luxembourg', 'Macau', 'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives (Îles)', 'Mali', 'Malte', 'Mariannes du Nord (Îles)', 'Maroc', 'Marshall (Îles)', 'Martinique', 'Maurice', 'Mauritanie', 'Mayotte', 'Mexique', 'Micronésie (États fédérés de)', 'Moldavie', 'Monaco', 'Mongolie', 'Montserrat', 'Mozambique', 'Myanmar', 'Namibie', 'Nauru', 'Nepal',
        'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk (Îles)', 'Norvège', 'Nouvelle Calédonie', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palau', 'Panama', 'Papouasie-Nouvelle-Guinée', 'Paraguay', 'Pays-Bas', 'Philippines', 'Pitcairn (Îles)', 'Pologne', 'Polynésie française', 'Porto Rico', 'Portugal', 'Pérou', 'Qatar', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Rép. Dém. du Congo', 'République centrafricaine', 'République Dominicaine', 'République tchèque', 'Réunion (La)', 'Sahara Occidental', 'Saint Pierre et Miquelon', 'Saint Vincent et les Grenadines', 'Saint-Kitts et Nevis', 'Saint-Marin (Rép. de)', 'Sainte Hélène', 'Sainte Lucie', 'Samoa', 'Samoa', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Sri Lanka', 'Suisse', 'Suriname', 'Suède', 'Svalbard et Jan Mayen (Îles)', 'Swaziland', 'Syrie', 'São Tomé et Príncipe (Rép.)', 'Sénégal', 'Tadjikistan', 'Taiwan', 'Tanzanie', 'Tchad',
        'Territoire britannique de l\'océan Indien', 'Territoires français du sud', 'Thailande', 'Timor', 'Togo', 'Tokelau', 'Tonga', 'Trinité et Tobago', 'Tunisie', 'Turkménistan', 'Turks et Caïques (Îles)', 'Turquie', 'Tuvalu', 'Ukraine', 'Uruguay', 'Vanuatu', 'Vatican (Etat du)', 'Venezuela', 'Vierges (Îles)', 'Vierges britanniques (Îles)', 'Vietnam', 'Wallis et Futuna (Îles)', 'Yemen', 'Yougoslavie', 'Zambie', 'Zaïre', 'Zimbabwe'
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} de {{cityName}}',
        '{{streetPrefix}} de {{lastName}}'
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
     * @example Luzern
     * @return string
     */
    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    /**
     * Returns a canton
     * @example array('BE' => 'Bern')
     * @return array
     */
    public static function canton()
    {
        return static::randomElement(static::$canton);
    }

    /**
     * Returns the abbreviation of a canton.
     * @return string
     */
    public static function cantonShort()
    {
        $canton = static::canton();
        return key($canton);
    }

    /**
     * Returns the name of canton.
     * @return string
     */
    public static function cantonName()
    {
        $canton = static::canton();
        return current($canton);
    }
}
