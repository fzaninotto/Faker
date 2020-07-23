<?php

namespace Faker\Provider\uz_UZ;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('shahri', 'tumani');

    protected static $regionSuffix = array('viloyati');
    protected static $streetPrefix = array(
        'ko\'chasi.', 'shosse', 'mahallasi'
    );

    protected static $buildingNumber = array('##');
    protected static $postcode = array('######');

    protected static $country = array(
		    'Afg‘oniston', 'Albaniya', 'Amerika Qo\'shma Shtatlari', 'Andorra', 'Angola',
		    'Antigua va Barbuda', 'Argentina', 'Armaniston', 'Avstraliya', 'Avstriya', 'Bagamalar',
		    'Bahrayn', 'Bangladesh', 'Barbados', 'Belarus', 'Belgiya', 'Beliz', 'Benin',
		    'Birlashgan Arab Amirliklari', 'Birma', 'Bolgariya', 'Boliviya', 'Bosniya va Gersegovina',
		    'Botsvana', 'Braziliya', 'Bruney', 'Buyuk Britaniya', 'Burkina Faso', 'Burundi', 'Butan',
		    'Daniya', 'Dominika', 'Dominika Respublikasi', 'Efiopiya', 'Ekvador', 'Ekvatorial Gvineya',
		    'Eritreya', 'Eron', 'Estoniya', 'Fiji', 'Filippin', 'Finlyandiya', 'Fransiya', 'Gabon', 'Gaiti',
		    'Gambiya', 'Gana', 'Germaniya', 'Gonduras', 'Grenada', 'Gretsiya', 'Gruziya', 'Guyana', 'Gvatemala',
		    'Gvineya', 'Gvineya-Bisau', 'Hindiston', 'Indoneziya', 'Iordaniya', 'Irlandiya', 'Iroq', 'Islandiya',
		    'Ispaniya', 'Isroil', 'Italiya', 'Janubiy Afrika', 'Janubiy Koreya', 'Janubiy Sudan', 'Jazoir',
		    'Jibuti', 'Kabo-Verde', 'Kambodja', 'Kamerun', 'Kanada', 'Keniya', 'Kipr', 'Kiribati', 'Kolumbiya',
		    'Komoros', 'Kongo Demokratik Respublikasi', 'Kongo Respublikasi', 'Kosta Rika', 'Kot-d\'Ivuar',
		    'Kuba', 'Laos', 'Latviya', 'Lesoto', 'Liberiya', 'Litva', 'Livan', 'Liviya', 'Lixtenshteyn',
		    'Luksemburg', 'Madagaskar', 'Makedoniya', 'Malavi', 'Malayziya', 'Maldiv Respublikasi', 'Mali',
		    'Malta', 'Markaziy Afrika Respublikasi', 'Marokash', 'Marshall Orollari', 'Mavrikiy', 'Mavritaniya',
		    'Meksika', 'Mikroneziya', 'Misr', 'Moldova', 'Monako', 'Mongoliya', 'Montenegro', 'Mozambik',
		    'Namibiya', 'Nauru', 'Nepal', 'Niger', 'Nigeriya', 'Niderlandiya', 'Nikaragua', 'Norvegiya', 'Oman',
		    'Ozarbayjon', 'Palau', 'Panama', 'Papua-Yangi Gvineya', 'Paragvay', 'Peru', 'Pokiston', 'Polsha',
		    'Portugaliya', 'Qatar', 'Qirg\'iziston', 'Qozog\'iston', 'Quvayt', 'Rossiya', 'Ruanda', 'Ruminiya',
				'Salvador', 'Samoa', 'San Marino', 'San-Tome va Prinsipi', 'Saudiya Arabistoni', 'Senegal',
		    'Sent-Kits va Nevis', 'Sent Lusiya', 'Sent Vinsent va Grenadinlar', 'Serbiya', 'Seyshell orollari',
		    'Shimoliy Koreya', 'Singapur', 'Slovakiya', 'Sloveniya', 'Solomon Orollari', 'Somali', 'Sudan',
		    'Surinam', 'Suriya', 'Svazilend', 'Syerra-Leone', 'Tailand', 'Tanzaniya', 'Togo', 'Tojikiston',
		    'Tonga', 'Trinidad va Tobago', 'Tunis', 'Turkiya', 'Turkmaniston', 'Tuvalu', 'Uganda', 'Ukraina',
		    'Urugvay', 'Vanuatu', 'Vatikan', 'Venesuela', 'Vengriya', 'Vyetnam', 'Xitoy', 'Xorvatiya', 'Yaman',
		    'Yamayka', 'Yangi Zelandiya', 'Yaponiya', 'Zambiya', 'Zimbabve', 'Oʻzbekiston', 'Sharqiy Timor',
		    'Shri Lanka', 'Shvetsiya', 'Shveytsariya', 'Chad', 'Chexiya', 'Chili'
    );

    protected static $region = array(
        'Andijon', 'Buxoro', 'Farg\'ona', 'Jizzax', 'Xorazm', 'Namangan',
	      'Navoiy', 'Qashqadaryo', 'Qoraqalpogʻiston Respublikasi', 'Samarqand',
	      'Sirdaryo', 'Surxondaryo', 'Toshkent'
    );

    protected static $city = array(
		    'Amudaryo', 'Beruniy', 'Kegayli', 'Qonliko‘l', 'Qorao‘zak', 'Qo‘ng‘irot', 'Mo‘ynoq',
		    'Nukus', 'Nukus shahri', 'Taxtako‘pir', 'To‘rtko‘l', 'Xo‘jayli', 'CHimboy', 'SHumanay',
		    'Ellikqal‘a', 'Andijon shahri', 'Andijon', 'Asaka', 'Baliqchi', 'Buloqboshi', 'Bo‘z',
		    'Jalaquduq', 'Izbosgan', 'Qorasuv shahri', 'Qo‘rg‘ontepa', 'Marhamat', 'Oltinko‘l',
		    'Paxtaobod', 'Ulug‘nor', 'Xonabod', 'Xo‘jaobod shahri', 'Shaxrixon', 'Buxoro shahri',
		    'Buxoro', 'Vobkent', 'G‘ijduvon', 'Jondor', 'Kogon', 'Kogon shahri', 'Qorako‘l', 'Qorovulbozor',
		    'Olot', 'Peshku', 'Romitan', 'Shofirkon', 'Arnasoy', 'Baxmal', 'G‘allaorol', 'Do‘stlik', 'Sh.Rashidov',
		    'Jizzax shahri', 'Zarbdor', 'Zafarobod', 'Zomin', 'Mirzacho‘l', 'Paxtakor', 'Forish', 'Yangiobod',
		    'G‘uzor', 'Dehqonobod', 'Qamashi', 'Qarshi', 'Qarshi shahri', 'Kasbi', 'Kitob', 'Koson', 'Mirishkor',
		    'Muborak', 'Nishon', 'Chiroqchi', 'Shahrisabz', 'Yakkabog‘', 'Zarafshon shahri', 'Karmana', 'Qiziltepa',
		    'Konimex', 'Navbahor', 'Navoiy shahri', 'Nurota', 'Tomdi', 'Uchquduq', 'Xatirchi', 'Kosonsoy',
		    'Mingbuloq', 'Namangan', 'Namangan shahri', 'Norin', 'Pop', 'To‘raqo‘rg‘on', 'Uychi', 'Uchqo‘rg‘on',
		    'Chortoq', 'Chust', 'Yangiqo‘rg‘on', 'Bulung‘ur', 'Jomboy', 'Ishtixon', 'Kattaqo‘rg‘on',
		    'Kattaqo‘rg‘on shahri', 'Qo‘shrabot', 'Narpay', 'Nurabod', 'Oqdaryo', 'Payariq', 'Pastarg‘om',
		    'Paxtachi', 'Samarqand', 'Samarqand shahri', 'Toyloq', 'Urgut', 'Angor', 'Boysun', 'Denov', 'Jarqo‘rg‘on',
		    'Qiziriq', 'Qo‘mqo‘rg‘on', 'Muzrabot', 'Oltinsoy', 'Sariosiy', 'Termiz', 'Termiz shahri', 'Uzun',
		    'Sherobod', 'Sho‘rchi', 'Boyovut', 'Guliston', 'Guliston shahri', 'Mirzaobod', 'Oqoltin', 'Sayxunobod',
		    'Sardoba', 'Sirdaryo', 'Xavos', 'Shirin shahri', 'Yangier shahri', 'Angiren shahri', 'Bekabod',
		    'Bekabod shahri', 'Bo‘ka', 'Bo‘stonliq', 'Zangiota', 'Qibray', 'Quyichirchiq', 'Oqqo‘rg‘on',
		    'Olmaliq shahri', 'Ohangaron', 'Parkent', 'Piskent', 'O‘rtachirchiq', 'Chinoz', 'Chirchiq shahri',
		    'Yuqorichirchiq', 'Yangiyo‘l', 'Beshariq', 'Bog‘dod', 'Buvayda', 'Dang‘ara', 'Yozyovon', 'Quva',
		    'Quvasoy shahri', 'Qo‘qon shahri', 'Qo‘shtepa', 'Marg‘ilon shahri', 'Oltiariq', 'Rishton', 'So‘x',
		    'Toshloq', 'Uchko‘prik', 'O‘zbekiston', 'Farg‘ona', 'Farg‘ona shahri', 'Furqat', 'Bog‘ot', 'Gurlan',
		    'Qo‘shko‘pir', 'Urganch', 'Urganch shahri', 'Xiva', 'Xazarasp', 'Xonqa', 'Shavot', 'Yangiariq',
		    'Yangibozor', 'Bektimer', 'M.Ulug‘bek', 'Mirobod', 'Olmazor', 'Sergeli', 'Uchtepa', 'Yashnobod',
		    'Chilonzor', 'Shayxontohur', 'Yunusobod', 'Yakkasaroy', 'Taxiatosh shahri', 'Asaka shahri', 'Bandixon',
		    'Ohangaron shahri', 'Yangiyo‘l shahri', 'Toshkent'
    );

    protected static $street = array(
        'Abdulla Oripov', 'Jayhun', 'Islom Karimov', 'Mustaqillik', 'Olchazor', 'Olmazor', 'Tinchlik',
	      'Nasaf', 'Erkin', 'Chuqursoy', 'Bog‘ishamol', 'Yangishahar', 'Do‘rmon yo‘li', '1-berk', 'Beruniy'
    );

    protected static $addressFormats = array(
        "{{postcode}}, {{region}} {{regionSuffix}}, {{city}} {{cityPrefix}}, {{street}} {{streetPrefix}}, {{buildingNumber}}",
    );

    protected static $streetAddressFormats = array(
        "{{street}} {{streetPrefix}}, {{buildingNumber}}"
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

    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    public function city()
    {
        return static::randomElement(static::$city);
    }

    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    public static function street()
    {
        return static::randomElement(static::$street);
    }
}
