<?php

namespace Faker\Provider\tr_TR;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#');

    protected static $streetSuffix = array(
        'Sokak', 'Caddesi', 'Kavşağı', 'Durağı', 'İş Hanı', 'Mevkii'
    );

    protected static $postcode = array('#####');

    /**
    * @var array Cities of Turkey, for future updates please use
    * @link https://tr.wikipedia.org/wiki/T%C3%BCrkiye'nin_illeri
    */
    protected static $cityNames = array(
        'Adana','Adıyaman','Afyonkarahisar','Ağrı','Aksaray','Amasya','Ankara','Antalya','Ardahan','Artvin','Aydın',
        'Balıkesir','Bartın','Batman','Bayburt','Bilecik','Bingöl','Bitlis','Bolu','Burdur','Bursa',
        'Çanakkale','Çankırı','Çorum',
        'Denizli','Diyarbakır','Düzce',
        'Edirne','Elazığ','Erzincan','Erzurum','Eskişehir',
        'Gaziantep','Giresun','Gümüşhane',
        'Hakkari','Hatay',
        'Iğdır','Isparta','İstanbul','İzmir',
        'Kahramanmaraş','Karabük','Karaman','Kars','Kastamonu','Kayseri','Kilis',
        'Kırıkkale','Kırklareli','Kırşehir','Kocaeli','Konya','Kütahya',
        'Malatya','Manisa','Mardin','Mersin','Muğla','Muş',
        'Nevşehir','Niğde',
        'Ordu','Osmaniye',
        'Rize',
        'Sakarya','Samsun','Şanlıurfa','Siirt','Sinop','Şırnak','Sivas',
        'Tekirdağ','Tokat','Trabzon','Tunceli',
        'Uşak',
        'Van',
        'Yalova','Yozgat',
        'Zonguldak'
    );

    /**
    * @var array Countries in Turkish
    * @link https://tr.wikipedia.org/wiki/%C3%9Clkeler_listesi
    */
    protected static $country = array(
        'Abhazya', 'Afganistan', 'Almanya', 'Amerika Birleşik Devletleri', 'Andora', 'Angola',
        'Antigua ve Barbuda', 'Arjantin', 'Arnavutluk', 'Avustralya', 'Avusturya', 'Azerbaycan',
        'Bahamalar', 'Bahreyn', 'Bangladeş', 'Barbados', 'Batı Sahra', 'Belçika', 'Belize',
        'Benin', 'Beyaz Rusya', 'Bhutan', 'Birleşik Arap Emirlikleri', 'Bolivya', 'Bosna-Hersek',
        'Botsvana', 'Brezilya', 'Brunei', 'Bulgaristan', 'Burkina Faso', 'Burundi', 'Cezayir',
        'Cibuti', 'Çad', 'Çek Cumhuriyeti', 'Çin Halk Cumhuriyeti', 'Dağlık Karabağ Cumhuriyeti',
        'Danimarka', 'Doğu Timor', 'Dominik Cumhuriyeti', 'Dominika', 'Ekvador', 'Ekvator Ginesi',
        'El Salvador', 'Endonezya', 'Eritre', 'Ermenistan', 'Estonya', 'Etiyopya', 'Fas', 'Fiji',
        'Fildişi Sahili', 'Filipinler', 'Filistin', 'Finlandiya', 'Fransa', 'Gabon', 'Gambiya',
        'Gana', 'Gine', 'Gine Bissau', 'Grenada', 'Guatemala', 'Guyana', 'Güney Afrika Cumhuriyeti',
        'Güney Kore', 'Güney Osetya', 'Güney Sudan', 'Gürcistan', 'Haiti', 'Hırvatistan',
        'Hindistan', 'Hollanda', 'Honduras', 'Irak', 'İngiltere', 'İran', 'İrlanda', 'İspanya',
        'İsrail', 'İsveç', 'İsviçre', 'İtalya', 'İzlanda', 'Jamaika', 'Japonya', 'Kamboçya',
        'Kamerun', 'Kanada', 'Karadağ', 'Katar', 'Kazakistan', 'Kenya', 'Kıbrıs Cumhuriyeti',
        'Kırgızistan', 'Kiribati', 'Kolombiya', 'Komorlar', 'Kongo', 'Kongo Demokratik Cumhuriyeti',
        'Kosova', 'Kostarika', 'Kuveyt', 'Kuzey Kıbrıs Türk Cumhuriyeti', 'Kuzey Kore', 'Küba',
        'Laos', 'Lesotho', 'Letonya', 'Liberya', 'Libya', 'Lihtenştayn', 'Litvanya', 'Lübnan',
        'Lüksemburg', 'Macaristan', 'Madagaskar', 'Makedonya Cumhuriyeti', 'Malavi', 'Maldiv Adaları',
        'Malezya', 'Mali', 'Malta', 'Marshall Adaları', 'Meksika', 'Mısır', 'Mikronezya', 'Moğolistan',
        'Moldova', 'Monako', 'Moritanya', 'Moritius', 'Mozambik', 'Myanmar', 'Namibya', 'Nauru',
        'Nepal', 'Nijer', 'Nijerya', 'Nikaragua', 'Norveç', 'Orta Afrika Cumhuriyeti', 'Özbekistan',
        'Pakistan', 'Palau', 'Panama', 'Papua Yeni Gine', 'Paraguay', 'Peru', 'Polonya', 'Portekiz',
        'Romanya', 'Ruanda', 'Rusya Federasyonu', 'Saint Kitts ve Nevis', 'Saint Lucia', 'Saint Vincent ve Grenadinler',
        'Samoa', 'San Marino', 'Sao Tome ve Principe', 'Sealand', 'Senegal', 'Seyşeller', 'Sırbistan',
        'Sierra Leone', 'Singapur', 'Slovakya', 'Slovenya', 'Solomon', 'Somali', 'Somaliland',
        'Sri Lanka', 'Sudan', 'Surinam', 'Suriye', 'Suudi Arabistan', 'Svaziland', 'Şili', 'Tacikistan',
        'Tanzanya', 'Tayland', 'Tayvan', 'Togo', 'Tonga', 'Transdinyester', 'Trinidad ve Tobago',
        'Tunus', 'Tuvalu', 'Türkiye', 'Türkmenistan', 'Uganda', 'Ukrayna', 'Umman', 'Uruguay',
        'Ürdün', 'Vanuatu', 'Vatikan', 'Venezuela', 'Vietnam', 'Yemen', 'Yeni Zelanda', 'Yeşil Burun',
        'Yunanistan', 'Zambiya', 'Zimbabwe',
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}'
    );

    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );

    public function cityName()
    {
        return static::randomElement(static::$cityNames);
    }
}
