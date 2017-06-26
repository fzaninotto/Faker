<?php

namespace Faker\Provider\et_EE;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('linn');

    protected static $regionSuffix = array('maakond');
    protected static $streetSuffix = array(
        'tn', 'tee', 'mnt', 'allee','maantee', 'puiestee','põik', 'käik', 'tänav'
    );


    protected static $postcode = array('#####');

    /**
    * 'Estonia' in different languages
    */
    protected static $eesti = array(
                            'Eesti','Estonia', 'Estland','Igaunija','Viro','Estija','Эстония');
    
    /**
     * @link https://et.wikipedia.org/wiki/Maailma_riikide_loend
     */
    protected static $country = array(
                            'Afganistan', 'Albaania', 'Alžeeria', 'Ameerika Ühendriigid', 'Andorra', 'Angola', 'Antigua ja Barbuda', 'Araabia Ühendemiraadid', 'Argentina', 'Armeenia', 'Aserbaidžaan', 'Austraalia', 'Austria',
                            'Bahama', 'Bahrein', 'Bangladesh', 'Barbados', 'Belau', 'Belgia', 'Belize', 'Benin', 'Bhutan', 'Birma', 'Boliivia', 'Bosnia ja Hertsegoviina', 'Botswana', 'Brasiilia', 'Brunei', 'Bulgaaria', 'Burkina Faso', 'Burundi',
                            'Colombia', 'Costa Rica',
                            'Djibouti', 'Dominica', 'Dominikaani Vabariik',
                            'Ecuador', 'Eesti', 'Egiptus', 'Ekvatoriaal-Guinea', 'El Salvador', 'Elevandiluurannik', 'Eritrea', 'Etioopia',
                            'Fidži', 'Filipiinid',
                            'Gabon', 'Gambia', 'Ghana', 'Grenada', 'Gruusia', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana',
                            'Haiti', 'Hiina', 'Hispaania', 'Holland', 'Honduras', 'Horvaatia',
                            'Ida-Timor', 'Iirimaa', 'Iisrael', 'India', 'Indoneesia', 'Iraak', 'Iraan', 'Island', 'Itaalia',
                            'Jaapan', 'Jamaica', 'Jeemen', 'Jordaania',
                            'Kambodža', 'Kamerun', 'Kanada', 'Kasahstan', 'Katar', 'Keenia', 'Kesk-Aafrika Vabariik', 'Kiribati', 'Komoorid', 'Kongo DV', 'Kongo Vabariik', 'Kreeka', 'Kuuba', 'Kuveit', 'Kõrgõzstan', 'Küpros',
                            'Laos', 'Leedu', 'Lesotho', 'Libeeria', 'Liechtenstein', 'Liibanon', 'Liibüa', 'Luksemburg', 'Lõuna-Aafrika Vabariik', 'Lõuna-Korea', 'Lõuna-Sudaan', 'Läti',
                            'Madagaskar', 'Makedoonia', 'Malaisia', 'Malawi', 'Maldiivid', 'Mali', 'Malta', 'Maroko', 'Marshalli Saared', 'Mauritaania', 'Mauritius', 'Mehhiko', 'Mikroneesia', 'Moldova', 'Monaco', 'Mongoolia', 'Montenegro', 'Mosambiik',
                            'Namiibia', 'Nauru', 'Nepal', 'Nicaragua', 'Nigeeria', 'Niger', 'Norra',
                            'Omaan',
                            'Paapua Uus-Guinea', 'Pakistan', 'Panama', 'Paraguay', 'Peruu', 'Poola', 'Portugal', 'Prantsusmaa', 'Põhja-Korea',
                            'Roheneemesaared', 'Rootsi', 'Rumeenia', 'Rwanda',
                            'Saalomoni Saared', 'Saint Kitts ja Nevis', 'Saint Lucia', 'Saint Vincent ja Grenadiinid', 'Saksamaa', 'Sambia', 'Samoa', 'San Marino', 'São Tomé ja Prí­ncipe', 'Saudi Araabia', 'Seišellid', 'Senegal', 'Serbia', 'Sierra Leone', 'Singapur', 'Slovakkia', 'Sloveenia', 'Somaalia', 'Soome', 'Sri Lanka', 'Sudaan', 'Suriname', 'Suurbritannia', 'Svaasimaa', 'Süüria', 'Šveits',
                            'Zimbabwe',
                            'Taani', 'Tadžikistan', 'Tai', 'Tansaania', 'Togo', 'Tonga', 'Trinidad ja Tobago', 'Tšaad', 'Tšehhi', 'Tšiili', 'Tuneesia', 'Tuvalu', 'Türgi', 'Türkmenistan',
                            'Uganda', 'Ukraina', 'Ungari', 'Uruguay', 'Usbekistan', 'Uus-Meremaa',
                            'Valgevene', 'Vanuatu', 'Vatikan', 'Venemaa', 'Venezuela', 'Vietnam',);

    /**
     * @link https://et.wikipedia.org/wiki/Eesti_maakonnad
     */
    protected static $region = array(
                            'Harju', 'Hiiu',
                            'Ida-Viru',
                            'Järva', 'Jõgeva',
                            'Lääne', 'Lääne-Viru',
                            'Pärnu', 'Põlva',
                            'Rapla',
                            'Saare',
                            'Tartu',
                            'Valga', 'Viljandi', 'Võru',
                        );

    /**
     * @link https://et.wikipedia.org/wiki/Eesti_linnad#Eesti_linnade_loend
     */
    protected static $city = array('Abja-Paluoja', 'Antsla',
                                    'Elva',
                                    'Haapsalu',
                                    'Jõgeva', 'Jõhvi',
                                    'Kallaste', 'Karksi-Nuia', 'Kehra', 'Keila', 'Kilingi-Nõmme', 'Kiviõli', 'Kohtla-Järve', 'Kunda', 'Kuressaare', 'Kärdla',
                                    'Lihula', 'Loksa',
                                    'Maardu', 'Mustvee', 'Mõisaküla',
                                    'Narva', 'Narva-Jõesuu',
                                    'Otepää',
                                    'Paide', 'Paldiski', 'Pärnu', 'Põltsamaa', 'Põlva', 'Püssi',
                                    'Rakvere', 'Rapla', 'Räpina',
                                    'Saue', 'Sillamäe', 'Sindi', 'Suure-Jaani',
                                    'Tallinn', 'Tamsalu', 'Tapa', 'Tartu', 'Tõrva', 'Türi',
                                    'Valga', 'Viljandi', 'Võhma', 'Võru',);


    /**
     * @link https://et.wikipedia.org/wiki/Kategooria:Tartu_t%C3%A4navad
     */
    protected static $street = array(
        'Aardla','Aardlavälja','Aasa','Adra','Aianduse','Aiaääre','Aida','Akadeemia','Alasi','Aleksandri','Alevi','Allika','Anne','Annemõisa','Arbi','P. Areni','Arhitekti','Aroonia','Aru','Arukase','Aruküla tee','Astri',
        'K. E. von Baeri','Bajadeeri','Betooni','Bordoo',
        'Eha','Ehitaja','A. Elleri','Elulõnga','Elva','Emajõe','Era',
        'Filosoofi','B. G. Forseliuse tänav','Fortuuna tänav',
        'Gildi tänav',
        'A. Haava','Haki','Haraka','Heina','Heki','K. A. Hermanni','Herne','J. W. F. Hezeli','Hiie','Hipodroomi','Hobuseraua tänav','Hommiku','J. Hurda',
        'Ida','Ihaste põik','Ihaste tee','Ilmatari','Ilmatsalu',
        'Jaama','Jaamamõisa','Jaani','Jakobi','C. R. Jakobsoni','Jalaka','Jalakakuru','Jalakakuru põik','J. V. Jannseni','A. Johani','Jõe','Jänese',
        'Kaare','Kabeli','Kadaka','Kalda tee','Kalevi','Kalmistu','Kaluri','Kanarbiku','Kannikese','Kapteni','Karikakra','Karmiini','Kartuli','Kasarmu','Kase','Kase põik','Kasesalu','Kastani','Kasteheina','Kauna tänav','Kaunase puiestee','Kesa','Kesa põik','Kesakanni','Kesk','Kesk kaar','Kibuvitsa','Kiigemäe','Kiire','Killustiku','Kingu','Kirde','Kirsi','Kitsas','E. Kitse','A. Kitzbergi','Kivi','Klaasi','Kloostri','Kodukolde','Koidu','L. Koidula','Koidutähe','Kolde','Kompanii','A. Kongo','Kooli','J. Koorti','Kopli','Kotka','Kraavi','Kraavikalda','Kreegi','Kressi','Fr. R. Kreutzwaldi','Kroonuaia','Kruusa','Kruusakuru','Kruusamäe','Kruusavälja','Kuldnoka','Kullerkupu','Kummeli','Kungla','J. Kuperjanovi','Kure','Kuru','Kuu','Kuuse','Kvissentali tee','Kvissentali põik','E. Kõksi','Kõrvitsa','Käbi','Käo','Käo põik','Künni','Küüni ','Küütri ',
        'Laane','Ladva','Lai','A. Laigo tänav','Lammi tänav','Lao tänav','Laulupeo puiestee','Leegi','Leesika','Leete','Leevikese','Lehe','Lehola','Lembitu','Lemmatsi','Lepa','Lepalinnu','Lepiku','K. Liimandi','Liiva','Liivakuru','Liivamäe','Liivi','Lille','Lina','Linda','Linnu','Loode','Lootsi','Lootuse','Lossi','Lubja','Luha','Luige','Luigelahe','Lumimarja','N. Lunini põik','N. Lunini tänav','Lutsu','Lõhmuse','Lõkketule','Lõo','Lõuendi tänav','Lõuna','Lääne','Lüübeki',
        'Maarjaturg','Maasika tänav','Madruse tänav','Magasini tänav','Magistri tänav','Maisi','Malmi','Marja tänav','Marta tänav','Voldemar Melliku tänav','Meloni tänav','Mesika tänav','Metalli tänav','Metshaldja tänav','Metshirve tänav','Molberti tänav','Mooni tänav','Hando Mugasto tänav','Munga ','Muraka tänav','Mureli tänav','Muru tänav','Mõisa allee','Mõisajärve tänav','Mõisapargi tänav','Mõisapuiestee','Mõisatalli tänav','Mõisatorni tänav','Mõisavahe tänav','Mõisavärava tänav','Mõisaääre tänav','Mäe','Männi','Männimetsa tee',
        'Narva mnt.','Nelgi','Nigula','Niidu','Nisu','Nooruse','Nurme','Nõlvaku','Nõmme','Nõmmeliiva','Nõva','Näituse','Näsiniine',
        'Oa','Odra','Oksa','Ookri','Optika','Orava','Villem Ormissoni','Oru','Wilhelm Ostwaldi tänav',
        'Paju','Palderjani','Pallase pst.','Palsami','Palusambla','Papli','Pargi','Peedu','Peetri','Peetriturg','Pepleri tänav','Pihlaka','Piima tänav','Piiri','Pikk','Pintsli','Piparmündi','Pirni','Pirni põik','Pliiatsi','Ploomi','Poe','Pohla','Pootsmani','Promenaadi','Puhkekodu','Puidu','Puiestee','Punga','Purde','Purpuri','Ludvig Puusepa','Põhja puiestee','Põhjatamme puiestee','Põik tänav','Põldmarja','Põllu','Päeva','Pärna','Pääsukese',
        'Raatuse','Raekoja plats','Raeremmelga','Rahu','Raja','Rannakajaka','Ranna pst.','Ranna tee','Raua','Raudtee','Ravila','Rebase','Remmelga','Riia','Ringtee','Risti','Ristiku','Rohu','Roopa','Roosi','Ropka','Ropka tee','Ropkamõisa','Rukki','Rukkilille','Rõõmu tee','Räni','Räni põik','Ränikivi','Rästa','Räägu','Rüütli',
        'Saare','Sadama','Saekoja','Saialille','Sakala','Salme','Salutähe','Sambla','Sanatooriumi','Sangla','Sarapuu','Sassi','Sauna','Savi tänav','Selleri tänav','Sepa','Sepakuru tänav','Sepavälja tänav','Sepikoja tänav','Side','Sihi','Siili','Sinika','Sinilille','Sirbi','Sirbi kaar','Sireli','Soinaste','Soola','Staadioni','A. Starkopfi','Wilhelm Struve','Supelranna','Surnuaia','Suur kaar','Sõbra','Sõnajala','Sõpruse puiestee','Säde','Sälu',
        'Taara puiestee','Talutare','Tamme puiestee','Tamme põik','Tammekuru','Tammekuru põik','Tammelehe','Tammeoksa','Tammepärja','Tammetõru','Tammeõie','Tammiku','A. H. Tammsaare','Tasuja','Tedre','Teelehe','Teguri','Tehase','Tehnika','Tervise','Tervishoiu','Tihase','Tiigi','Timuti','L. Tolstoi','Toominga','N. Triigi','F. Tuglase','Tulbi','Tulika','Tungla','Turu','Tuule','Tuvi','J. Tõnissoni','Tõrviku','Tähe','Tähtvere','Tüve','Tüürimehe',
        'Ujula','Urva','Uueturu','Uus',
        'Vaarika','Vaba','Vabaduse pst.','A. Vabbe','Vabriku','Vahe','Vahi','Vahi põik','Vahtra','Vaikne','Vainu','Vaksali','Vallikraavi','Vambola','Vanemuise','Vao tänav','Vapramäe tänav','A. Vardi tänav','Variku tänav','Varju tänav','Varsa tänav','Vasara tänav','Vasara põik','Vase tänav','Veeberi tänav','Veeriku tänav','Vene','Veski','Vikerkaare','Vilja','Viljandi maantee','Vindi tänav','Vitamiini','Voolu','Võru','Võruvälja','Väike kaar','Väike-Emajõe tänav','Väike-Sepa','Väike-Turu','Väike-Tähe','Välja','Välu','Västriku',);

    protected static $addressFormats = array(
        "{{street}} {{buildingNumber}}-{{buildingNumber}}, {{city}}, {{region}} {{regionSuffix}}",
        "{{street}} {{buildingNumber}}-{{buildingNumber}}, {{city}}, {{region}} {{regionSuffix}}, {{eesti}}",

        "{{street}} {{buildingNumber}}, {{city}}, {{region}} {{regionSuffix}}",
        "{{street}} {{buildingNumber}}, {{city}}, {{region}} {{regionSuffix}}, {{eesti}}",

        "{{street}} {{streetSuffix}} {{buildingNumber}}, {{city}} {{postcode}}, {{region}} {{regionSuffix}} ",
        "{{street}} {{streetSuffix}} {{buildingNumber}}, {{city}} {{postcode}}, {{region}} {{regionSuffix}}, {{eesti}}",

        "{{street}} {{buildingNumber}}, {{city}} {{postcode}}",
        "{{street}} {{buildingNumber}}, {{city}} {{postcode}}, {{eesti}}",
    );

    public static function buildingNumber()
    {
        return static::numerify(static::randomElement(static::$buildingNumber));
    }

    public function address()
    {
        $format = static::randomElement(static::$addressFormats);

        return $this->generator->parse($format);
    }

    public static function country()
    {
        return static::randomElement(static::$country);
    }

    /**
     * Provides "Estonia" address suffix in a random language
     * @return string
     */
    public static function eesti()
    {
        return static::randomElement(static::$eesti);
    }

    public static function postcode()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$postcode)));
    }
   

    public static function regionSuffix()
    {
        return static::randomElement(static::$regionSuffix);
    }

    public static function region()
    {
        return static::randomElement(static::$region);
    }

    public static function citySuffix()
    {
        return static::randomElement(static::$citySuffix);
    }

    public function city()
    {
        return static::randomElement(static::$city);
    }

    public static function streetSuffix()
    {
        return static::randomElement(static::$streetSuffix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
