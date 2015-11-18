<?php

namespace Faker\Provider\tr_TR;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#');
    protected static $streetSuffix = array(
        'Sokak', 'Caddesi', 'Kavşağı', 'Durağı', 'İş Hanı', 'Mevkii, Apartmanı, Şubesi, Yöresi, Köyü, Kenarı, Gölü, Kısmı'
    );
    protected static $postcode = array('#####');

    protected static $county = array(
        'Adana', 'Adıyaman', 'Afyonkarahisar', 'Ağrı', 'Amasya', 'Ankara', 'Antalya', 'Artvin', 'Aydın', 'Balıkesir', 'Bilecik', 'Bingöl', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Çanakkale', 'Çankırı', 'Çorum', 'Denizli', 'Diyarbakır', 'Edirne', 'Elazığ', 'Erzincan', 'Erzurum', 'Eskişehir', 'Gaziantep', 'Giresun', 'Gümüşhane', 'Hakkari', 'Hatay', 'Isparta', 'Mersin', 'İstanbul', 'İzmir', 'Kars', 'Kastamonu', 'Kayseri', 'Kırklareli', 'Kırşehir', 'Kocaeli', 'Konya', 'Kütahya', 'Malatya', 'Manisa', 'Kahramanmaraş', 'Mardin', 'Muğla', 'Muş', 'Nevşehir', 'Niğde', 'Ordu', 'Rize', 'Sakarya', 'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Tekirdağ', 'Tokat', 'Trabzon', 'Tunceli', 'Şanlıurfa', 'Uşak', 'Van', 'Yozgat', 'Zonguldak', 'Aksaray', 'Bayburt', 'Karaman', 'Kırıkkale', 'Batman', 'Şırnak', 'Bartın', 'Ardahan', 'Iğdır', 'Yalova', 'Karabük', 'Kilis', 'Osmaniye', 'Düzce'
    );

    protected static $country = array(
        'Avusturya', 'Afganistan', 'Antigua ve Barbuda', 'Arnavutluk', 'Andorra', 'Angola', 'Antarktika', 'Ermenistan', 'Aruba', 'Avustralya', '&Aring;land', 'Anguilla', 'Azerbaycan', 'Belçika', 'Bangladeş', 'Barbados', 'Burkina Faso', 'Bulgaristan', 'Butan', 'Bosna-Hersek', 'Bolivya', 'Brezilya', 'Bahreyn', 'Brunei', 'Bahama', 'Burundi', 'Beyaz Rusya', 'Belize', 'Küba', 'Kamerun', 'Kanada', 'Demokratik Kongo Cumhuriyeti', 'İsviçre', 'Fildişi Sahili', 'Sri Lanka', 'Çin Halk Cumhuriyeti', 'Kolombiya', 'Komor', 'Kosta Rika', 'Cape Verde', 'Kıbrıs Cumhuriyeti', 'Galler', 'Çek Cumhuriyeti', 'Almanya', 'Cibuti', 'Danimarka', 'Dominik Cumhuriyeti', 'Benin', 'Cezayir', 'İspanya', 'Kenya', 'Tanzanya', 'Uganda', 'Ekvador', 'İngiltere', 'Eritre', 'El Salvador', 'Estonya', 'Mısır', 'Etiyopya', 'Fransa', 'Finlandiya', 'Fiji', 'Lihtenştayn', 'Faroe Adaları', 'Mikronezya', 'Gabon', 'Birleşik Krallık (Büyük Britanya ve Kuzey İrlanda)', 'Alderney', 'Guernsey', 'Jersey', 'Man Adası', 'Cebelitarık', 'Guatamala', 'Gürcistan', 'Gana', 'Gine Bissau', 'Ekvator Ginesi', 'Yunanistan', 'Guyana', 'Macaristan', 'Hong Kong', 'Ürdün', 'Honduras', 'Hırvatistan', 'İtalya', 'İsrail', 'Hindistan', 'İran', 'İrlanda', 'Irak', 'İzlanda', 'Japonya', 'Jamaika', 'Kamboçya', 'Saint Kitts ve Nevis', 'Grönland', 'Kırgızistan', 'Kiribati', 'Kuzey Kore', 'Suudi Arabistan', 'Kuveyt', 'Kazakistan', 'Lüksemburg', 'Laos', 'Libya', 'Liberya', 'Lesoto', 'Litvanya', 'Letonya', 'Malta', 'Fas', 'Malezya', 'Monako', 'Moldova', 'Meksika', 'Moğolistan', 'Marshall Adaları', 'Makedonya', 'Karadağ', 'Makao', 'Mozambik', 'Mauritius', 'Maldivler', 'Malavi', 'Myanmar', 'Norveç', 'Hollanda Antilleri', 'Namibya', 'Nauru', 'Yeni Kaledonya', 'Nepal', 'Nikaragua', 'Kuzey İrlanda', 'Hollanda', 'Yeni Zelanda', 'Umman', 'Portekiz', 'Panama', 'Pakistan', 'Palau', 'Peru', 'Polonya', 'Transdinyester]]', 'Papua Yeni Gine', 'Porto Riko', 'Filistin', 'Paraguay', 'Katar', 'Arjantin', 'Botsvana', 'Çin Cumhuriyeti', 'Orta Afrika Cumhuriyeti', 'Kongo Cumhuriyeti', 'Şili', 'Gine', 'Haiti', 'Endonezya', 'Moritanya', 'Kosova', 'Lübnan', 'Madagaskar', 'Mali', 'Nijer', 'Romanya', 'Güney Kore', 'Uruguay', 'Filipinler', 'San Marino', 'Togo', 'Rusya', 'Ruanda', 'İsveç', 'İskoçya', 'Svaziland', 'Singapur', 'Slovakya', 'Sierra Leone', 'Slovenya', 'Surinam', 'Malta Askeri Hükümdarlığı', 'Senegal', 'Somali', 'Solomon Adaları', 'Sırbistan', 'Sao Tome ve Principe', 'Sudan', 'Seyşeller', 'Suriye', 'Tayland', 'Çad', 'Tacikistan', 'Doğu Timor', 'Türkmenistan', 'Tunus', 'Tonga', 'Türkiye', 'Tuvalu', 'Ukrayna', 'Birleşik Arap Emirlikleri', 'Amerika Birleşik Devletleri', 'Özbekistan', 'Vatikan', 'Vietnam', 'Vanuatu', 'Gambiya', 'Nijerya', 'Dominika', 'Grenada', 'Saint Lucia', 'Samoa', 'Batı Sahra', 'Saint Vincent ve Grenadines', 'Yemen', 'Venezuela', 'Zambiya', 'Güney Afrika Cumhuriyeti', 'Zimbabve'
    );
    protected static $cityFormats = array(
        '{{country}}',
    );
    protected static $streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}'
    );
    protected static $streetAddressFormats = array(
        '{{buildingNumber}} {{streetName}}',
        "{{secondaryAddress}}\n{{streetName}}",
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}} / {{county}}\n{{postcode}}",
    );
    protected static $secondaryAddressFormats = array('Daire ##', 'Daire ##?', 'Sütudyo ##', 'Sütudyo ##?', 'İşhanı ##', 'İşhanı ##?', '## Blok', '#? Blok');


    /**
     * @example 'Flat 350'
     */
    public static function secondaryAddress()
    {
        return static::bothify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Hampshire'
     */
    public static function county()
    {
        return static::randomElement(static::$county);
    }
}
