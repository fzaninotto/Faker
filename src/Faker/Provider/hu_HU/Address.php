<?php

namespace Faker\Provider\hu_HU;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('#####', '####', '###', '##', '##');
    protected static $streetSuffix = array(
        'árok', 'átjáró', 'dűlősor', 'dűlőút', 'erdősor', 'fasor', 'forduló', 'gát', 'határsor', 'határút', 'híd', 'játszótér', 'kert', 'körönd', 'körtér', 'körút', 'köz', 'lakótelep', 'lejáró', 'lejtő', 'lépcső', 'liget', 'mélyút', 'orom', 'országút', 'ösvény', 'park', 'part', 'pincesor', 'rakpart', 'sétány', 'sétaút', 'sor', 'sugárút', 'tér', 'tere', 'turistaút', 'udvar', 'út', 'útja', 'utca', 'üdülőpart'
    );
    protected static $postcode = array('####');
    protected static $state = array(
        'Budapest', 'Bács-Kiskun', 'Baranya', 'Békés', 'Borsod-Abaúj-Zemplén', 'Csongrád', 'Fejér', 'Győr-Moson-Sopron', 'Hajdú-Bihar', 'Heves', 'Jász-Nagykun-Szolnok', 'Komárom-Esztergom', 'Nógrád', 'Pest', 'Somogy', 'Szabolcs-Szatmár-Bereg', 'Tolna', 'Vas', 'Veszprém', 'Zala'
    );
    protected static $country = array(
        'Afganisztán', 'Albánia', 'Algéria', 'Amerikai Egyesült Államok', 'Andorra', 'Angola', 'Antigua és Barbuda', 'Argentína', 'Ausztria', 'Ausztrália', 'Azerbajdzsán', 'Bahama-szigetek', 'Bahrein', 'Banglades', 'Barbados', 'Belgium', 'Belize', 'Benin', 'Bhután', 'Bolívia', 'Bosznia-Hercegovina', 'Botswana', 'Brazília', 'Brunei', 'Bulgária', 'Burkina Faso', 'Burma', 'Burundi', 'Chile', 'Ciprus', 'Costa Rica', 'Csehország', 'Csád', 'Dominikai Köztársaság', 'Dominikai Közösség', 'Dzsibuti', 'Dánia', 'Dél-Afrika', 'Dél-Korea', 'Dél-Szudán', 'Ecuador', 'Egyenlítői-Guinea', 'Egyesült Arab Emírségek', 'Egyesült Királyság', 'Egyiptom', 'Elefántcsontpart', 'Eritrea', 'Etiópia', 'Fehéroroszország', 'Fidzsi-szigetek', 'Finnország', 'Franciaország', 'Fülöp-szigetek', 'Gabon', 'Gambia', 'Ghána', 'Grenada', 'Grúzia', 'Guatemala', 'Guinea', 'Guyana', 'Görögország', 'Haiti', 'Hollandia', 'Horvátország', 'India', 'Indonézia', 'Irak', 'Irán', 'Izland', 'Izrael', 'Japán', 'Jemen', 'Jordánia', 'Kambodzsa', 'Kamerun', 'Kanada', 'Katar', 'Kazahsztán', 'Kelet-Timor', 'Kenya', 'Kirgizisztán', 'Kiribati', 'Kolumbia', 'Kongói Demokratikus Köztársaság', 'Kongói Köztársaság', 'Kuba', 'Kuvait', 'Kína', 'Közép-Afrika', 'Laosz', 'Lengyelország', 'Lesotho', 'Lettország', 'Libanon', 'Libéria', 'Liechtenstein', 'Litvánia', 'Luxemburg', 'Líbia', 'Macedónia', 'Madagaszkár', 'Magyarország', 'Malawi', 'Maldív-szigetek', 'Mali', 'Malájzia', 'Marokkó', 'Marshall-szigetek', 'Mauritánia', 'Mexikó', 'Mikronézia', 'Moldova', 'Monaco', 'Mongólia', 'Montenegró', 'Mozambik', 'Málta', 'Namíbia', 'Nauru', 'Nepál', 'Nicaragua', 'Niger', 'Nigéria', 'Norvégia', 'Németország', 'Olaszország', 'Omán', 'Oroszország', 'Pakisztán', 'Palau', 'Panama', 'Paraguay', 'Peru', 'Portugália', 'Pápua Új-Guinea', 'Románia', 'Ruanda', 'Saint Kitts és Nevis', 'Saint Vincent', 'Salamon-szigetek', 'Salvador', 'San Marino', 'Seychelle-szigetek', 'Spanyolország', 'Srí Lanka', 'Suriname', 'Svájc', 'Svédország', 'Szamoa', 'Szaúd-Arábia', 'Szenegál', 'Szerbia', 'Szingapúr', 'Szlovákia', 'Szlovénia', 'Szomália', 'Szudán', 'Szváziföld', 'Szíria', 'São Tomé és Príncipe', 'Tadzsikisztán', 'Tanzánia', 'Thaiföld', 'Togo', 'Tonga', 'Trinidad és Tobago', 'Tunézia', 'Tuvalu', 'Törökország', 'Türkmenisztán', 'Uganda', 'Ukrajna', 'Uruguay', 'Vanuatu', 'Venezuela', 'Vietnám', 'Zambia', 'Zimbabwe', 'Zöld-foki-szigetek', 'Észak-Korea', 'Észtország', 'Írország', 'Örményország', 'Új-Zéland', 'Üzbegisztán'
    );
    protected static $cityFormats = array(
        '{{firstName}}',
        '{{lastName}}',
    );
    protected static $streetNameFormats = array(
        '{{firstName}} {{streetSuffix}}',
        '{{lastName}} {{streetSuffix}}',
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}} {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{postcode}} {{city}}, {{streetAddress}}",
    );
    protected static $secondaryAddressFormats = array('##. emelet', '##. ajtó');

    /**
     * @example '10. emelet'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Pest'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
