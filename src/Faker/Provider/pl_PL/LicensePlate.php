<?php

namespace Faker\Provider\pl_PL;

use Faker\Provider\Base;

class LicensePlate extends Base
{
    /**
     * @var array list of Polish voivodeships and respective car registration number prefixes.
     * {@link}  http://prawo.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20170002355
     */
    protected static $voivodeships = array(
        'dolnośląskie' => 'D',
        'kujawsko-pomorskie' => 'C',
        'lubelskie' => 'L',
        'lubuskie' => 'F',
        'łódzkie' => 'E',
        'małopolskie' => 'K',
        'mazowieckie' => 'W',
        'opolskie' => 'O',
        'podkarpackie' => 'R',
        'podlaskie' => 'B',
        'pomorskie' => 'G',
        'śląskie' => 'S',
        'świętokrzyskie' => 'T',
        'warmińsko-mazurskie' => 'N',
        'wielkopolskie' => 'P',
        'zachodnio-pomorskie' => 'Z',
        'army' => 'U',
        'services' => 'H',
    );

    /**
     * @var array list of Polish counties and respective car registration number prefixes.
     * {@link} http://prawo.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20170002355
     * {@link} https://pl.wikipedia.org/wiki/Tablice_rejestracyjne_w_Polsce#Tablice_standardowe
     */
    protected static $counties = array(
        'D' => array(
            'Jelenia Góra' => array('J'),
            'Legnica' => array('L'),
            'Wałbrzych' => array('B'),
            'Wrocław' => array('W', 'X'),
            'bolesławiecki' => array('BL'),
            'dzierżoniowski' => array('DZ'),
            'głogowski' => array('GL'),
            'górowski' => array('GR'),
            'jaworski' => array('JA'),
            'jeleniogórski' => array('JE'),
            'kamiennogórski' => array('KA'),
            'kłodzki' => array('KL'),
            'legnicki' => array('LE'),
            'lubański' => array('LB'),
            'lubiński' => array('LU'),
            'lwówecki' => array('LW'),
            'milicki' => array('MI'),
            'oleśnicki' => array('OL'),
            'oławski' => array('OA'),
            'polkowicki' => array('PL'),
            'strzeliński' => array('ST'),
            'średzki' => array('SR'),
            'świdnicki' => array('SW'),
            'trzebnicki' => array('TR'),
            'wałbrzyski' => array('BA'),
            'wołowski' => array('WL'),
            'wrocławski' => array('WR'),
            'ząbkowicki' => array('ZA'),
            'zgorzelecki' => array('ZG'),
            'złotoryjski' => array('ZL'),
        ),
        'C' => array(
            'Bydgoszcz' => array('B'),
            'Grudziądz' => array('G'),
            'Toruń' => array('T'),
            'Włocławek' => array('W'),
            'aleksandrowski' => array('AL'),
            'brodnicki' => array('BR'),
            'bydgoski' => array('BY'),
            'chełmiński' => array('CH'),
            'golubsko-dobrzyński' => array('GD'),
            'grudziądzki' => array('GR'),
            'inowrocławski' => array('IN'),
            'lipnowski' => array('LI'),
            'mogileński' => array('MG'),
            'nakielski' => array('NA'),
            'radziejowski' => array('RA'),
            'rypiński' => array('RY'),
            'sępoleński' => array('SE'),
            'świecki' => array('SW'),
            'toruński' => array('TR'),
            'tucholski' => array('TU'),
            'wąbrzeski' => array('WA'),
            'włocławski' => array('WL'),
            'żniński' => array('ZN'),
        ),
        'L' => array(
            'Biała Podlaska' => array('B'),
            'Chełm' => array('C'),
            'Lublin' => array('U'),
            'Zamość' => array('Z'),
            'bialski' => array('BI'),
            'biłgorajski' => array('BL'),
            'chełmski' => array('CH'),
            'hrubieszowski' => array('HR'),
            'janowski' => array('JA'),
            'krasnostawski' => array('KS'),
            'kraśnicki' => array('KR'),
            'lubartowski' => array('LB'),
            'lubelski' => array('UB'),
            'łęczyński' => array('LE'),
            'łukowski' => array('LU'),
            'opolski' => array('OP'),
            'parczewski' => array('PA'),
            'puławski' => array('PU'),
            'radzyński' => array('RA'),
            'rycki' => array('RY'),
            'świdnicki' => array('SW'),
            'tomaszowski' => array('TM'),
            'włodawski' => array('WL'),
            'zamojski' => array('ZA'),
        ),
        'F' => array(
            'Gorzów Wielkopolski' => array('G'),
            'Zielona Góra' => array('Z'),
            'gorzowski' => array('GW'),
            'krośnieński' => array('KR'),
            'międzyrzecki' => array('MI'),
            'nowosolski' => array('NW'),
            'słubicki' => array('SL'),
            'strzelecko-drezdenecki' => array('SD'),
            'sulęciński' => array('SU'),
            'świebodziński' => array('SW'),
            'wschowski' => array('WS'),
            'zielonogórski' => array('ZI'),
            'żagański' => array('ZG'),
            'żarski' => array('ZA'),
        ),
        'E' => array(
            'Łódź' => array('L'),
            'Piotrków Trybunalski' => array('P'),
            'Skierniewice' => array('S'),
            'brzeziński' => array('BR'),
            'bełchatowski' => array('BE'),
            'kutnowski' => array('KU'),
            'łaski' => array('LA'),
            'łęczycki' => array('LE'),
            'łowicki' => array('LC'),
            'łódzki wschodni' => array('LW'),
            'opoczyński' => array('OP'),
            'pabianicki' => array('PA'),
            'pajęczański' => array('PJ'),
            'piotrkowski' => array('PI'),
            'poddębicki' => array('PD'),
            'radomszczański' => array('RA'),
            'rawski' => array('RW'),
            'sieradzki' => array('SI'),
            'skierniewicki' => array('SK'),
            'tomaszowski' => array('TM'),
            'wieluński' => array('WI'),
            'wieruszowski' => array('WE'),
            'zduńskowolski' => array('ZD'),
            'zgierski' => array('ZG'),

        ),
        'K' => array(
            'Kraków' => array('R'),
            'Nowy Sącz' => array('N'),
            'Tarnów' => array('T'),
            'bocheński' => array('BA', 'BC'),
            'brzeski' => array('BR'),
            'chrzanowski' => array('CH'),
            'dąbrowski' => array('DA'),
            'gorlicki' => array('GR'),
            'krakowski' => array('RA'),
            'limanowski' => array('LI'),
            'miechowski' => array('MI'),
            'myślenicki' => array('MY'),
            'nowosądecki' => array('NS'),
            'nowotarski' => array('NT'),
            'olkuski' => array('OL'),
            'oświęcimski' => array('OS'),
            'proszowicki' => array('PR'),
            'suski' => array('SU'),
            'tarnowski' => array('TA'),
            'tatrzański' => array('TT'),
            'wadowicki' => array('WA'),
            'wielicki' => array('WI'),
        ),
        'W' => array(
            'Ostrołęka' => array('O'),
            'Płock' => array('P'),
            'Radom' => array('R'),
            'Siedlce' => array('S'),
            'białobrzeski' => array('BR'),
            'ciechanowski' => array('CI'),
            'garwoliński' => array('G'),
            'gostyniński' => array('GS'),
            'grodziski' => array('GM'),
            'grójecki' => array('GR'),
            'kozienicki' => array('KZ'),
            'legionowski' => array('L'),
            'lipski' => array('LI'),
            'łosicki' => array('LS'),
            'makowski' => array('MA'),
            'miński' => array('M'),
            'mławski' => array('ML'),
            'nowodworski' => array('ND'),
            'ostrołęcki' => array('OS'),
            'ostrowski' => array('OR'),
            'otwocki' => array('OT'),
            'piaseczyński' => array('PA', 'PI'),
            'płocki' => array('PL'),
            'płoński' => array('PN'),
            'pruszkowski' => array('PP', 'PR', 'PS'),
            'przasnyski' => array('PZ'),
            'przysuski' => array('PY'),
            'pułtuski' => array('PU'),
            'radomski' => array('RA'),
            'siedlecki' => array('SI'),
            'sierpecki' => array('SE'),
            'sochaczewski' => array('SC'),
            'sokołowski' => array('SK'),
            'szydłowiecki' => array('SZ'),
            'warszawski' => array('A', 'B', 'D', 'E', 'F', 'H', 'I', 'J', 'K', 'N', 'T', 'U', 'W', 'X', 'Y'),
            'warszawski zachodni' => array('Z'),
            'węgrowski' => array('WE'),
            'wołomiński' => array('WL', 'V'),
            'wyszkowski' => array('WY'),
            'zwoleński' => array('ZW'),
            'żuromiński' => array('ZU'),
            'żyrardowski' => array('ZY'),
        ),
        'O' => array(
            'Opole' => array('P'),
            'brzeski' => array('B'),
            'głubczycki' => array('GL'),
            'kędzierzyńsko-kozielski' => array('K'),
            'kluczborski' => array('KL'),
            'krapkowicki' => array('KR'),
            'namysłowski' => array('NA'),
            'nyski' => array('NY'),
            'oleski' => array('OL'),
            'opolski' => array('PO'),
            'prudnicki' => array('PR'),
            'strzelecki' => array('ST'),
        ),
        'R' => array(
            'Krosno' => array('K'),
            'Przemyśl' => array('P'),
            'Rzeszów' => array('Z'),
            'Tarnobrzeg' => array('T'),
            'bieszczadzki' => array('BI'),
            'brzozowski' => array('BR'),
            'dębicki' => array('DE'),
            'jarosławski' => array('JA'),
            'jasielski' => array('JS'),
            'kolbuszowski' => array('KL'),
            'krośnieński' => array('KR'),
            'leski' => array('LS'),
            'leżajski' => array('LE'),
            'lubaczowski' => array('LU'),
            'łańcucki' => array('LA'),
            'mielecki' => array('MI'),
            'niżański' => array('NI'),
            'przemyski' => array('PR'),
            'przeworski' => array('PZ'),
            'ropczycko-sędziszowski' => array('RS'),
            'rzeszowski' => array('ZE'),
            'sanocki' => array('SA'),
            'stalowowolski' => array('ST'),
            'strzyżowski' => array('SR'),
            'tarnobrzeski' => array('TA'),
        ),
        'B' => array(
            'Białystok' => array('I'),
            'Łomża' => array('L'),
            'Suwałki' => array('S'),
            'augustowski' => array('AU'),
            'białostocki' => array('IA'),
            'bielski' => array('BI'),
            'grajewski' => array('GR'),
            'hajnowski' => array('HA'),
            'kolneński' => array('KL'),
            'łomżyński' => array('LM'),
            'moniecki' => array('MN'),
            'sejneński' => array('SE'),
            'siemiatycki' => array('SI'),
            'sokólski' => array('SK'),
            'suwalski' => array('SU'),
            'wysokomazowiecki' => array('WM'),
            'zambrowski' => array('ZA'),
        ),
        'G' => array(
            'Gdańsk' => array('D'),
            'Gdynia' => array('A'),
            'Słupsk' => array('S'),
            'Sopot' => array('SP'),
            'bytowski' => array('BY'),
            'chojnicki' => array('CH'),
            'człuchowski' => array('CZ'),
            'gdański' => array('DA'),
            'kartuski' => array('KY', 'KA'),
            'kościerski' => array('KS'),
            'kwidzyński' => array('KW'),
            'lęborski' => array('LE'),
            'malborski' => array('MB'),
            'nowodworski' => array('ND'),
            'pucki' => array('PU'),
            'słupski' => array('SL'),
            'starogardzki' => array('ST'),
            'sztumski' => array('SZ'),
            'tczewski' => array('TC'),
            'wejherowski' => array('WE', 'WO'),
        ),
        'S' => array(
            'Bielsko-Biała' => array('B'),
            'Bytom' => array('Y'),
            'Chorzów' => array('H'),
            'Częstochowa' => array('C'),
            'Dąbrowa Górnicza' => array('D'),
            'Gliwice' => array('G'),
            'Jastrzębie-Zdrój' => array('JZ'),
            'Jaworzno' => array('J'),
            'Katowice' => array('K'),
            'Mysłowice' => array('M'),
            'Piekary Śląskie' => array('PI'),
            'Ruda Śląska,' => array('L', 'RS'),
            'Rybnik' => array('R'),
            'Siemianowice Śląskie' => array('I'),
            'Sosnowiec' => array('O'),
            'Świętochłowice' => array('W'),
            'Tychy' => array('T'),
            'Zabrze' => array('Z'),
            'Żory' => array('ZO'),
            'będziński' => array('BE'),
            'bielski' => array('BI'),
            'cieszyński' => array('CN', 'CI'),
            'częstochowski' => array('CZ'),
            'gliwicki' => array('GL'),
            'kłobucki' => array('KL'),
            'lubliniecki' => array('LU'),
            'mikołowski' => array('MI'),
            'myszkowski' => array('MY'),
            'pszczyński' => array('PS'),
            'raciborski' => array('RC'),
            'rybnicki' => array('RB'),
            'tarnogórski' => array('TA'),
            'bieruńsko - lędziński' => array('BL'),
            'wodzisławski' => array('WD', 'WZ'),
            'zawierciański' => array('ZA'),
            'żywiecki' => array('ZY'),
        ),
        'T' => array(
            'Kielce' => array('K'),
            'buski' => array('BU'),
            'jędrzejowski' => array('JE'),
            'kazimierski' => array('KA'),
            'kielecki' => array('KI'),
            'konecki' => array('KN'),
            'opatowski' => array('OP'),
            'ostrowiecki' => array('OS'),
            'pińczowski' => array('PI'),
            'sandomierski' => array('SA'),
            'skarżyski' => array('SK'),
            'starachowicki' => array('ST'),
            'staszowski' => array('SZ'),
            'włoszczowski' => array('LW'),
        ),
        'N' => array(
            'Elbląg' => array('E'),
            'Olsztyn' => array('O'),
            'bartoszycki' => array('BA'),
            'braniewski' => array('BR'),
            'działdowski' => array('DZ'),
            'elbląski' => array('EB'),
            'ełcki' => array('EL'),
            'giżycki' => array('GI'),
            'iławski' => array('IL'),
            'kętrzyński' => array('KE'),
            'lidzbarski' => array('LI'),
            'mrągowski' => array('MR'),
            'nidzicki' => array('NI'),
            'nowomiejski' => array('NM'),
            'olecki' => array('OE'),
            'gołdapski' => array('GO'),
            'olsztyński' => array('OL'),
            'ostródzki' => array('OS'),
            'piski' => array('PI'),
            'szczycieński' => array('SZ'),
            'węgorzewski' => array('WE'),
        ),
        'P' => array(
            'Kalisz' => array('A', 'K'),
            'Konin' => array('KO', 'N'),
            'Leszno' => array('L'),
            'Poznań' => array('O', 'Y'),
            'chodzieski' => array('CH'),
            'czarnkowsko-trzcianecki' => array('CT'),
            'gnieźnieński' => array('GN'),
            'gostyński' => array('GS'),
            'grodziski' => array('GO'),
            'jarociński' => array('JA'),
            'kaliski' => array('KA'),
            'kępiński' => array('KE'),
            'kolski' => array('KL'),
            'koniński' => array('KN'),
            'kościański' => array('KS'),
            'krotoszyński' => array('KR'),
            'leszczyński' => array('LE'),
            'międzychodzki' => array('MI'),
            'nowotomyski' => array('NT'),
            'obornicki' => array('OB'),
            'ostrowski' => array('OS'),
            'ostrzeszowski' => array('OT'),
            'pilski' => array('P'),
            'pleszewski' => array('PL'),
            'poznański' => array('OZ', 'Z'),
            'rawicki' => array('RA'),
            'słupecki' => array('SL'),
            'szamotulski' => array('SZ'),
            'średzki' => array('SR'),
            'śremski' => array('SE'),
            'turecki' => array('TU'),
            'wągrowiecki' => array('WA'),
            'wolsztyński' => array('WL'),
            'wrzesiński' => array('WR'),
            'złotowski' => array('ZL'),
        ),
        'Z' => array(
            'Koszalin' => array('K'),
            'Szczecin' => array('S', 'Z'),
            'Świnoujście' => array('SW'),
            'białogardzki' => array('BI'),
            'choszczeński' => array('CH'),
            'drawski' => array('DR'),
            'goleniowski' => array('GL'),
            'gryficki' => array('GY'),
            'gryfiński' => array('GR'),
            'kamieński' => array('KA'),
            'kołobrzeski' => array('KL'),
            'koszaliński' => array('KO'),
            'łobeski' => array('LO'),
            'myśliborski' => array('MY'),
            'policki' => array('PL'),
            'pyrzycki' => array('PY'),
            'sławieński' => array('SL'),
            'stargardzki' => array('ST'),
            'szczecinecki' => array('SZ'),
            'świdwiński' => array('SD'),
            'wałecki' => array('WA'),
        ),
        'U' => array(
            'Siły Zbrojne Rzeczypospolitej Polskiej' => array('A', 'B', 'C', 'D', 'E', 'G', 'I', 'J', 'K', 'L'),
        ),
        'H' => array(
            'Centralne Biuro Antykorupcyjne' => array('A'),
            'Służba Ochrony Państwa' => array('BA', 'BB', 'BE', 'BF', 'BG'),
            'Służba Celno-Skarbowa' => array('CA', 'CB', 'CC', 'CD', 'CE', 'CF', 'CG', 'CH', 'CJ', 'CK', 'CL', 'CM', 'CN', 'CO', 'CP', 'CR'),
            'Agencja Bezpieczeństwa Wewnętrznego' => array('K'),
            'Agencja Wywiadu' => array('K'),
            'Służba Kontrwywiadu Wojskowego' => array('M'),
            'Służba Wywiadu Wojskowego' => array('M'),
            'Policja' => array('PA', 'PB', 'PC', 'PD', 'PE', 'PF', 'PG', 'PH', 'PJ', 'PK', 'PL', 'PL', 'PL', 'PL', 'PL', 'PM', 'PN', 'PP', 'PS', 'PT', 'PU', 'PW', 'PZ'),
            'Straż Graniczna' => array('WA', 'WK'),
        ),
    );


    /**
     * Generates random license plate.
     * Generation method based on the description from https://pl.wikipedia.org/wiki/Tablice_rejestracyjne_w_Polsce#Tablice_standardowe
     *
     * @param  array|null $voivodeships
     * @param  array|null $counties
     *
     * @return string
     */
    public function licensePlate($voivodeships = null, $counties = null)
    {
        if (is_array($voivodeships)) {
            $availableVoivodeships = array_keys(static::$voivodeships);
            $voivodeships = array_filter($voivodeships, function ($value) use ($availableVoivodeships) {
                return in_array($value, $availableVoivodeships);
            });
        } else {
            $voivodeships = array();
        }

        if (count($voivodeships)) {
            $voivodeship = static::randomElement($voivodeships);

            $voivodeshipCode = static::$voivodeships[$voivodeship];
        } else {
            $voivodeshipCode = static::randomElement(static::$voivodeships);
        }

        if (is_array($counties)) {
            $availableCounties = array_keys(static::$counties[$voivodeshipCode]);
            $counties = array_filter($counties, function ($value) use ($availableCounties) {
                return in_array($value, $availableCounties);
            });
        } else {
            $counties = array();
        }

        if (count($counties)) {
            $countyCodes = static::$counties[$voivodeshipCode][static::randomElement($counties)];
        } else {
            $countyCodes = static::randomElement(static::$counties[$voivodeshipCode]);
        }

        $countyCode = static::randomElement($countyCodes);

        if (strlen($countyCode) === 1) {
            switch (static::numberBetween(1, 5)) {
                case 1:
                    $randomCode = static::regexify('\d{5}');
                    break;
                case 2:
                    $randomCode = static::regexify('\d{4}[A-Z]');
                    break;
                case 3:
                    $randomCode = static::regexify('\d{3}[A-Z]{2}');
                    break;
                case 4:
                    $randomCode = static::regexify('[1-9][A-Z]\d{3}');
                    break;
                case 5:
                    $randomCode = static::regexify('[1-9][A-Z]{2}\d{2}');
                    break;
            }
        } else {
            switch (static::numberBetween(1, 11)) {
                case 1:
                    $randomCode = static::regexify('[A-Z]\d{3}');
                    break;
                case 2:
                    $randomCode = static::regexify('\d{2}[A-Z]{2}');
                    break;
                case 3:
                    $randomCode = static::regexify('[1-9][A-Z]\d{2}');
                    break;
                case 4:
                    $randomCode = static::regexify('\d{2}[A-Z][1-9]');
                    break;
                case 5:
                    $randomCode = static::regexify('[1-9][A-Z]{2}[1-9]');
                    break;
                case 6:
                    $randomCode = static::regexify('[A-Z]{2}\d{2}');
                    break;
                case 7:
                    $randomCode = static::regexify('\d{5}');
                    break;
                case 8:
                    $randomCode = static::regexify('\d{4}[A-Z]');
                    break;
                case 9:
                    $randomCode = static::regexify('\d{3}[A-Z]{2}');
                    break;
                case 10:
                    $randomCode = static::regexify('[A-Z]\d{2}[A-Z]');
                    break;
                case 11:
                    $randomCode = static::regexify('[A-Z][1-9][A-Z]{2}');
                    break;
            }
        }

        return "{$voivodeshipCode}{$countyCode} {$randomCode}";
    }
}
