<?php

namespace Faker\Provider\az_AZ;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = array('');

    protected static $regionSuffix = array('sahə');
    protected static $streetPrefix = array(
        'küç.', 'pr.', 'şosse', 'məh.', 'keçid', 'dalan',
    );

    protected static $buildingNumber = array('##');
    protected static $postcode = array('AZ####');
      protected static $country = array(
        'Akrotiri və Dekeliya', 'Aland adaları', 'Albaniya', 'Almaniya', 'Amerika Samoası',
        'Andorra', 'Angilya', 'Anqola', 'Antiqua və Barbuda', 'Argentina', 'Aruba', 'Avstraliya',
        'Avstriya', 'Azərbaycan', 'Baham adaları', 'Banqladeş', 'Barbados', 'Belçika', 'Beliz',
        'Belarus', 'Benin', 'Bermud adaları', 'BƏƏ', 'ABŞ', 'Boliviya', 'Bolqarıstan',
        'Bosniya və Herseqovina', 'Botsvana', 'Böyük Britaniya', 'Braziliya', 'Bruney',
        'Burkina-Faso', 'Burundi', 'Butan', 'Bəhreyn', 'Cersi', 'Cəbəli-Tariq', 'CAR',
        'Cənubi Sudan', 'Cənubi Koreya', 'Cibuti', 'Çad', 'Çexiya', 'Monteneqro', 'Çili',
        'ÇXR', 'Danimarka', 'Dominika', 'Dominikan Respublikası', 'Efiopiya', 'Ekvador',
        'Ekvatorial Qvineya', 'Eritreya', 'Ermənistan', 'Estoniya', 'Əfqanıstan', 'Əlcəzair',
        'Farer adaları', 'Fələstin Dövləti', 'Fici', 'Kot-d’İvuar', 'Filippin', 'Finlandiya',
        'Folklend adaları', 'Fransa', 'Fransa Polineziyası', 'Gernsi', 'Gürcüstan', 'Haiti',
        'Hindistan', 'Honduras', 'Honkonq', 'Xorvatiya', 'İndoneziya', 'İordaniya', 'İraq',
        'İran', 'İrlandiya', 'İslandiya', 'İspaniya', 'İsrail', 'İsveç', 'İsveçrə', 'İtaliya',
        'Kabo-Verde', 'Kamboca', 'Kamerun', 'Kanada', 'Kayman adaları', 'Keniya', 'Kipr',
        'Kiribati', 'Kokos adaları', 'Kolumbiya', 'Komor adaları', 'Konqo Respublikası', 'KDR',
        'Kosovo', 'Kosta-Rika', 'Kuba', 'Kuk adaları', 'Küveyt', 'Qabon', 'Qambiya', 'Qana',
        'Qətər', 'Qayana', 'Qazaxıstan', 'Qərbi Sahara', 'Qırğızıstan', 'Qrenada', 'Qrenlandiya',
        'Quam', 'Qvatemala', 'Qvineya', 'Qvineya-Bisau', 'Laos', 'Latviya', 'Lesoto', 'Liberiya',
        'Litva', 'Livan', 'Liviya', 'Lixtenşteyn', 'Lüksemburq', 'Macarıstan', 'Madaqaskar', 'Makao',
        'Makedoniya', 'Malavi', 'Malayziya', 'Maldiv adaları', 'Mali', 'Malta', 'Marşall adaları',
        'Mavriki', 'Mavritaniya', 'Mayotta', 'Meksika', 'Men adası', 'Mərakeş', 'MAR', 'Mikroneziya',
        'Milad adası', 'Misir', 'Myanma', 'Moldova', 'Monako', 'Monqolustan', 'Montserrat', 'Mozambik',
        'Müqəddəs Yelena, Askenson və Tristan-da-Kunya adaları', 'Namibiya', 'Nauru', 'Nepal', 'Niderland',
        'Niderland Antil adaları', 'Niger', 'Nigeriya', 'Nikaraqua', 'Niue', 'Norfolk adası', 'Norveç',
        'Oman', 'Özbəkistan', 'Pakistan', 'Palau', 'Panama', 'Papua-Yeni Qvineya', 'Paraqvay', 'Peru',
        'Pitkern adaları', 'Polşa', 'Portuqaliya', 'Prednestroviya', 'Puerto-Riko', 'Ruanda', 'Rumıniya',
        'Rusiya', 'Salvador', 'Samoa', 'San-Marino', 'San-Tome və Prinsipi', 'Seneqal', 'Sen-Bartelemi',
        'Sent-Kits və Nevis', 'Sent-Lüsiya', 'Sen-Marten', 'Sen-Pyer və Mikelon', 'Sent-Vinsent və Qrenadina',
        'Serbiya', 'Seyşel adaları', 'Səudiyyə Ərəbistanı', 'Sinqapur', 'Slovakiya', 'Sloveniya', 'Solomon adaları',
        'Somali', 'Somalilend', 'Sudan', 'Surinam', 'Suriya', 'Svazilend', 'Syerra-Leone', 'Şərqi Timor',
        'Şimali Marian adaları', 'Şpisbergen və Yan-Mayen', 'Şri-Lanka', 'Tacikistan', 'Tanzaniya', 'Tailand',
        'Çin Respublikası', 'Törks və Kaykos adaları', 'Tokelau', 'Tonqa', 'Toqo', 'Trinidad və Tobaqo',
        'Tunis', 'Tuvalu', 'Türkiyə', 'Türkmənistan', 'Ukrayna', 'Uollis və Futuna', 'Uqanda', 'Uruqvay',
        'Vanuatu', 'Vatikan', 'Venesuela', 'Amerika Virgin adaları', 'Britaniya Virgin adaları',
        'Vyetnam', 'Yamayka', 'Yaponiya', 'Yeni Kaledoniya', 'Yeni Zelandiya', 'Yəmən', 'Yunanıstan', 'Zambiya', 'Zimbabve'
    );

    protected static $region = array(
    );

    protected static $city = array(
        'Ağcabədi', 'Ağdam', 'Ağdaş', 'Ağdərə', 'Ağstafa', 'Ağsu', 'Astara',
        'Bakı', 'Balakən', 'Beyləqan', 'Bərdə', 'Biləsuvar', 'Cəbrayıl',
        'Cəlilabad', 'Culfa', 'Daşkəsən', 'Dəliməmmədli', 'Füzuli', 'Gədəbəy',
        'Gəncə', 'Goranboy', 'Göyçay', 'Göygöl', 'Göytəpə', 'Hacıqabul',
        'Horadiz', 'Xaçmaz', 'Xankəndi', 'Xocalı', 'Xocavənd', 'Xırdalan',
        'Xızı', 'Xudat', 'İmişli', 'İsmayıllı', 'Kəlbəcər', 'Kürdəmir', 'Qax',
        'Qazax', 'Qəbələ', 'Qobustan', 'Qovlar', 'Quba', 'Qubadlı', 'Qusar',
        'Laçın', 'Lerik', 'Lənkəran', 'Liman', 'Masallı', 'Mingəçevir',
        'Naftalan', 'Naxçıvan (şəhər)', 'Neftçala', 'Oğuz', 'Ordubad',
        'Saatlı', 'Sabirabad', 'Salyan', 'Samux', 'Siyəzən', 'Sumqayıt',
        'Şabran', 'Şahbuz', 'Şamaxı', 'Şəki', 'Şəmkir', 'Şərur', 'Şirvan',
        'Şuşa', 'Tərtər', 'Tovuz', 'Ucar', 'Yardımlı', 'Yevlax', 'Zaqatala',
        'Zəngilan', 'Zərdab',
    );

    protected static $street = array(
        'Rəşid Behbudov', 'Faiq Yusifov', 'Uluqbəy', 'Yusif Vəzir Çəmənzəminli', '28 May', 'Səməd Vurğun', 'Koroğlu Rəhimov',
        'Ak. Həsən Əliyev', 'Dilarə Əliyeva', 'Космонавтов', 'Гагарина', 'Славы', 'Бухарестская', 'Будапештсткая', 'Балканская'
    );

    protected static $addressFormats = array(
        '{{postcode}}, {{region}} {{regionSuffix}}, {{cityPrefix}} {{city}}, {{streetPrefix}} {{street}}, {{buildingNumber}}',
    );

    protected static $streetAddressFormats = array(
        '{{streetPrefix}} {{street}}, {{buildingNumber}}'
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
