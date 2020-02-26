<?php

namespace Faker\Provider\pl_PL;

use Faker\Provider\Base;

class LicensePlate extends Base
{
    /**
     * @var array list of Polish voivodeships and respective car registration number prefixes.
     * {@link}  http://prawo.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20170002355
     */
    protected static $voivodeships = [
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
    ];

    /**
     * @var array list of Polish counties and respective car registration number prefixes.
     * {@link} http://prawo.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20170002355
     * {@link} https://pl.wikipedia.org/wiki/Tablice_rejestracyjne_w_Polsce#Tablice_standardowe
     */
    protected static $counties = [
        'D' => [
            'Jelenia Góra' => ['J'],
            'Legnica' => ['L'],
            'Wałbrzych' => ['B'],
            'Wrocław' => ['W', 'X'],
            'bolesławiecki' => ['BL'],
            'dzierżoniowski' => ['DZ'],
            'głogowski' => ['GL'],
            'górowski' => ['GR'],
            'jaworski' => ['JA'],
            'jeleniogórski' => ['JE'],
            'kamiennogórski' => ['KA'],
            'kłodzki' => ['KL'],
            'legnicki' => ['LE'],
            'lubański' => ['LB'],
            'lubiński' => ['LU'],
            'lwówecki' => ['LW'],
            'milicki' => ['MI'],
            'oleśnicki' => ['OL'],
            'oławski' => ['OA'],
            'polkowicki' => ['PL'],
            'strzeliński' => ['ST'],
            'średzki' => ['SR'],
            'świdnicki' => ['SW'],
            'trzebnicki' => ['TR'],
            'wałbrzyski' => ['BA'],
            'wołowski' => ['WL'],
            'wrocławski' => ['WR'],
            'ząbkowicki' => ['ZA'],
            'zgorzelecki' => ['ZG'],
            'złotoryjski' => ['ZL'],
        ],
        'C' => [
            'Bydgoszcz' => ['B'],
            'Grudziądz' => ['G'],
            'Toruń' => ['T'],
            'Włocławek' => ['W'],
            'aleksandrowski' => ['AL'],
            'brodnicki' => ['BR'],
            'bydgoski' => ['BY'],
            'chełmiński' => ['CH'],
            'golubsko-dobrzyński' => ['GD'],
            'grudziądzki' => ['GR'],
            'inowrocławski' => ['IN'],
            'lipnowski' => ['LI'],
            'mogileński' => ['MG'],
            'nakielski' => ['NA'],
            'radziejowski' => ['RA'],
            'rypiński' => ['RY'],
            'sępoleński' => ['SE'],
            'świecki' => ['SW'],
            'toruński' => ['TR'],
            'tucholski' => ['TU'],
            'wąbrzeski' => ['WA'],
            'włocławski' => ['WL'],
            'żniński' => ['ZN'],
        ],
        'L' => [
            'Biała Podlaska' => ['B'],
            'Chełm' => ['C'],
            'Lublin' => ['U'],
            'Zamość' => ['Z'],
            'bialski' => ['BI'],
            'biłgorajski' => ['BL'],
            'chełmski' => ['CH'],
            'hrubieszowski' => ['HR'],
            'janowski' => ['JA'],
            'krasnostawski' => ['KS'],
            'kraśnicki' => ['KR'],
            'lubartowski' => ['LB'],
            'lubelski' => ['UB'],
            'łęczyński' => ['LE'],
            'łukowski' => ['LU'],
            'opolski' => ['OP'],
            'parczewski' => ['PA'],
            'puławski' => ['PU'],
            'radzyński' => ['RA'],
            'rycki' => ['RY'],
            'świdnicki' => ['SW'],
            'tomaszowski' => ['TM'],
            'włodawski' => ['WL'],
            'zamojski' => ['ZA'],
        ],
        'F' => [
            'Gorzów Wielkopolski' => ['G'],
            'Zielona Góra' => ['Z'],
            'gorzowski' => ['GW'],
            'krośnieński' => ['KR'],
            'międzyrzecki' => ['MI'],
            'nowosolski' => ['NW'],
            'słubicki' => ['SL'],
            'strzelecko-drezdenecki' => ['SD'],
            'sulęciński' => ['SU'],
            'świebodziński' => ['SW'],
            'wschowski' => ['WS'],
            'zielonogórski' => ['ZI'],
            'żagański' => ['ZG'],
            'żarski' => ['ZA'],
        ],
        'E' => [
            'Łódź' => ['L'],
            'Piotrków Trybunalski' => ['P'],
            'Skierniewice' => ['S'],
            'brzeziński' => ['BR'],
            'bełchatowski' => ['BE'],
            'kutnowski' => ['KU'],
            'łaski' => ['LA'],
            'łęczycki' => ['LE'],
            'łowicki' => ['LC'],
            'łódzki wschodni' => ['LW'],
            'opoczyński' => ['OP'],
            'pabianicki' => ['PA'],
            'pajęczański' => ['PJ'],
            'piotrkowski' => ['PI'],
            'poddębicki' => ['PD'],
            'radomszczański' => ['RA'],
            'rawski' => ['RW'],
            'sieradzki' => ['SI'],
            'skierniewicki' => ['SK'],
            'tomaszowski' => ['TM'],
            'wieluński' => ['WI'],
            'wieruszowski' => ['WE'],
            'zduńskowolski' => ['ZD'],
            'zgierski' => ['ZG'],

        ],
        'K' => [
            'Kraków' => ['R'],
            'Nowy Sącz' => ['N'],
            'Tarnów' => ['T'],
            'bocheński' => ['BA', 'BC'],
            'brzeski' => ['BR'],
            'chrzanowski' => ['CH'],
            'dąbrowski' => ['DA'],
            'gorlicki' => ['GR'],
            'krakowski' => ['RA'],
            'limanowski' => ['LI'],
            'miechowski' => ['MI'],
            'myślenicki' => ['MY'],
            'nowosądecki' => ['NS'],
            'nowotarski' => ['NT'],
            'olkuski' => ['OL'],
            'oświęcimski' => ['OS'],
            'proszowicki' => ['PR'],
            'suski' => ['SU'],
            'tarnowski' => ['TA'],
            'tatrzański' => ['TT'],
            'wadowicki' => ['WA'],
            'wielicki' => ['WI'],

        ],
        'W' => [
            'Ostrołęka' => ['O'],
            'Płock' => ['P'],
            'Radom' => ['R'],
            'Siedlce' => ['S'],
            'białobrzeski' => ['BR'],
            'ciechanowski' => ['CI'],
            'garwoliński' => ['G'],
            'gostyniński' => ['GS'],
            'grodziski' => ['GM'],
            'grójecki' => ['GR'],
            'kozienicki' => ['KZ'],
            'legionowski' => ['L'],
            'lipski' => ['LI'],
            'łosicki' => ['LS'],
            'makowski' => ['MA'],
            'miński' => ['M'],
            'mławski' => ['ML'],
            'nowodworski' => ['ND'],
            'ostrołęcki' => ['OS'],
            'ostrowski' => ['OR'],
            'otwocki' => ['OT'],
            'piaseczyński' => ['PA', 'PI'],
            'płocki' => ['PL'],
            'płoński' => ['PN'],
            'pruszkowski' => ['PP', 'PR', 'PS'],
            'przasnyski' => ['PZ'],
            'przysuski' => ['PY'],
            'pułtuski' => ['PU'],
            'radomski' => ['RA'],
            'siedlecki' => ['SI'],
            'sierpecki' => ['SE'],
            'sochaczewski' => ['SC'],
            'sokołowski' => ['SK'],
            'szydłowiecki' => ['SZ'],
            'warszawski' => ['A', 'B', 'D', 'E', 'F', 'H', 'I', 'J', 'K', 'N', 'T', 'U', 'W', 'X', 'Y'],
            'warszawski zachodni' => ['Z'],
            'węgrowski' => ['WE'],
            'wołomiński' => ['WL', 'V'],
            'wyszkowski' => ['WY'],
            'zwoleński' => ['ZW'],
            'żuromiński' => ['ZU'],
            'żyrardowski' => ['ZY'],
        ],
        'O' => [
            'Opole' => ['P'],
            'brzeski' => ['B'],
            'głubczycki' => ['GL'],
            'kędzierzyńsko-kozielski' => ['K'],
            'kluczborski' => ['KL'],
            'krapkowicki' => ['KR'],
            'namysłowski' => ['NA'],
            'nyski' => ['NY'],
            'oleski' => ['OL'],
            'opolski' => ['PO'],
            'prudnicki' => ['PR'],
            'strzelecki' => ['ST'],
        ],
        'R' => [
            'Krosno' => ['K'],
            'Przemyśl' => ['P'],
            'Rzeszów' => ['Z'],
            'Tarnobrzeg' => ['T'],
            'bieszczadzki' => ['BI'],
            'brzozowski' => ['BR'],
            'dębicki' => ['DE'],
            'jarosławski' => ['JA'],
            'jasielski' => ['JS'],
            'kolbuszowski' => ['KL'],
            'krośnieński' => ['KR'],
            'leski' => ['LS'],
            'leżajski' => ['LE'],
            'lubaczowski' => ['LU'],
            'łańcucki' => ['LA'],
            'mielecki' => ['MI'],
            'niżański' => ['NI'],
            'przemyski' => ['PR'],
            'przeworski' => ['PZ'],
            'ropczycko-sędziszowski' => ['RS'],
            'rzeszowski' => ['ZE'],
            'sanocki' => ['SA'],
            'stalowowolski' => ['ST'],
            'strzyżowski' => ['SR'],
            'tarnobrzeski' => ['TA'],
        ],
        'B' => [
            'Białystok' => ['I'],
            'Łomża' => ['L'],
            'Suwałki' => ['S'],
            'augustowski' => ['AU'],
            'białostocki' => ['IA'],
            'bielski' => ['BI'],
            'grajewski' => ['GR'],
            'hajnowski' => ['HA'],
            'kolneński' => ['KL'],
            'łomżyński' => ['LM'],
            'moniecki' => ['MN'],
            'sejneński' => ['SE'],
            'siemiatycki' => ['SI'],
            'sokólski' => ['SK'],
            'suwalski' => ['SU'],
            'wysokomazowiecki' => ['WM'],
            'zambrowski' => ['ZA'],
        ],
        'G' => [
            'Gdańsk' => ['D'],
            'Gdynia' => ['A'],
            'Słupsk' => ['S'],
            'Sopot' => ['SP'],
            'bytowski' => ['BY'],
            'chojnicki' => ['CH'],
            'człuchowski' => ['CZ'],
            'gdański' => ['DA'],
            'kartuski' => ['KY', 'KA'],
            'kościerski' => ['KS'],
            'kwidzyński' => ['KW'],
            'lęborski' => ['LE'],
            'malborski' => ['MB'],
            'nowodworski' => ['ND'],
            'pucki' => ['PU'],
            'słupski' => ['SL'],
            'starogardzki' => ['ST'],
            'sztumski' => ['SZ'],
            'tczewski' => ['TC'],
            'wejherowski' => ['WE', 'WO'],
        ],
        'S' => [
            'Bielsko-Biała' => ['B'],
            'Bytom' => ['Y'],
            'Chorzów' => ['H'],
            'Częstochowa' => ['C'],
            'Dąbrowa Górnicza' => ['D'],
            'Gliwice' => ['G'],
            'Jastrzębie-Zdrój' => ['JZ'],
            'Jaworzno' => ['J'],
            'Katowice' => ['K'],
            'Mysłowice' => ['M'],
            'Piekary Śląskie' => ['PI'],
            'Ruda Śląska,' => ['L', 'RS'],
            'Rybnik' => ['R'],
            'Siemianowice Śląskie' => ['I'],
            'Sosnowiec' => ['O'],
            'Świętochłowice' => ['W'],
            'Tychy' => ['T'],
            'Zabrze' => ['Z'],
            'Żory' => ['ZO'],
            'będziński' => ['BE'],
            'bielski' => ['BI'],
            'cieszyński' => ['CN', 'CI'],
            'częstochowski' => ['CZ'],
            'gliwicki' => ['GL'],
            'kłobucki' => ['KL'],
            'lubliniecki' => ['LU'],
            'mikołowski' => ['MI'],
            'myszkowski' => ['MY'],
            'pszczyński' => ['PS'],
            'raciborski' => ['RC'],
            'rybnicki' => ['RB'],
            'tarnogórski' => ['TA'],
            'bieruńsko - lędziński' => ['BL'],
            'wodzisławski' => ['WD', 'WZ'],
            'zawierciański' => ['ZA'],
            'żywiecki' => ['ZY'],
        ],
        'T' => [
            'Kielce' => ['K'],
            'buski' => ['BU'],
            'jędrzejowski' => ['JE'],
            'kazimierski' => ['KA'],
            'kielecki' => ['KI'],
            'konecki' => ['KN'],
            'opatowski' => ['OP'],
            'ostrowiecki' => ['OS'],
            'pińczowski' => ['PI'],
            'sandomierski' => ['SA'],
            'skarżyski' => ['SK'],
            'starachowicki' => ['ST'],
            'staszowski' => ['SZ'],
            'włoszczowski' => ['LW'],
        ],
        'N' => [
            'Elbląg' => ['E'],
            'Olsztyn' => ['O'],
            'bartoszycki' => ['BA'],
            'braniewski' => ['BR'],
            'działdowski' => ['DZ'],
            'elbląski' => ['EB'],
            'ełcki' => ['EL'],
            'giżycki' => ['GI'],
            'iławski' => ['IL'],
            'kętrzyński' => ['KE'],
            'lidzbarski' => ['LI'],
            'mrągowski' => ['MR'],
            'nidzicki' => ['NI'],
            'nowomiejski' => ['NM'],
            'olecki' => ['OE'],
            'gołdapski' => ['GO'],
            'olsztyński' => ['OL'],
            'ostródzki' => ['OS'],
            'piski' => ['PI'],
            'szczycieński' => ['SZ'],
            'węgorzewski' => ['WE'],
        ],
        'P' => [
            'Kalisz' => ['A', 'K'],
            'Konin' => ['KO', 'N'],
            'Leszno' => ['L'],
            'Poznań' => ['O', 'Y'],
            'chodzieski' => ['CH'],
            'czarnkowsko-trzcianecki' => ['CT'],
            'gnieźnieński' => ['GN'],
            'gostyński' => ['GS'],
            'grodziski' => ['GO'],
            'jarociński' => ['JA'],
            'kaliski' => ['KA'],
            'kępiński' => ['KE'],
            'kolski' => ['KL'],
            'koniński' => ['KN'],
            'kościański' => ['KS'],
            'krotoszyński' => ['KR'],
            'leszczyński' => ['LE'],
            'międzychodzki' => ['MI'],
            'nowotomyski' => ['NT'],
            'obornicki' => ['OB'],
            'ostrowski' => ['OS'],
            'ostrzeszowski' => ['OT'],
            'pilski' => ['P'],
            'pleszewski' => ['PL'],
            'poznański' => ['OZ', 'Z'],
            'rawicki' => ['RA'],
            'słupecki' => ['SL'],
            'szamotulski' => ['SZ'],
            'średzki' => ['SR'],
            'śremski' => ['SE'],
            'turecki' => ['TU'],
            'wągrowiecki' => ['WA'],
            'wolsztyński' => ['WL'],
            'wrzesiński' => ['WR'],
            'złotowski' => ['ZL'],
        ],
        'Z' => [
            'Koszalin' => ['K'],
            'Szczecin' => ['S', 'Z'],
            'Świnoujście' => ['SW'],
            'białogardzki' => ['BI'],
            'choszczeński' => ['CH'],
            'drawski' => ['DR'],
            'goleniowski' => ['GL'],
            'gryficki' => ['GY'],
            'gryfiński' => ['GR'],
            'kamieński' => ['KA'],
            'kołobrzeski' => ['KL'],
            'koszaliński' => ['KO'],
            'łobeski' => ['LO'],
            'myśliborski' => ['MY'],
            'policki' => ['PL'],
            'pyrzycki' => ['PY'],
            'sławieński' => ['SL'],
            'stargardzki' => ['ST'],
            'szczecinecki' => ['SZ'],
            'świdwiński' => ['SD'],
            'wałecki' => ['WA'],
        ],
        'U' => [
            'Siły Zbrojne Rzeczypospolitej Polskiej' => ['A', 'B', 'C', 'D', 'E', 'G', 'I', 'J', 'K', 'L'],
        ],
        'H' => [
            'Centralne Biuro Antykorupcyjne' => ['A'],
            'Służba Ochrony Państwa' => ['BA', 'BB', 'BE', 'BF', 'BG'],
            'Służba Celno-Skarbowa' => ['CA', 'CB', 'CC', 'CD', 'CE', 'CF', 'CG', 'CH', 'CJ', 'CK', 'CL', 'CM', 'CN', 'CO', 'CP', 'CR'],
            'Agencja Bezpieczeństwa Wewnętrznego' => ['K'],
            'Agencja Wywiadu' => ['K'],
            'Służba Kontrwywiadu Wojskowego' => ['M'],
            'Służba Wywiadu Wojskowego' => ['M'],
            'Policja' => ['PA', 'PB', 'PC', 'PD', 'PE', 'PF', 'PG', 'PH', 'PJ', 'PK', 'PL', 'PL', 'PL', 'PL', 'PL', 'PM', 'PN', 'PP', 'PS', 'PT', 'PU', 'PW', 'PZ'],
            'Straż Graniczna' => ['WA', 'WK'],
        ],
    ];


    /**
     * Generates random license plate.
     * Generation method based on the description from https://pl.wikipedia.org/wiki/Tablice_rejestracyjne_w_Polsce#Tablice_standardowe
     *
     * @param  array|NULL $voivodeships
     *
     * @return void
     */
    public function licensePlate($voivodeships = null)
    {
        if (is_array($voivodeships) && count($voivodeships)) {
            $voivodeship = static::randomElement($voivodeships);

            $voivodeshipCode = static::$voivodeships[$voivodeship];
        } else {
            $voivodeshipCode = static::randomElement(static::$voivodeships);
        }

        $countyCodes = static::randomElement(static::$counties[$voivodeshipCode]);

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
