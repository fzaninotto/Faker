<?php

namespace Faker\Provider\tk_TM;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('##', '##');

    protected static $streetSuffix = array(
        'Köçesi',
    );

    protected static $postcode = array('74####');

    /**
    * @var array Cities of Turkmenistan, for future updates please use
    * @link https://tk.wikipedia.org/wiki/T%C3%BCrkmenistandaky_etraplar_we_%C5%9F%C3%A4herler
    */
    protected static $cityNames = array(
        'Abadan', 'Aşgabat', 'Atamyrat', 'Baharly', 'Balkanabat', 'Baýramaly', 'Bereket', 'Daşoguz',
        'Änew', 'Garabogaz', 'Gazojak', 'Gökdepe', 'Gumdag', 'Hazar', 'Köneürgenç', 'Magdanly', 'Mary',
        'Serdar', 'Serhetabat', 'Seýdi', 'Şatlyk', 'Türkmenabat', 'Türkmenbaşy', 'Tejen', 'Ýolöten',
    );

    /**
    * @var array Countries in Turkmen
    */
    protected static $country = array(
        'Albaniýa', 'Alžir', 'Amerika Birleşik Döwletleri', 'Angliýa', 'Argentina', 'Awstraliýa',
        'Awstriýa', 'Azerbaýjan', 'Bahreýn', 'Belgiýa', 'Belorussiýa', 'Birleşen Arap Emirlikleri',
        'Bosniýa we Gersegowina', 'Braziliýa', 'Bolgariýa', 'Çehiýa', 'Daniýa', 'Demirgazyk Koreýa',
        'Ermenistan', 'Estoniýa', 'Filipinler', 'Finlandiýa', 'Fransiýa', 'Gazagystan', 'Gyrgyzystan',
        'Günorta Afrika Respublikasy', 'Germaniýa', 'Günorta Koreýa', 'Gresiýa', 'Gruziýa', 'Hindistan',
        'Horwatiýa', 'Hytaý Halk Respublikasy', 'Indoneziýa', 'Irlandiýa', 'Ispaniýa', 'Italiýa', 'Kanada',
        'Kipr Respublikasy', 'Kosta Rika', 'Kuba', 'Latwiýa', 'Liwiýa', 'Litwa', 'Lýuksemburg', 'Makedoniýa',
        'Maldiwler', 'Malta', 'Mongoliýa', 'Müsür', 'Nepal', 'Niderlandlar', 'Oman', 'Özbegistan', 'Palestina',
        'Päkistan', 'Polşa', 'Portugaliýa', 'Rumyniýa', 'Russiýa', 'Saud Arabystany', 'Serbiýa', 'Siriýa',
        'Slowakiýa', 'Sloweniýa', 'Sudan', 'Şotlandiýa', 'Şwesiýa', 'Şweýsariýa', 'Täjigistan', 'Taýland',
        'Taýwan', 'Tunis', 'Türkiýe','Türkmenistan', 'Ukraina', 'Wenesuela', 'Wengriýa', 'Wýetnam', 'Yrak',
        'Ysraýyl', 'Ýamaýka', 'Ýaponiýa', 'Ýemen', 'Taze Zelandiýa', 'Zambiýa', 'Zimbabwe',
    );

    protected static $cityFormats = array(
        '{{cityName}}',
    );

    protected static $streetNameFormats = array(
        '{{lastName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}',
        '{{firstName}} {{streetSuffix}}',
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
