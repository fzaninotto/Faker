<?php

namespace Faker\Provider\pl_PL;

class Address extends \Faker\Provider\Address
{
    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );
    protected static $addressFormats = array(
        '{{streetAddress}}, {{postcode}} {{city}}',
    );

    protected static $buildingNumber = array('##A', '##', '##A/##', '##/##');
    protected static $postcode = array('##-###');
    /**
     * @var array full list of Polish voivodeship
     */
    protected static $state = array(
        'dolnośląskie','kujawsko-pomorskie','lubelskie','lubuskie','łódzkie','małopolskie','mazowieckie','opolskie','podkarpackie',
        'podlaskie','pomorskie','śląskie','świętokrzyskie','warmińsko-mazurskie','wielkopolskie','zachodniopomorskie'
    );
    protected static $country = array(
        'Polska',
    );
    /**
     * @var array 250 Polish cities with biggest number of streets. Extracted from data issued by the official public postal service of Poland. @link http://www.poczta-polska.pl/
     */
    protected static $city = array(
        'Warszawa','Kraków','Łódź','Poznań','Wrocław','Gdańsk','Szczecin','Bydgoszcz','Lublin','Bielsko-Biała','Częstochowa','Katowice','Białystok','Gdynia','Radom',
        'Rzeszów','Gliwice','Kielce','Opole','Rybnik','Sosnowiec','Zabrze','Ruda Śląska','Jaworzno','Olsztyn','Zielona Góra','Bytom','Koszalin','Dąbrowa Górnicza',
        'Płock','Zawiercie','Wałbrzych','Tarnowskie Góry','Konin','Jelenia Góra','Tychy','Ostrołęka','Pruszków','Kędzierzyn-Koźle','Siedlce','Chorzów','Otwock','Piekary Śląskie',
        'Sochaczew','Piaseczno','Ciechanów','Grodzisk Mazowiecki','Jastrzębie-Zdrój','Świdnica','Władysławowo','Mysłowice','Ostrów Mazowiecka','Żory','Nysa','Mikołów','Chojnice',
        'Stargard Szczeciński','Będzin','Orzesze','Głogów','Siemianowice Śląskie','Sulejówek','Tarnobrzeg','Józefów','Konstancin-Jeziorna','Wodzisław Śląski','Legionowo','Świnoujście',
        'Brzeg','Kraśnik','Wyszków','Czeladź','Darłowo','Bieruń','Świętochłowice','Pułtusk','Kłobuck','Olkusz','Iława','Sopot','Czerwionka-Leszczyny','Łaziska Górne','Nowy Dwór Mazowiecki',
        'Police','Knurów','Lędziny','Nowa Ruda','Bogatynia','Krapkowice','Kluczbork','Boguszów-Gorce','Trzebiatów','Czaplinek','Pieszyce','Jastarnia','Bezrzecze','Kamieniec Ząbkowicki',
        'Jemielnica','Magdalenka','Czarna Woda','Kolonowskie','Wilkowice','Pawłowice','Dębogórze','Gołubie','Mokrzyska','Toruń','Łoś','Jadowniki','Szówsko','Krępiec','Gorzów Wielkopolski',
        'Kamień','Słupsk','Rynarzewo','Włocławek','Franciszków','Kalisz','Legnica','Pilchowo','Tarnów','Elbląg','Skalbmierz','Bogaczów','Jeziorna','Osówiec','Przemyśl',
        'Ostrowiec Świętokrzyski','Nowe Kramsko','Ostrów Wielkopolski','Zborowskie','Zamość','Grudziądz','Piła','Leszno','Koszwały','Kamienica Królewska','Jastrzębie','Inowrocław',
        'Lubin','Nowy Sącz','Ławy','Chełm','Tomaszów Mazowiecki','Stalowa Wola','Starachowice','Skarżysko-Kamienna','Biała Podlaska','Racibórz','Babienica','Puławy','Piotrków Trybunalski',
        'Suwałki','Szczawin','Bolesławiec','Jaroszowa Wola','Skierniewice','Gniezno','Łomża','Bełchatów','Przędzel','Postęp','Płazów','Szczecinek','Krosno','Zakopane','Ilkowice','Kutno','Ełk',
        'Dębica','Mielec','Szwecja','Lębork','Szteklin','Kołobrzeg','Kłodzko','Starogard Gdański','Jarosław','Sieradz','Zduńska Wola','Nowa Sól','Malbork','Tczew','Zgierz','Ustka','Śrem',
        'Kuźnica Masłońska','Kwidzyn','Krotoszyn','Żyrardów','Kościan','Swarzędz','Pęcice','Pabianice','Zgorzelec','Żary','Oświęcim','Jawor','Jasło','Wola Kiedrzyńska','Gorlice','Wejherowo',
        'Rumia','Bartoszyce','Sandomierz','Łęczna','Cieszyn','Chrzanów','Radomsko','Sanok','Pszczyna','Wągrowiec','Turek','Busko-Zdrój','Pruszcz Gdański','Luboń','Żywiec','Studzienice','Ostrzeszów',
        'Kętrzyn','Ostróda','Bochnia','Jelcz-Laskowice','Ząbki','Września','Bielawa','Nowy Targ','Giżycko','Dzierżoniów','Myszków','Marylka','Czechowice-Dziedzice','Łowicz','Łomianki','Świebodzice',
        'Świebodzin','Lubojenka','Lubliniec','Świecie','Lubartów','Lidzbark Warmiński','Świdnik','Pisz','Szczytno','Świdwin','Kozienice','Brodnica','Kościerzyna','Braniewo','Koło'
    );
    /**
     * @var array 549 most common Polish street names. Extracted from data issued by the official public postal service of Poland. @link http://www.poczta-polska.pl/
     */
    protected static $street = array(
        'Kościuszki Tadeusza','Mickiewicza Adama','Szkolna','Dworcowa','Kolejowa','Sienkiewicza Henryka','Rynek','Warszawska','Wojska Polskiego','Żeromskiego Stefana',
        'Polna','1 Maja','Ogrodowa','Pocztowa','Grunwaldzka','Kopernika Mikołaja','Leśna','Lipowa','Słowackiego Juliusza','Parkowa','Kościelna','Jagiellońska','Słoneczna',
        'Długa','Główna','Kilińskiego Jana','3 Maja','Krótka','Zielona','Konopnickiej Marii','Chopina Fryderyka','Armii Krajowej','Moniuszki Stanisława','Wiejska','Kwiatowa',
        'Dębowa','11 Listopada','Piaskowa','Cicha','Spokojna','Graniczna','Krakowska','Broniewskiego Władysława','Kasztanowa','Piłsudskiego Józefa','Poznańska','Reja Mikołaja',
        'Prusa Bolesława','Partyzantów','Wyspiańskiego Stanisława','Pomorska','Brzozowa','Kochanowskiego Jana','Zwycięstwa','Sportowa','Staszica Stanisława','Tuwima Juliana',
        'Matejki Jana','Akacjowa','Wiśniowa','Sosnowa','Piastowska','Łąkowa','Klonowa','Wesoła','Orzeszkowej Elizy','Świerkowa','Traugutta Romualda','Przemysłowa','Gdańska',
        'Nowa','Wolności','Wierzbowa','Fabryczna','Różana','Jasna','Sikorskiego Władysława','Spacerowa','Topolowa','Mieszka I','Pogodna','Wyzwolenia','Wrzosowa','Jana Pawła II Al.',
        'Wspólna','Młyńska','Paderewskiego Ignacego','Wąska','Okrzei Stefana','Targowa','Wrocławska','Królowej Jadwigi','Jana Pawła II','Jodłowa','Górna','Miła','Wojska Polskiego Al.',
        'Niepodległości Al.','Asnyka Adama','Boczna','Poprzeczna','Skłodowskiej-Curie Marii','Szpitalna','Prosta','Zamkowa','Kasprowicza Jana','Wiosenna','Batorego Stefana','Krucza',
        'Jesionowa','Sadowa','Reymonta Władysława','Modrzewiowa','Plater Emilii','Norwida Cypriana Kamila','Mazowiecka','Bukowa','Spółdzielcza','Malinowa','Jaśminowa','Śląska',
        'Szymanowskiego Karola','Wolności Pl.','Witosa Wincentego','Korczaka Janusza','Krasińskiego Zygmunta','Opolska','Towarowa','Powstańców Śląskich','Batalionów Chłopskich','Krzywa',
        'Bema Józefa','Miodowa','Piotrkowska','Mała','Lubelska','Żytnia','Chełmońskiego Józefa','Stawowa','Nałkowskiej Zofii','Narutowicza Gabriela','Harcerska','Wodna','Waryńskiego Ludwika',
        'Grzybowa','Jaworowa','Cmentarna','Strażacka','Kręta','Dolna','Złota','Kamienna','Górnicza','Robotnicza','Głowackiego Bartosza','Pułaskiego Kazimierza','Gałczyńskiego Konstantego Ildefonsa',
        'Limanowskiego Bolesława','Podgórna','Piękna','Chrobrego Bolesława','Wschodnia','Mazurska','Gajowa','Żelazna','Okrężna','Piłsudskiego Józefa Al.','Głogowska','Jagodowa','Zachodnia','Słowiańska',
        'Wieniawskiego Henryka','Grabowa','Bałtycka','Żwirki i Wigury','Jagiełły Władysława','Mostowa','Fredry Aleksandra','Katowicka','Długosza Jana','Żurawia','Morska','Grottgera Artura','Tęczowa',
        'Morcinka Gustawa','Letnia','Wilcza','Lelewela Joachima','Dobra','Orzechowa','Legionów','Kosynierów','Kaszubska','Południowa','Szarych Szeregów','Jarzębinowa','Łużycka','Racławicka','Andersa Władysława',
        'Północna','Strzelecka','Czarnieckiego Stefana','Zacisze','Poziomkowa','Staffa Leopolda','Źródlana','Wyszyńskiego Stefana','Rycerska','Czereśniowa','Toruńska','Zapolskiej Gabrieli','Ludowa','Sobieskiego Jana III',
        'Struga Andrzeja','Częstochowska','Rolna','Łokietka Władysława','Świętojańska','Kraszewskiego Józefa Ignacego','Baczyńskiego Krzysztofa Kamila','Szczecińska','Orkana Władysława','Franciszkańska','Bursztynowa',
        'Kołłątaja Hugona','Działkowa','Brzechwy Jana','Dworska','Składowa','Daszyńskiego Ignacego','Zamenhofa Ludwika','Bydgoska','Niemcewicza Juliana Ursyna','Chmielna','Radosna',
        'Piłsudskiego Józefa','Kalinowa','Owocowa','Gliwicka','Kujawska','Orla','Płocka','Gołębia','Łączna','Powstańców Wielkopolskich','Leszczynowa','Miarki Karola','Lwowska','Tatrzańska',
        'Solskiego Ludwika','Hutnicza','Stwosza Wita','Ptasia','Rzemieślnicza','Ściegiennego Piotra','Rumiankowa','Starowiejska','Jaracza Stefana','Grochowska','Morelowa','Myśliwska',
        'Krasickiego Ignacego','Podleśna','Turystyczna','Jałowcowa','Fałata Juliana','Zbożowa','Beskidzka','Bolesława Krzywoustego','Malczewskiego Jacka','Świętokrzyska','Grodzka',
        'Makowa','Stalowa','Chabrowa','Pawia','Osiedlowa','Jaskółcza','Kruczkowskiego Leona','Wileńska','Cisowa','Widok','Rzeczna','Zdrojowa','Jesienna','Błękitna','Wróblewskiego Walerego',
        'Rejtana Tadeusza','Marszałkowska','Krańcowa','Puławska','Bolesława Chrobrego','Daleka','Legnicka','Niepodległości','Kusocińskiego Janusza','Hetmańska','Dąbrowskiego Jarosława',
        'Skrajna','Srebrna','Żwirowa','Rolnicza','Astrów','Karłowicza Mieczysława','Sobieskiego Jana','Korfantego Wojciecha','Popiełuszki Jerzego','Kossaka Juliusza','Olsztyńska','Wysoka',
        'Podmiejska','Makuszyńskiego Kornela','Królewska','Słowicza','Sucharskiego Henryka','Kielecka','Kaliska','Nowowiejska','Władysława IV','Kołobrzeska','Środkowa','Jastrzębia',
        'Hallera Józefa','Szeroka','Kasprzaka Marcina','Pola Wincentego','Zakopiańska','Nowy Świat','Radomska','Mokra','Borowa','Średnia','Reymonta Władysława Stanisława','Ciasna','Niecała',
        'Diamentowa','Szewska','Modrzejewskiej Heleny','Stroma','Żeglarska','Lompy Józefa','Łanowa','Bogusławskiego Wojciecha','Rynek Rynek','Jagiellońskie Os.','Torowa','Drzymały Michała',
        'Francuska','Zielna','Sandomierska','Rataja Macieja','Przechodnia','Wybickiego Józefa','Konwaliowa','Wronia','Ułańska','Rybnicka','Nadrzeczna','Cieszyńska','Wczasowa',
        'Obrońców Westerplatte','Dąbrowskiego Jana Henryka','Willowa','Łukasiewicza Ignacego','Powstańców','Sienna','Podchorążych','Sokola','Nadbrzeżna','Przybyszewskiego Stanisława',
        'Wałowa','Poniatowskiego Józefa','Białostocka','Piwna','Żniwna','Tysiąclecia','Miedziana','Agrestowa','Okulickiego Leopolda','Chłodna','Żwirki Franciszka i Wigury Stanisława',
        'Urocza','Bytomska','Hoża','Bracka','Leśmiana Bolesława','Lazurowa','Pułaskiego Kazimierza','Kowalska','Liliowa','Stolarska','Młynarska','Poniatowskiego Józefa','Dąbrowszczaków',
        'Żabia','Rybacka','Turkusowa','Sowia','Bielska','Studzienna','Łagiewnicka','Koszalińska','Łowicka','Małopolska','Siewna','Zwierzyniecka','Okopowa','Bema Józefa','Kopalniana',
        'Węglowa','Konarskiego Stanisława','Plebiscytowa','Łabędzia','Wańkowicza Melchiora','Oświęcimska','Przyjaźni','Kazimierza Wielkiego','Solidarności Al.','Rybna','Dąbrówki','Karpacka',
        'Dąbrowskiej Marii','Zgierska','Handlowa','Czwartaków','Wapienna','Podwale','Litewska','Księżycowa','Żołnierska','Jerozolimskie Al.','Fiołkowa','Konstytucji 3 Maja',
        'Curie-Skłodowskiej Marii','Bohaterów Westerplatte','Wielkopolska','Porzeczkowa','Dożynkowa','Jeżynowa','Szmaragdowa','Modlińska','Koralowa','Skośna','Puszkina Aleksandra',
        'Grota-Roweckiego Stefana','Kartuska','Pszenna','Głogowa','Szafirowa','Modra','Górnośląska','Skargi Piotra','Wyzwolenia Al.','Brzoskwiniowa','Energetyków','Szczęśliwa','Gościnna',
        'Niska','Świdnicka','Patriotów','Okólna','Chłopska','Botaniczna','Gagarina Jurija','Sawickiej Hanki','Bieszczadzka','Małachowskiego Stanisława','Rubinowa','Olchowa','Cedrowa',
        'Ceglana','Lawendowa','Gdyńska','Lechicka','Warmińska','Koszykowa','Portowa','Kosmonautów','Lotnicza','Cegielniana','Majowa','Kłosowa','Równa','Kolberga Oskara','Sąsiedzka',
        'Podhalańska','Lotników','Budowlanych','Dubois Stanisława','Azaliowa','Kwiatkowskiego Eugeniusza','Senatorska','Sucha','Tylna','Chorzowska','Kościuszki Tadeusza Pl.',
        'Piekarska','Magazynowa','Wołodyjowskiego Michała','Dmowskiego Romana','Zajęcza','Wolska','Nowowiejskiego Feliksa','Promienna','Niedziałkowskiego Mieczysława','Piastowskie Os.',
        'Iwaszkiewicza Jarosława','Skargi Piotra','Żółkiewskiego Stanisława','Kleeberga Franciszka','Kolorowa','Sowińskiego Józefa','Zakątek','Olimpijska','Dąbrowskiego Jarosława',
        'Truskawkowa','Odrodzenia','Maczka Stanisława','Rodzinna','Bratków','Pokoju','Perłowa','Staromiejska','Solna','Grójecka','Łomżyńska','Folwarczna','Sądowa','Gminna','Sikorskiego Władysława',
        'Słonecznikowa','Barlickiego Norberta','Wandy','Łódzka','Kresowa','Strumykowa','Odrzańska','Kołłątaja Hugo','Ligonia Juliusza','Siemiradzkiego Henryka','Tulipanowa','Saperów','Inżynierska',
        'Gojawiczyńskiej Poli','Gnieźnieńska','Lisia','Husarska','Granitowa','Tulipanów'
    );

    public function city()
    {
        return static::randomElement(static::$city);
    }

    public function streetName()
    {
        return static::randomElement(static::$street);
    }
}
