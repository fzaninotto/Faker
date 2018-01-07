<?php

namespace Faker\Provider\lt_LT;

class Person extends \Faker\Provider\Person
{

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
    );

    protected static $titleMale = array('p.', 'ponas');

    protected static $titleFemale = array('p.', 'ponia', 'panelė');

    /**
     * @link https://lt.wikipedia.org/wiki/S%C4%85ra%C5%A1as:Lietuvoje_paplit%C4%99_vardai
     **/
    protected static $firstNameMale = array(
        "Abramas", "Abraomas", "Achilas", "Adalbertas", "Adamas", "Adas", "Adolfas", "Adolis", "Adomas",
        "Adrijus", "Agatas", "Agnius", "Aidas", "Ainius", "Aistis", "Aivaras", "Akimas", "Akvilinas", "Albertas", "Albrechtas",
        "Albinas", "Aldonas", "Aleksandras", "Aleksas", "Alenas", "Alfas", "Alfonsas", "Alfredas", "Algimantas", "Algirdas",
        "Algis", "Alius", "Almantas", "Almis", "Almonas", "Aloyzas", "Alpas", "Alpis", "Alvidas", "Alvydas", "Ambraziejus",
        "Anatolijus", "Anatolis", "Andreas", "Andriejus", "Andrius", "Andžejus", "Anicetas", "Anisimas", "Antanas", "Antonas",
        "Antonijus", "Antonis", "Anupras", "Anzelmas", "Apolinaras", "Apolonijus", "Aras", "Arijus", "Arimantas", "Aristarchas",
        "Aristidas", "Arkadijus", "Armantas", "Arminas", "Arnas", "Arnoldas", "Aronas", "Arsenas", "Arsenijus", "Artas",
        "Artiomas", "Artūras", "Arūnas", "Arvaidas", "Arvydas", "Astijus", "Audrius", "Audrys", "Audronius", "Augis",
        "Augustas", "Augustinas", "Aurelijus", "Aurimas", "Aušrius", "Aušrys", "Ąžuolas", "Balys", "Baltazaras", "Baltramiejus",
        "Baltrus", "Banguolis", "Bartas", "Bartvydas", "Bazilijus", "Benas", "Benediktas", "Benonas", "Benius", "Benjaminas",
        "Bernardas", "Beržas", "Bijūnas", "Bogdanas", "Boguslavas", "Boleslavas", "Boleslovas", "Bonifacas", "Borisas",
        "Bronislavas", "Bronislovas", "Bronius", "Brunas", "Brunonas", "Cecilijus", "Celestinas", "Cezaris", "Chaimas",
        "Charitonas", "Ciprijonas", "Česius", "Česlovas", "Čiogintas", "Dainius", "Daivis", "Dalius", "Damijonas", "Danas",
        "Dangerutis", "Danielius", "Danila", "Danius", "Darijus", "Darius", "Dariušas", "Daumantas", "Davidas", "Deimantas",
        "Deividas", "Deivis", "Demetrijus", "Demjanas", "Denis", "Denisas", "Dimitrijus", "Diomidas", "Dionizas", "Dmitrijus",
        "Dobilas", "Donatas", "Domantas", "Domas", "Dominykas", "Donaldas", "Dovydas", "Dovilis", "Dovis", "Drąsius",
        "Drąsutis", "Džeraldas", "Džiraldas", "Džiugas", "Džonis", "Edgaras", "Edmundas", "Eduardas", "Edvardas", "Edvinas",
        "Egidijus", "Eidimantas", "Eidminas", "Eidvydas", "Eimantas", "Eimis", "Einius", "Eivydas", "Eldaras", "Eligijus",
        "Elijus", "Elmantas", "Emanuelis", "Emilis", "Emilijonas", "Emilijus", "Enrikas", "Erazmas", "Erdvilas", "Erichas",
        "Erikas", "Ernestas", "Ervinas", "Eugenijus", "Eugeniušas", "Evaldas", "Fabijus", "Faustas", "Fedoras", "Felicijonas",
        "Felicijus", "Feliksas", "Ferdinandas", "Filipas", "Fiodoras", "Foma", "Flavijus", "Florijonas", "Francas",
        "Francišekas", "Fredas", "Fridrikas", "Gabrielis", "Gabrielius", "Gailimantas", "Gailius", "Galmantas", "Gasparas",
        "Gaudenis", "Gaudrimas", "Gaudvydas", "Gavrila", "Gavrilas", "Gedas", "Gedgaudas", "Gediminas", "Gedmantas", "Gedmas",
        "Gedminas", "Gedvaldas", "Gedvydas", "Gedvilas", "Geivydas", "Genadijus", "Gendrius", "Genrichas", "Georgijus",
        "Geraldas", "Gerardas", "Gerdas", "Gerimantas", "Germanas", "Germantas", "Gerutis", "Gervydas", "Giedrius", "Gilbertas",
        "Gintaras", "Gintas", "Gintis", "Gintautas", "Girėnas", "Girius", "Girmantas", "Girvydas", "Gitanas", "Gytautas",
        "Gytis", "Gordejus", "Gotfridas", "Gracijonas", "Gracijus", "Gražvydas", "Grigalius", "Grigas", "Grigorijus", "Gunaras",
        "Gustas", "Gustavas", "Gustis", "Gvidas", "Gvidonas", "Haraldas", "Haris", "Haroldas", "Hektoras", "Helmutas",
        "Henrikas", "Henris", "Herbertas", "Herkus", "Hermanas", "Hilarijus", "Horacijus", "Horstas", "Hubertas", "Ignacas",
        "Ignas", "Ignotas", "Igoris", "Ilja", "Imantas", "Indrius", "Ingvaras", "Inocentas", "Ipolitas", "Irenijus", "Irmantas",
        "Irtautas", "Irvydas", "Isaakas", "Isakas", "Ivanas", "Izidorius", "Izoldas", "Jacekas", "Jakovas", "Jakubas", "Janas",
        "Janis", "Jankelis", "Janušas", "Jaroslavas", "Jaunius", "Jaunutis", "Jegoras", "Jemeljanas", "Jeronimas", "Jevgenijus",
        "Ježis", "Joanas", "Jogaila", "Jogintas", "Jogirdas", "Jokimas", "Jokūbas", "Jolantas", "Jomantas", "Jonaras", "Jonas",
        "Jonis", "Joris", "Jorūnas", "Josifas", "Jotautas", "Jovaldas", "Jovaras", "Jovitas", "Judrius", "Julijonas", "Julijus",
        "Julius", "Juljanas", "Juozapas", "Juozapatas", "Juozas", "Juras", "Jurgis", "Jurijus", "Jūras", "Jūris", "Justas",
        "Justinas", "Juvencijus", "Juzefas", "Kajetonas", "Kajus", "Kalikstas", "Kalnius", "Kamilis", "Kaributas", "Karlas",
        "Karolis", "Karpas", "Kasparas", "Kastantas", "Kastytis", "Kazimieras", "Kazys", "Kęstas", "Kęstautas", "Kęstutis",
        "Kimas", "Kipras", "Kiprijonas", "Kirilas", "Klaudas", "Klaudijus", "Klemas", "Klemensas", "Klementas", "Kleopas",
        "Klevas", "Klimas", "Klimentijus", "Kondratas", "Konradas", "Konstantinas", "Kornelijus", "Kostas", "Kovas", "Kozmas",
        "Krescencijus", "Kristijonas", "Kristinas", "Kristoforas", "Kristupas", "Ksaveras", "Kšištofas", "Kuprijanas", "Laimis",
        "Laimonas", "Laimutis", "Laisvydas", "Laisvis", "Laisvūnas", "Lauras", "Laurentijus", "Laurynas", "Lauris",
        "Lavrentijus", "Leandras", "Leonardas", "Leonas", "Leonidas", "Leopoldas", "Levas", "Libertas", "Linas", "Lionginas",
        "Liubartas", "Liubomiras", "Liucijonas", "Liucijus", "Liudas", "Liudvigas", "Liudvikas", "Liūtas", "Liutauras",
        "Livijus", "Lozorius", "Lukas", "Lukrecijus", "Makaras", "Makarijus", "Maksas", "Maksimas", "Maksimilijonas",
        "Mamertas", "Manfredas", "Mangirdas", "Mantas", "Mantautas", "Mantrimas", "Mantvydas", "Maratas", "Marcelijus ",
        "Marcelinas", "Marcelius", "Marekas", "Margiris", "Marianas", "Marijonas", "Marijus", "Marinas", "Marius", "Markas",
        "Martas", "Martinas", "Martynas", "Matas", "Mateušas", "Matvejus", "Mažvydas", "Mečislavas", "Mečislovas", "Mečys",
        "Medardas", "Medas", "Mefodijus", "Melanijus", "Melchioras", "Mendelis", "Merkys", "Merūnas", "Michalas", "Michailas",
        "Miglius", "Mikalojus", "Mikas", "Mikolajus", "Milanas", "Mildas", "Milvydas", "Mindaugas", "Minijus", "Mykolas",
        "Mingaudas", "Mintaras", "Miroslavas", "Modestas", "Morkus", "Motiejus", "Mozė", "Naglis", "Napalis", "Napalys",
        "Napoleonas", "Napolis", "Narcizas", "Narimantas", "Narsutis", "Narvydas", "Natanas", "Natas", "Naumas", "Nauris",
        "Nazaras", "Nazarijus", "Nedas", "Neimantas", "Neivydas", "Nemunas", "Nerijus", "Nerimantas", "Nerimas", "Neringas",
        "Nerius", "Nidas", "Nikandras", "Nikas", "Nikiforas", "Nikita", "Nikodemas", "Nikola", "Nikolajus", "Nilas", "Nojus",
        "Nomedas", "Norbertas", "Normanas", "Normantas", "Nortautas", "Norvydas", "Norvilas", "Oktavijus", "Olegas", "Orestas",
        "Orintas", "Oskaras", "Osmundas", "Osvaldas", "Otas", "Otilijus", "Otonas", "Ovidijus", "Palemonas", "Palmyras",
        "Patricijus", "Patrikas", "Paulis", "Paulius", "Petras", "Pijus", "Pilypas", "Pilėnas", "Piotras", "Platonas",
        "Polikarpas", "Polis", "Povilas", "Pranas", "Pranciškus", "Putinas", "Radvila", "Rafaelis", "Rafailas", "Rafalas",
        "Raigardas", "Raimondas", "Raimundas", "Rainoldas", "Ralfas", "Ramintas", "Ramonas", "Ramūnas", "Rapolas", "Rasius",
        "Raulis", "Redas", "Regimantas", "Reginaldas", "Reinhardas", "Remas", "Remigijus", "Renaldas", "Renatas", "Renius",
        "Richardas", "Ričardas", "Rikardas", "Rimantas", "Rimas", "Rimgaudas", "Rimtas", "Rimtautas", "Rimtis", "Rimvydas",
        "Rinatas", "Ryšardas", "Rytas", "Rytautas", "Rytis", "Robertas", "Robinas", "Rodrigas", "Rokas", "Rolandas", "Rolfas",
        "Romanas", "Romas", "Romualdas", "Ronaldas", "Rostislavas", "Rubenas", "Rudolfas", "Rufas", "Rufinas", "Rupertas",
        "Ruslanas", "Rūtenis", "Sabinas", "Sakalas", "Saliamonas", "Salvijus", "Samuelis", "Samsonas", "Samuilas", "Sandras",
        "Santaras", "Saulenis", "Saulius", "Sava", "Sebastijonas", "Semas", "Semionas", "Serafinas", "Serapinas", "Sergejus",
        "Sergijus", "Seržas", "Severas", "Severinas", "Sidas", "Sidoras", "Sigis", "Sigitas", "Sigizmundas", "Sikstas",
        "Silverijus", "Silvestras", "Silvijus", "Simas", "Simeonas", "Simonas", "Sirvydas", "Skaidrius", "Skaistis",
        "Skalmantas", "Skalvis", "Skirgaila", "Skirmantas", "Skomantas", "Sonetas", "Stanislavas", "Stanislovas", "Stasys",
        "Stasius", "Stepas", "Stefanas", "Stepanas", "Steponas", "Svajūnas", "Svajus", "Sviatoslavas", "Šarūnas", "Šiaurys",
        "Švitrigaila", "Tadas", "Tadeušas", "Tamošius", "Tarasas", "Tauras", "Tautginas", "Tautrimas", "Tautvydas", "Tedas",
        "Telesforas", "Teisius", "Teisutis", "Teodoras", "Teofilis", "Terentijus", "Tiberijus", "Timas", "Timotiejus",
        "Timotis", "Timūras", "Titas", "Tomas", "Tomašas", "Tonis", "Traidenis", "Trofimas", "Tumas", "Ugnius", "Ulrikas",
        "Uosis", "Urbonas", "Utenis", "Ubaldas", "Ūdrys", "Ūkas", "Vacys", "Vacius", "Vaclovas", "Vadimas", "Vaidas",
        "Vaidevutis", "Vaidila", "Vaidis", "Vaidotas", "Vaidutis", "Vaigaudas", "Vaigirdas", "Vainius", "Vainoras", "Vaitiekus",
        "Vaižgantas", "Vakaris", "Valdas", "Valdemaras", "Valdimantas", "Valdis", "Valentas", "Valentinas", "Valerijonas",
        "Valerijus", "Valys", "Valius", "Valteris", "Vasaris", "Vasilijus", "Venantas", "Verneris", "Vėjas", "Vėjūnas",
        "Venjaminas", "Vergilijus", "Vestas", "Viačeslavas", "Vidas", "Vydas", "Vidimantas", "Vydimantas", "Vidmantas",
        "Vydmantas", "Viesulas", "Vygaudas", "Vigilijus", "Vygintas", "Vygirdas", "Vykantas", "Vykintas", "Viktas", "Viktoras",
        "Viktorijus", "Viktorinas", "Vilenas", "Vilgaudas", "Vilhelmas", "Vilijus", "Vilius", "Vylius", "Vilmantas", "Vilmas",
        "Vilnius", "Viltaras", "Viltautas", "Viltenis", "Vincas", "Vincentas", "Vingaudas", "Virgaudas", "Virgilijus",
        "Virginijus", "Virgintas", "Virgis", "Virgius", "Virmantas", "Vismantas", "Visvaldas", "Visvaldis", "Vitalijus",
        "Vitalis", "Vitalius", "Vitas", "Vitoldas", "Vygandas", "Vygantas", "Vykintas", "Vytaras", "Vytautas", "Vytas",
        "Vytenis", "Vytis", "Vyturys", "Vladas", "Vladimiras", "Vladislavas", "Vladislovas", "Vladlenas", "Voicechas",
        "Voldemaras", "Vsevolodas", "Zacharijus", "Zakarijus", "Zbignevas", "Zdislavas", "Zenius", "Zenonas", "Zigfridas",
        "Zygfridas", "Zigmantas", "Zigmas", "Zygmuntas", "Zinovijus", "Žanas", "Žeimantas", "Žilvinas", "Žibartas", "Žybartas",
        "Žydrius", "Žydrūnas", "Žygaudas", "Žygimantas", "Žygintas", "Žygis", "Žymantas", "Žvaigždžius"
    );

    /**
     * @link https://lt.wikipedia.org/wiki/S%C4%85ra%C5%A1as:Lietuvoje_paplit%C4%99_vardai
     */
    protected static $firstNameFemale = array(
        "Ada", "Adelė", "Adelija", "Adelina", "Adolfa", "Adolfina",
        "Adriana", "Adrija", "Adrijana", "Agata", "Agnė", "Agnetė", "Agnieška", "Agnietė", "Agnija",
        "Agota", "Agripina", "Aida", "Aidė", "Aimana", "Aimantė", "Aina", "Ainė", "Airė", "Airida", "Aistė",
        "Aistra", "Aitra", "Aivara", "Akvilė", "Akvilina", "Alana", "Alanta", "Alberta", "Albertina",
        "Albina", "Alda", "Aldona", "Alė", "Aleksandra", "Aleksandrina", "Aleksė", "Aleta", "Alfonsė",
        "Alfonsa", "Alfreda", "Algė", "Algimanta", "Algimantė", "Algina", "Algirdė", "Algutė", "Alicija",
        "Alina", "Aliodija", "Aliona", "Alisa", "Alma", "Aloyza", "Alona", "Alva", "Alvyda", "Alvydė",
        "Alvita", "Amalija", "Amanda", "Ana", "Anastasija", "Anastazija", "Andrė", "Andrėja", "Andžela",
        "Anė", "Anelė", "Aneta", "Anetė", "Angelė", "Angelina", "Aniceta", "Antanina", "Antonida",
        "Antonija", "Antonina", "Anzelma", "Apolinarija", "Apolonija", "Ara", "Ariadnė", "Arija",
        "Arimantė", "Arina", "Aristida", "Armina", "Arminta", "Arnė", "Arnolda", "Arūnė", "Arvydė", "Asta",
        "Astija", "Astra", "Astrida", "Ašara", "Atėnė", "Audra", "Audrė", "Audronė", "Augustė", "Augustina",
        "Augutė", "Auksė", "Auksuolė", "Aura", "Aurėja", "Aurelija", "Aurora", "Austė", "Austėja", "Austra",
        "Aušra", "Aušrinė", "Banga", "Banguolė", "Barbara", "Barbora", "Bargailė", "Bartė", "Basia",
        "Beata", "Beatričė", "Benedikta", "Benė", "Benigna", "Benita", "Benjamina", "Bernadeta", "Bernarda",
        "Bernardina", "Berta", "Beta", "Biruta", "Birutė", "Bytautė", "Bitė", "Boleslava", "Boleslova",
        "Brigita", "Bronė", "Bronislava", "Bronislova", "Božena", "Cecilė", "Cecilija", "Celestina",
        "Celina", "Cezarija", "Cilė", "Cintija", "Dagmara", "Dagna", "Dagnė", "Daina", "Dainė", "Dainora",
        "Daiva", "Daivita", "Daivutė", "Dalė", "Dalia", "Dalija", "Dalytė", "Dana", "Danė", "Dangė",
        "Dangerutė", "Dangira", "Daniela", "Danielė", "Danguolė", "Danuta", "Danutė", "Darata", "Daria",
        "Darija", "Darja", "Daugailė", "Daumantė", "Debora", "Deima", "Deimantė", "Deivė", "Deivilė",
        "Demetra", "Diana", "Dijana", "Dina", "Dinara", "Dita", "Ditė", "Doloresa", "Doma", "Domantė",
        "Domicelė", "Dominika", "Dominyka", "Dona", "Donalda", "Donata", "Dora", "Dorota", "Dorotė",
        "Dorotėja", "Dovilė", "Džeinė", "Džeralda", "Džesika", "Džilda", "Džina", "Džiugė", "Džiuginta",
        "Džiulija", "Džiuljeta", "Džordana", "Džulija", "Edita", "Eglė", "Egida", "Egidija", "Eidvilė",
        "Eimantė", "Einara", "Eiva", "Ela", "Elada", "Elė", "Elegija", "Elena", "Eleonora", "Elfrida",
        "Elija", "Elytė", "Eliza", "Elma", "Elona", "Elvira", "Elvyra", "Elza", "Elzė", "Elžbieta", "Ema",
        "Emanuelė", "Emilė", "Emilija", "Enrika", "Erdvilė", "Erika", "Ermina", "Erna", "Ernesta",
        "Ernestina", "Ervina", "Esmeralda", "Estela", "Estera", "Eufrozina", "Eugenija", "Eulalija", "Eva",
        "Evalda", "Evelina", "Fabija", "Faina", "Faustina", "Felicija", "Felicita", "Feliksa", "Fernanda",
        "Filomena", "Freda", "Frida", "Gabeta", "Gabija", "Gabriela", "Gabrielė", "Gailė", "Gailiūtė",
        "Gailutė", "Gaiva", "Gaivilė", "Gaja", "Galia", "Galina", "Gaudencija", "Gaudrė", "Geda",
        "Gedimina", "Gediminė", "Gedmantė", "Gedmintė", "Gedvyda", "Geida", "Geismantė", "Geistė", "Gelena",
        "Gėlė", "Gelmė", "Gema", "Gena", "Genadija", "Gendrė", "Genė", "Genovaitė", "Genovefa", "Genutė",
        "Georgina", "Gerarda", "Gerda", "Germantė", "Gerta", "Gertė", "Gertruda", "Gertrūda", "Geta",
        "Giedra", "Giedrė", "Gilda", "Gilė", "Gilija", "Gilma", "Gina", "Gintara", "Gintarė", "Gintautė",
        "Gintė", "Girstautė", "Girstė", "Gita", "Gitana", "Gitė", "Gytė", "Gizela", "Glorija", "Gluosnė",
        "Goda", "Gotautė", "Gotė", "Gracija", "Grasilda", "Gražina", "Gražyna", "Gražvyda", "Greta",
        "Grėtė", "Grita", "Grytė", "Gunda", "Guoda", "Gustė", "Gustina", "Halina", "Hana", "Helena",
        "Henrika", "Helga", "Henrieta", "Henrietė", "Herma", "Hiacinta", "Hilda", "Honorata", "Hortenzija",
        "Ida", "Idalija", "Ieva", "Ievutė", "Ignė", "Ignota", "Ilma", "Ilmena", "Ilona", "Ilzė", "Imantė",
        "Ina", "Indra", "Indraja", "Indrė", "Inesa", "Ineta", "Inga", "Ingita", "Ingė", "Ingeborga",
        "Ingrida", "Ira", "Irena", "Irida", "Iridė", "Irina", "Irma", "Irmanta", "Irmantė", "Irmina",
        "Irmutė", "Irta", "Irtautė", "Irutė", "Isabela", "Iva", "Ivana", "Ivona", "Iveta", "Iza", "Izabela",
        "Izabelė", "Izidė", "Izidora", "Izolda", "Jadzė", "Jadviga", "Jadvyga", "Jana", "Janė", "Janina",
        "Januarija", "Jaunė", "Jaunutė", "Jekaterina", "Jelena", "Jelizaveta", "Jeronima", "Jevdokija",
        "Jieva", "Joana", "Jogailė", "Jogilė", "Jogintė", "Jola", "Jolanta", "Joleta", "Jolita", "Jomantė",
        "Jomilė", "Jonė", "Jorė", "Jorigė", "Jorūnė", "Jotvingė", "Jovilė", "Jovita", "Judita", "Judra",
        "Judrė", "Julė", "Juliana", "Julija", "Julijana", "Julijona", "Julita", "Julytė", "Juozapina",
        "Juozapota", "Juozė", "Jura", "Jūra", "Jūrė", "Jūratė", "Jurga", "Jurgė", "Jurgina", "Jurgita",
        "Justė", "Justina", "Juta", "Juventa", "Juzefa", "Kaja", "Kamila", "Kamilė", "Karina", "Karla",
        "Karmela", "Karolė", "Karolina", "Kasia", "Kastė", "Kastytė", "Katarina", "Katažina", "Katažyna",
        "Katerina", "Katia", "Katrė", "Kazė", "Kazimiera", "Kazimira", "Kazytė", "Kęstė", "Kira", "Klara",
        "Klarisa", "Klaudija", "Klema", "Klementina", "Kleopa", "Kleopatra", "Klotilda", "Konstancija",
        "Konstantina", "Kornelija", "Kostė", "Kotryna", "Krista", "Kristė", "Kristijona", "Kristina",
        "Krystyna", "Ksavera", "Ksaverija", "Ksenija", "Kunigunda", "Lada", "Laima", "Laimė", "Laimona",
        "Laimutė", "Laisvė", "Laisvyda", "Laisvydė", "Laisvūnė", "Lana", "Lara", "Larisa", "Lauma", "Laura",
        "Laurena", "Laurentina", "Lauryna", "Leandra", "Leda", "Leila", "Lėja", "Lelija", "Lena",
        "Leokadija", "Leona", "Leonarda", "Leonė", "Leonida", "Leonija", "Leonila", "Leonilė", "Leonora",
        "Leontina", "Leopolda", "Leta", "Lėta", "Leticija", "Leva", "Levutė", "Liana", "Liauda", "Liberta",
        "Lida", "Lidija", "Liepa", "Lijana", "Lilė", "Liliana", "Lilija", "Lilijana", "Lina", "Linda",
        "Lingailė", "Linė", "Lionė", "Liongina", "Liuba", "Liubarta", "Liubovė", "Liucė", "Liucilė",
        "Liucina", "Liucija", "Liuda", "Liudmila", "Liudvika", "Liūnė", "Liutaura", "Liva", "Liveta",
        "Livija", "Liza", "Lizaveta", "Lola", "Lolita", "Longina", "Lora", "Lorena", "Loreta", "Lorija",
        "Lucyna", "Luisa", "Luiza", "Luknė", "Lukrecija", "Magda", "Magdalena", "Magdė", "Maja", "Malda",
        "Malgožata", "Malvina", "Mamerta", "Mamertina", "Mantautė", "Mantė", "Mantvydė", "Manuela", "Mara",
        "Marcė", "Marcelė", "Marcelija", "Marcelina", "Marcijona", "Marė", "Marilė", "Margita", "Margarita",
        "Mariana", "Marija", "Marijona", "Marina", "Marita", "Marytė", "Marta", "Martina", "Martyna",
        "Matilda", "Matriona", "Mažvydė", "Mečislava", "Mečislova", "Meda", "Medeina", "Medėja", "Megana",
        "Megė", "Meilė", "Meilutė", "Melanija", "Melda", "Melisa", "Mėnulė", "Mėta", "Michalina", "Miglė",
        "Mika", "Mikalina", "Mykolė", "Mila", "Milda", "Mildutė", "Milena", "Milvydė", "Mindaugė",
        "Mingailė", "Minija", "Mintara", "Mintarė", "Mintautė", "Mintė", "Mira", "Mirga", "Modesta", "Mona",
        "Monika", "Morta", "Nadė", "Nadia", "Nadežda", "Nadiežda", "Naktis", "Narciza", "Nastasija",
        "Nastazija", "Nastė", "Nastia", "Natalija", "Nata", "Neda", "Neimantė", "Nela", "Nelė", "Nemira",
        "Nemunė", "Nendrė", "Neringa", "Nerita", "Nida", "Nijolė", "Nika", "Nikė", "Nila", "Nilė", "Nina",
        "Ninelė", "Noja", "Nomeda", "Nona", "Nora", "Norberta", "Norma", "Norgailė", "Normantė", "Nortė",
        "Norvyda", "Norvilė", "Odeta", "Ofelija", "Oksana", "Oktavija", "Oktiabrina", "Olga", "Olimpiada",
        "Olimpija", "Oliva", "Olivija", "Ona", "Onė", "Onorata", "Onutė", "Oresta", "Orinta", "Otilija",
        "Ovidija", "Palma", "Palmira", "Palmyra", "Pamela", "Pasaka", "Patricija", "Paula", "Paulė",
        "Paulina", "Pelagėja", "Pelagija", "Petra", "Petrė", "Petronė", "Petronėlė", "Petrutė", "Pija",
        "Polė", "Polina", "Povilė", "Pranciška", "Pranė", "Praskovja", "Prima", "Pulcherija", "Rachilė",
        "Rada", "Radmila", "Radvyda", "Radvilė", "Rafaela", "Rafaelė", "Raimonda", "Raimunda", "Raistė",
        "Rakelė", "Ramybė", "Raminta", "Ramona", "Ramunė", "Ramūnė", "Ramutė", "Rasa", "Raselė", "Rasė",
        "Rasytė", "Rasuolė", "Rasvita", "Rebeka", "Reda", "Rėda", "Rega", "Regimanta", "Regimantė",
        "Regina", "Rema", "Remigija", "Rena", "Renalda", "Renata", "Renatė", "Renė", "Ričarda", "Rikarda",
        "Rima", "Rimanta", "Rimantė", "Rimgailė", "Rimgaudė", "Rimtautė", "Rimtė", "Rimutė", "Rimvyda",
        "Rimvydė", "Rimvilė", "Rina", "Ringa", "Ringailė", "Rita", "Ryta", "Ritė", "Rytė", "Roberta",
        "Robertina", "Rolanda", "Roma", "Romana", "Romė", "Romina", "Romualda", "Rosita", "Roza",
        "Rozalija", "Rožė", "Rufina", "Rugilė", "Ruslana", "Rusnė", "Rūstė", "Ruta", "Rūta", "Rūtelė",
        "Rūtenė", "Rūtilė", "Sabina", "Sabrina", "Salė", "Salomėja", "Salvė", "Salvija", "Salvinija",
        "Samanta", "Sandra", "Santara", "Sauga", "Saulė", "Saulena", "Saulenė", "Saulytė", "Saulutė",
        "Selena", "Selma", "Serafina", "Serafima", "Serena", "Severija", "Severina", "Sibilė", "Siga",
        "Sigita", "Sigrida", "Sigutė", "Silva", "Silverija", "Silvestra", "Silvija", "Sima", "Simona",
        "Sintė", "Sintija", "Siuzana", "Skaidra", "Skaidrė", "Skaiste", "Skaiva", "Skalvė", "Skirgailė",
        "Skirma", "Skirmanta", "Skirmantė", "Skolastika", "Smilga", "Smiltė", "Snaigė", "Snežana", "Sniegė",
        "Sniegena", "Snieguolė", "Sofa", "Sofija", "Solveiga", "Sonata", "Soneta", "Sonia", "Sotera",
        "Stanislava", "Stanislova", "Staselė", "Stasė", "Stefa", "Stefanija", "Stela", "Stepė", "Sulamita",
        "Svaja", "Svajonė", "Sveta", "Svetlana", "Šalna", "Šalnė", "Šarlota", "Šarūnė", "Šatrija", "Šilė",
        "Šviesa", "Šviesė", "Švitrigailė", "Taika", "Taisa", "Taisija", "Tamara", "Tania", "Tatjana",
        "Taura", "Tautė", "Tautvydė", "Teklė", "Teodora", "Teofilė", "Tera", "Teresė", "Tereza", "Terezija",
        "Tesa", "Tilija", "Tina", "Toma", "Ugnė", "Ula", "Ulė", "Ulijona", "Uljana", "Ulrika", "Una",
        "Undinė", "Unė", "Uoginta", "Ursula", "Uršula", "Uršulė", "Urtė", "Ūla", "Upė", "Vacė", "Vaclava",
        "Vaclova", "Vaida", "Vaidota", "Vaidotė", "Vaidilutė", "Vaiga", "Vaigalė", "Vainora", "Vaiva",
        "Vakarė", "Valda", "Valdemara", "Valdė", "Valdonė", "Valentina", "Valeriana", "Valerija",
        "Valerijona", "Valia", "Valė", "Vanda", "Varvara", "Vasa", "Vasara", "Vasarė", "Vasilisa", "Vėja",
        "Vėjūnė", "Venanta", "Vena", "Venera", "Venta", "Vera", "Verena", "Vergilija", "Verutė", "Veronika",
        "Vesta", "Vėtra", "Vida", "Vyda", "Vidmanta", "Vidmantė", "Vydmantė", "Vidimanta", "Vigilija",
        "Vygantė", "Vygintė", "Vija", "Vijolė", "Vika", "Vykintė", "Vikta", "Viktė", "Viktorija",
        "Viktorina", "Vilena", "Vilė", "Vylė", "Vilhelma", "Vilhelmina", "Vilija", "Vilma", "Vilmanta",
        "Vilmantė", "Vilnė", "Viltara", "Viltautė", "Viltė", "Viltenė", "Vilūnė", "Vincė", "Vincenta",
        "Vincentė", "Viola", "Violeta", "Violina", "Virdžinija", "Virga", "Virginija", "Virmantė",
        "Vismantė", "Vita", "Vyta", "Vitalė", "Vitalija", "Vytautė", "Vitė", "Vytė", "Vytenė", "Vlada",
        "Vladė", "Vladislava", "Vladislova", "Vladlena", "Vilita", "Zabelė", "Zanė", "Zelma", "Zenė",
        "Zigfrida", "Zigmantė", "Zylė", "Zina", "Zinaida", "Zita", "Zofija", "Zoja", "Zosė", "Zuzana",
        "Žana", "Žaneta", "Žara", "Žeimantė", "Žemyna", "Žibuoklė", "Žibutė", "Žiedė", "Živilė", "Žydrė",
        "Žydronė", "Žydrūnė", "Žygimantė", "Žyginta", "Žilvinė", "Žymantė", "Žoržeta"
    );

    /**
     * @link http://www.horoskopai.lt/gaires/populiariausios-pavardes-lietuvoje/
     * @link https://www.zodynas.lt/pavardes
     */
    protected static $lastNameMale = array(
        'Abraitis', 'Abramauskas', 'Abramavičius', 'Abramovas', 'Abramovičius', 'Abromaitis', 'Abromavičius', 'Abrutis', 'Abukevičius', 'Acukas', 'Adamaitis', 'Adamkavičius', 'Adamkevičius', 'Adamonis', 'Adleris', 'Adomaitis', 'Adomauskas', 'Adomėnas', 'Adomynas', 'Agintas', 'Aižinas', 'Aizinbudas', 'Ajauskas', 'Akelaitis', 'Akmenskis', 'Akramavičius', 'Aksamitauskas', 'Aksomaitis', 'Akstinas', 'Akstinavičius', 'Akulavičius', 'Alantas', 'Albavičius', 'Albertynas', 'Albinas', 'Albrechtas', 'Alechnavičius', 'Alekna', 'Aleknavičius', 'Aleknonis', 'Aleksa', 'Aleksandravičius', 'Aleksandrovas', 'Aleksandrovičius', 'Aleksejūnas', 'Aleksis', 'Aleksiūnas', 'Aleksynas', 'Aleliūnas', 'Aleškevičius', 'Algirdaitis', 'Alijevas', 'Alijošius', 'Alimas', 'Ališauskas', 'Aliukevičius', 'Aliukonis', 'Aliulis', 'Alksninis', 'Alminas', 'Almonaitis', 'Alperavičius', 'Alšauskas', 'Alseika', 'Alšėnas', 'Alšėniškis', 'Alsys', 'Alunderis', 'Ambrasaitis', 'Ambrasas', 'Ambraška', 'Ambrazas', 'Ambrazevičius', 'Ambraziejus', 'Ambraziūnas', 'Ambrozaitis', 'Ambrozevičius', 'Ambrukaitis', 'Ananas', 'Ananjevas', 'Ancelis', 'Ancevičius', 'Anciūnas', 'Ancukevičius', 'Andraitis', 'Andrašūnas', 'Andreika', 'Andrejauskas', 'Andrejevas', 'Andriekus', 'Andrijauskas', 'Andrikis', 'Andriolis', 'Andriškevičius', 'Andriukaitis', 'Andriukonis', 'Andriulaitis', 'Andriulevičius', 'Andriulis', 'Andriūnas', 'Andriušis', 'Andriuška', 'Andriuškevičius', 'Andrulionis', 'Andrulis', 'Andrušaitis', 'Andruševičius', 'Andruškevičius', 'Andziulaitis', 'Andziulis', 'Anglickas', 'Anglickis', 'Angrabaitis', 'Aničas', 'Anisimovas', 'Aniulis', 'Ankus', 'Antanaitis', 'Antanavičius', 'Antanėlis', 'Antanovičius', 'Antinis', 'Antonievičius', 'Antonovičius', 'Anulis', 'Anusauskas', 'Anusavičius', 'Anuškevičius', 'Anužis', 'Anysas', 'Apanavičius', 'Apukas', 'Aputis', 'Aramavičius', 'Araminas', 'Arbačiauskas', 'Arlauskas', 'Armonas', 'Arnašius', 'Asevičius', 'Ašmantas', 'Ašmys', 'Astikas', 'Astramskas', 'Astrauskas', 'Atkočaitis', 'Atkočiūnas', 'Audzevičius', 'Audzijonis', 'Augulis', 'Augustaitis', 'Augustas', 'Augustinas', 'Augutis', 'Avenarius', 'Avižienis', 'Avižonis', 'Ažubalis', 'Babenskas', 'Babickas', 'Babilius', 'Babkauskas', 'Babrauskas', 'Babravičius', 'Bacevičius', 'Bačkis', 'Bagdanavičius', 'Bagdanskis', 'Bagdonas', 'Bagdonavičius', 'Bagdžius', 'Baginskas', 'Bagočius', 'Bajerčius', 'Bajoraitis', 'Bajoras', 'Bakaitis', 'Bakas', 'Bakšys', 'Bakūnas', 'Balaišis', 'Balakauskas', 'Balandis', 'Balašaitis', 'Balčiauskas', 'Balčikonis', 'Balčiūnas', 'Balčius', 'Balčytis', 'Baldauskas', 'Baldžius', 'Baleišis', 'Balevičius', 'Balinskis', 'Balkauskas', 'Balkevičius', 'Balkūnas', 'Balsys', 'Baltakis', 'Baltramaitis', 'Baltramiejūnas', 'Baltrūnas', 'Baltrušaitis', 'Baltuonis', 'Baltušis', 'Baltuška', 'Baltušnikas', 'Baluodis', 'Balutis', 'Balvočius', 'Banaitis', 'Bancevičius', 'Banevičius', 'Banionis', 'Baniulis', 'Banys', 'Barakauskas', 'Baranauskas', 'Baranovas', 'Barasa', 'Barauskas', 'Baravykas', 'Barčas', 'Bareikis', 'Barevičius', 'Barkauskas', 'Baronas', 'Baršauskas', 'Barsteiga', 'Barštys', 'Bartkevičius', 'Bartkus', 'Bartulis', 'Bartusevičius', 'Barysas', 'Basanavičius', 'Bastys', 'Batista', 'Batoras', 'Baubinas', 'Baublys', 'Baumilas', 'Baušys', 'Baužys', 'Bėčius', 'Beinoris', 'Beišys', 'Bekeris', 'Bėkšta', 'Belas', 'Belevičius', 'Belkevičius', 'Bendikas', 'Bendoravičius', 'Bendorius', 'Benetis', 'Beniušis', 'Berenis', 'Berentas', 'Beresnevičius', 'Bergas', 'Beriozovas', 'Berkmanas', 'Bernatavičius', 'Bernatonis', 'Bernotas', 'Bertašius', 'Bertulis', 'Beržanskis', 'Beržinis', 'Bialozoras', 'Bičiūnas', 'Bičkauskas', 'Bieliakas', 'Bieliauskas', 'Bielinis', 'Bieliukas', 'Bieliūnas', 'Bielskis', 'Bielskus', 'Bilevičius', 'Bingelis', 'Birbilas', 'Birgelis', 'Birieta', 'Birinčikas', 'Birutis', 'Biržiška', 'Biržiškis', 'Biskys', 'Bistrickas', 'Bitė', 'Bitinas', 'Bitvinskas', 'Biveinis', 'Bizauskas', 'Biziulevičius', 'Bižokas', 'Blažaitis', 'Blaževičius', 'Blažys', 'Blekaitis', 'Blinstrubas', 'Bliūdžius', 'Blotnas', 'Bložė', 'Bloznelis', 'Blūšius', 'Bobadilla', 'Bobelis', 'Bogdanovičius', 'Boguševičius', 'Boka', 'Borisevičius', 'Bortkevičius', 'Boruta', 'Bosas', 'Božimovskis', 'Bradauskas', 'Bradūnas', 'Brakas', 'Brazaitis', 'Brazauskas', 'Brazdžius', 'Bražėnas', 'Bražinskas', 'Brazis', 'Braziulis', 'Brazys', 'Brėdikis', 'Bridžius', 'Briedis', 'Brizgys', 'Brukas', 'Brundza', 'Bruožis', 'Bružas', 'Bublys', 'Bubnys', 'Bubulis', 'Bučas', 'Bučinskas', 'Būčys', 'Būda', 'Budnas', 'Budnikas', 'Budraitis', 'Budreckas', 'Budreika', 'Budrevičius', 'Budriūnas', 'Budrius', 'Budrys', 'Budvytis', 'Buinevičius', 'Buivydas', 'Bujanauskas', 'Bujauskas', 'Bukauskas', 'Bukelis', 'Bukota', 'Bulavas', 'Bulota', 'Bulotas', 'Buračas', 'Burba', 'Burdulis', 'Burokas', 'Burokevičius', 'Buškevičius', 'Butautas', 'Butėnas', 'Buterlevičius', 'Butkevičius', 'Butkus', 'Buzys', 'Byčius', 'Bytautas', 'Bžostovskis', 'Bžozovskis', 'Čaikauskas', 'Čaplikas', 'Čarneckis', 'Čartoriskis', 'Čechavičius', 'Čechovičius', 'Čeičys', 'Čekanauskas', 'Čekanavičius', 'Čekauskas', 'Čekuolis', 'Čemberlenas', 'Čepaitis', 'Čepas', 'Čepauskas', 'Čepėnas', 'Čepinskis', 'Čepkauskas', 'Čeponis', 'Čepulis', 'Čereška', 'Černeckis', 'Černiauskas', 'Černis', 'Černius', 'Čerskis', 'Česas', 'Cesiulis', 'Čėsna', 'Česnauskis', 'Česnavičius', 'Česnys', 'Četkauskas', 'Chadaravičius', 'Chlebinskas', 'Chodakauskas', 'Chodkevičius', 'Chominskis', 'Ciapinskis', 'Cibas', 'Čibiras', 'Cibulskas', 'Cibulskis', 'Cicėnas', 'Čiegis', 'Cimkauskas', 'Čiočys', 'Ciparis', 'Cipelis', 'Čirba', 'Cirtautas', 'Ciunis', 'Čiurlionis', 'Civilka', 'Civinskas', 'Čižas', 'Čižauskas', 'Cvirka', 'Čygas', 'Čyras', 'Dabašinskas', 'Dabrila', 'Dabulskis', 'Dagilis', 'Dagys', 'Dailidė', 'Dainauskas', 'Dainys', 'Dalinkevičius', 'Dambrauskas', 'Damijonaitis', 'Damulis', 'Damušis', 'Danielius', 'Danilevičius', 'Daniliauskas', 'Danisevičius', 'Daniūnas', 'Danius', 'Danusevičius', 'Danys', 'Dapkevičius', 'Dapkus', 'Dapšys', 'Dargis', 'Daškevičius', 'Daugėla', 'Daugintis', 'Daugirdas', 'Dauguvietis', 'Daujotas', 'Daujotis', 'Daukantas', 'Dauknys', 'Daukša', 'Daukšas', 'Daukšys', 'Daumantas', 'Daunora', 'Daunoras', 'Daunys', 'Dautartas', 'Degutis', 'Dembskis', 'Dereškevičius', 'Derkintis', 'Devenis', 'Dičius', 'Didžgalvis', 'Didžiokas', 'Didžiulis', 'Dienys', 'Digrys', 'Dijokas', 'Dikčius', 'Diliūnas', 'Dinas', 'Dineika', 'Dirgėla', 'Dirsė', 'Dluskis', 'Dmachauskas', 'Dobilas', 'Dobkevičius', 'Dobrovolskis', 'Dobužinskis', 'Dogelis', 'Domarkas', 'Dombrovskis', 'Domeika', 'Doniela', 'Dorohostaiskis', 'Doroševas', 'Dovydaitis', 'Dovydėnas', 'Drakšas', 'Draugelis', 'Drazdauskas', 'Drevinis', 'Dringelis', 'Driukas', 'Dromantas', 'Druktenis', 'Drunga', 'Dubauskas', 'Dubickas', 'Dudėnas', 'Dulkė', 'Dumbliauskas', 'Dumbrava', 'Dumčius', 'Dundulis', 'Dvaranauskas', 'Dvarionas', 'Dyncenhoferis', 'Džiaukštas', 'Eidukaitis', 'Eidukas', 'Eidukevičius', 'Eigirdas', 'Eimutis', 'Eitminavičius', 'Eitutavičius', 'Endrijaitis', 'Endriukaitis', 'Eriksonas', 'Ežerskis', 'Fedaravičius', 'Fledžinskas', 'Franckaitis', 'Frankas', 'Funkas', 'Furmanavičius', 'Gabalis', 'Gabrys', 'Gabšys', 'Gadeikis', 'Gadliauskas', 'Gadonas', 'Gaičiūnas', 'Gaidamavičius', 'Gaidelis', 'Gaidys', 'Gaigalas', 'Gailevičius', 'Gailiūnas', 'Gailius', 'Gailiušis', 'Gailys', 'Gaižauskas', 'Gaižutis', 'Galdikas', 'Galinis', 'Galminas', 'Galvanauskas', 'Galvėnas', 'Galvydis', 'Gapšys', 'Garbaravičius', 'Gargasas', 'Garška', 'Garšva', 'Gascevičius', 'Gasiūnas', 'Gaška', 'Gasparaitis', 'Gaubas', 'Gaučys', 'Gaudiešius', 'Gavelis', 'Gečas', 'Gecevičius', 'Gečiauskas', 'Gečys', 'Gedgaudas', 'Gedvila', 'Gedvilas', 'Gefenas', 'Geleževičius', 'Gendrolis', 'Geniušas', 'Genys', 'Geralavičius', 'Germanas', 'Gerulaitis', 'Gerulis', 'Geštautas', 'Giedraitis', 'Giedrimas', 'Giedrys', 'Gilys', 'Gimžauskas', 'Gineitis', 'Ginevičius', 'Giniotis', 'Gintalas', 'Gintautas', 'Ginzburgas', 'Gira', 'Giraitis', 'Girdauskas', 'Girdenis', 'Girdvainis', 'Girdzijauskas', 'Girnius', 'Girštautas', 'Gižinskas', 'Glemža', 'Glinskis', 'Golokvoščius', 'Gorskis', 'Gosievskis', 'Goštautas', 'Grabauskas', 'Gradauskas', 'Gradeckas', 'Graičiūnas', 'Grajauskas', 'Grakauskas', 'Graužinis', 'Gravrogkas', 'Graževičius', 'Gražulis', 'Gražys', 'Greičiūnas', 'Greičius', 'Greimas', 'Gricius', 'Grigaitis', 'Grigaliūnas', 'Griganavičius', 'Grigas', 'Grigelis', 'Grigonis', 'Grigorianas', 'Grikevičius', 'Grincevičius', 'Grinius', 'Grinkevičius', 'Griškevičius', 'Griškonis', 'Gronskis', 'Grosas', 'Grubliauskas', 'Grudzinskas', 'Gruodis', 'Grušas', 'Gružauskas', 'Grybauskas', 'Gučas', 'Gudaitis', 'Gudas', 'Gudauskas', 'Gudauskis', 'Gudavičius', 'Gudelis', 'Gudonis', 'Gudynas', 'Gumbis', 'Gumuliauskas', 'Guobys', 'Gureckas', 'Gurevičius', 'Gurskas', 'Gusevas', 'Gustaitis', 'Gustas', 'Gustavsonas', 'Gutauskas', 'Gutmanas', 'Gužas', 'Guzevičius', 'Gylys', 'Hodelis', 'Hofmanas', 'Hofmekleris', 'Holiakas', 'Hozijus', 'Iešmanta', 'Ignatavičius', 'Ignatonis', 'Ilčiukas', 'Ilginis', 'Ilgūnas', 'Imbrasas', 'Indrašius', 'Indriūnas', 'Ivanauskas', 'Ivanovas', 'Ivaška', 'Ivaškevičius', 'Ivinskis', 'Ivoškus', 'Jablonskis', 'Jacevičius', 'Jacikas', 'Jacikevičius', 'Jaciunskas', 'Jackevičius', 'Jackūnas', 'Jackus', 'Jagminas', 'Jakaitis', 'Jakas', 'Jakavičius', 'Jakimavičius', 'Jakiras', 'Jakovickis', 'Jakovlevas', 'Jakševičius', 'Jakštas', 'Jakštys', 'Jakubas', 'Jakubauskas', 'Jakubėnas', 'Jakučionis', 'Jakutis', 'Janavičius', 'Janickis', 'Jankauskas', 'Jankevičius', 'Jankūnas', 'Jankus', 'Janonis', 'Jansonas', 'Janulaitis', 'Janulevičius', 'Janulionis', 'Janulis', 'Janušaitis', 'Janušas', 'Janušauskas', 'Januševičius', 'Januševskis', 'Januška', 'Januškevičius', 'Januškis', 'Janušonis', 'Jaras', 'Jarašiūnas', 'Jarrett', 'Jaruševičius', 'Jarutis', 'Jasaitis', 'Jasas', 'Jaseliūnas', 'Jasenauskas', 'Jasevičius', 'Jasikevičius', 'Jasinevičius', 'Jasinskas', 'Jasinskis', 'Jasiukaitis', 'Jasiukevičius', 'Jasiulionis', 'Jasiulis', 'Jasiūnas', 'Jaskelevičius', 'Jasulaitis', 'Jaugelis', 'Jauniškis', 'Jaunius', 'Javtokas', 'Jefremovas', 'Jegelevičius', 'Jelskis', 'Jevdokimovas', 'Jocius', 'Jočys', 'Jogminas', 'Jokimaitis', 'Jokšas', 'Jokubaitis', 'Jokubauskas', 'Jokūbonis', 'Jokubynas', 'Jomantas', 'Jonaitis', 'Jonas', 'Jonauskas', 'Jonikas', 'Jonušas', 'Jonutis', 'Jonynas', 'Joteika', 'Jovaiša', 'Jovaišas', 'Jozėnas', 'Jucaitis', 'Jučas', 'Jucevičius', 'Jucys', 'Judickas', 'Jukna', 'Juknevičius', 'Juknys', 'Jundulas', 'Jundzilas', 'Junevičius', 'Jung', 'Juocevičius', 'Juodakis', 'Juodelė', 'Juodelis', 'Juodis', 'Juodišius', 'Juodka', 'Juodkazis', 'Juodvalkis', 'Juozaitis', 'Juozapaitis', 'Juozapavičius', 'Juraga', 'Jurėnas', 'Jurevičius', 'Jurgaitis', 'Jurgėla', 'Jurgelevičius', 'Jurgelionis', 'Jurgelis', 'Jurgeliūnas', 'Jurgilas', 'Jurgutis', 'Jurkėnas', 'Jurkevičius', 'Jurkštas', 'Jurkūnas', 'Jurkus', 'Juršėnas', 'Jurskis', 'Juščius', 'Jusionis', 'Juška', 'Juškauskas', 'Juškevičius', 'Juškus', 'Juškys', 'Jusys', 'Juzeliūnas', 'Juzėnas', 'Juzikėnas', 'Juzumas', 'Kabaila', 'Kačanauskas', 'Kačinskas', 'Kačiušis', 'Kadziauskas', 'Kaikaris', 'Kairelis', 'Kairiūkštis', 'Kairys', 'Kajackas', 'Kajeckas', 'Kajokas', 'Kaklauskas', 'Kalanta', 'Kalėda', 'Kalibatas', 'Kalinauskas', 'Kalnėnas', 'Kalninis', 'Kalpokas', 'Kaluževičius', 'Kalvaitis', 'Kalvanas', 'Kalvelis', 'Kamaitis', 'Kamarauskas', 'Kaminskas', 'Kanapeckas', 'Kanauka', 'Kancleris', 'Kandelis', 'Kaniava', 'Kanopa', 'Kapočius', 'Karabinas', 'Karaliūnas', 'Karalius', 'Karaška', 'Karazija', 'Karbauskas', 'Karbauskis', 'Karčiauskas', 'Kardelis', 'Kareiva', 'Karka', 'Karklelis', 'Karla', 'Karlonas', 'Karlsonas', 'Karnavičius', 'Karoblis', 'Karosas', 'Karpavičius', 'Karpis', 'Karvelis', 'Kasakaitis', 'Kasakauskis', 'Kašauskas', 'Kašėta', 'Kaškelis', 'Kasparaitis', 'Kasparas', 'Kasperavičius', 'Kašponis', 'Kasputis', 'Kašuba', 'Katauskas', 'Kateiva', 'Katilius', 'Katinas', 'Katkevičius', 'Katkus', 'Kaubrys', 'Kaunackis', 'Kaunas', 'Kauneckas', 'Kaupas', 'Kaušinis', 'Kavaliauskas', 'Kavolis', 'Kavoliūnas', 'Kazakevičius', 'Kazanas', 'Každailis', 'Kažemėkas', 'Kazėnas', 'Kazickas', 'Kazimieraitis', 'Kazlas', 'Kazlaukas', 'Kazlauskas', 'Kazokas', 'Kažukauskas', 'Keblys', 'Kederys', 'Kedys', 'Kėkštas', 'Keleris', 'Kelevišius', 'Keliauninkas', 'Keliuotis', 'Kemėšis', 'Kenstavičius', 'Kepalas', 'Kepenis', 'Kepežinskas', 'Kerbedis', 'Kerbelis', 'Kernagis', 'Kęsgaila', 'Keturakis', 'Kiaušas', 'Kibirkštis', 'Kilčiauskas', 'Kilkus', 'Kirchner', 'Kirkutis', 'Kirlys', 'Kirvaitis', 'Kisielius', 'Kisinas', 'Kiška', 'Kiškis', 'Kiveris', 'Kižys', 'Kleinas', 'Kleiza', 'Klevinskas', 'Klibavičius', 'Kličius', 'Klimaitis', 'Klimas', 'Klimašauskas', 'Klimavičius', 'Kliunka', 'Klova', 'Klumbys', 'Kmieliauskas', 'Kmitas', 'Kniukšta', 'Kočetkovas', 'Kojelavičius', 'Kojelis', 'Kolumbas', 'Komnina', 'Komninas', 'Komskis', 'Koncevičius', 'Kondratas', 'Kondratavičius', 'Kondrotas', 'Kondrusevičius', 'Konovalovas', 'Kontrimas', 'Korkutis', 'Korsakas', 'Kosakovskis', 'Kosciuška', 'Kossakowski', 'Kovaliovas', 'Kovas', 'Kralikauskas', 'Krasauskas', 'Kraucevičius', 'Kraujelis', 'Kreivys', 'Kriaučiūnas', 'Krikščiūnas', 'Krikštopaitis', 'Kriščiukaitis', 'Kriščiūnas', 'Krištaponis', 'Krištopaitis', 'Krivaitis', 'Krivickas', 'Krūminis', 'Krupavičius', 'Krusas', 'Krutinis', 'Kružinauskas', 'Krylovas', 'Kryževičius', 'Kubertavičius', 'Kubiliūnas', 'Kubilius', 'Kublickas', 'Kučingis', 'Kučinskas', 'Kuckailis', 'Kudarauskas', 'Kudirka', 'Kudokas', 'Kudzys', 'Kuizinas', 'Kuklys', 'Kukolnikas', 'Kulakauskas', 'Kulakovas', 'Kuleša', 'Kuliešius', 'Kulikauskas', 'Kulviecas', 'Kulvietis', 'Kulys', 'Kumpis', 'Kunavičius', 'Kunca', 'Kuncaitis', 'Kuncevičius', 'Kunčinas', 'Kunčius', 'Kundelis', 'Kundrotas', 'Kunskas', 'Kuodis', 'Kuodys', 'Kupčinskas', 'Kuperis', 'Kuprevičius', 'Kuprys', 'Kupstas', 'Kurauskas', 'Kūris', 'Kurkauskas', 'Kurlavičius', 'Kuršaitis', 'Kurtinaitis', 'Kutka', 'Kutorga', 'Kuzma', 'Kuzmickas', 'Kuzmina', 'Kuzminskas', 'Kuzminskis', 'Kuznecovas', 'Kvedaras', 'Kvedaravičius', 'Kvietkauskas', 'Kviklys', 'Kybartas', 'Labanauskas', 'Labukas', 'Labutis', 'Ladiga', 'Ladukas', 'Lagunavičius', 'Laiconas', 'Lajus', 'Lakis', 'Lamauskas', 'Landsbergis', 'Laniauskas', 'Lankauskas', 'Lapė', 'Lapėnas', 'Lapienis', 'Lapinas', 'Lapinskas', 'Lapšys', 'Lašas', 'Laškovas', 'Lastas', 'Latėnas', 'Laucevičius', 'Laucius', 'Laukaitis', 'Laurinaitis', 'Laurinavičius', 'Laurušas', 'Laužikas', 'Lavrinovič', 'Lavrinovičius', 'Lazauskas', 'Lazdynas', 'Lazutka', 'Lebedevas', 'Lebedis', 'Lebedžinskas', 'Lečkauskas', 'Leimonas', 'Leipus', 'Lekavičius', 'Lekevičius', 'Lekšas', 'Lelešius', 'Lelis', 'Leonas', 'Leonavičius', 'Leonovič', 'Leparskas', 'Leščinskas', 'Lešinskas', 'Leškevičius', 'Levickas', 'Levickis', 'Liandzbergis', 'Liatukas', 'Liaudanskas', 'Liaudanskis', 'Liberis', 'Lideikis', 'Lidžius', 'Liekis', 'Liepa', 'Likša', 'Lima', 'Linčas', 'Lingys', 'Linkevičius', 'Liorentas', 'Lipčius', 'Lipeika', 'Liubinskas', 'Liutkevičius', 'Liutkus', 'Ločeris', 'Logoiskis', 'Lopilato', 'Lozoraitis', 'Lucas', 'Luchtanas', 'Lugauskas', 'Lukaševičius', 'Lukauskas', 'Lukauskis', 'Lukošaitis', 'Lukoševičius', 'Lukošius', 'Lukša', 'Lukšas', 'Lukšys', 'Lydeka', 'Lysenko', 'Macaitis', 'Maceina', 'Mačernis', 'Macevičius', 'Macijauskas', 'Mačionis', 'Mačiuika', 'Mačiulaitis', 'Maciulevičius', 'Mačiulis', 'Mačiūnas', 'Macius', 'Mackevičius', 'Mackonis', 'Mackus', 'Maculevičius', 'Mačys', 'Majauskas', 'Majus', 'Makačinas', 'Makarevičius', 'Makariūnas', 'Makarovas', 'Makauskas', 'Makelis', 'Maknys', 'Maksimavičius', 'Makštutis', 'Makūnas', 'Malakauskas', 'Malevskis', 'Malinauskas', 'Mališauskas', 'Mamontovas', 'Manelis', 'Mankus', 'Manomaitis', 'Manvydas', 'Marčėnas', 'Marcinkevičius', 'Marcinkus', 'Marčiukaitis', 'Marčiulionis', 'Margelis', 'Marijošius', 'Markauskas', 'Markevičius', 'Markūnas', 'Martavičius', 'Martin', 'Martinaitis', 'Martinas', 'Martinėnas', 'Martinkėnas', 'Martinkus', 'Martinonis', 'Martins', 'Martišius', 'Martusevičius', 'Martynaitis', 'Masaitis', 'Masalskis', 'Masiokas', 'Masionis', 'Masiulis', 'Maskoliūnas', 'Masys', 'Mataitis', 'Matijošaitis', 'Matiukas', 'Matonis', 'Matulaitis', 'Matulas', 'Matulevičius', 'Matulionis', 'Matulis', 'Matusas', 'Matusevičius', 'Matutis', 'Matuzevičius', 'Mažeika', 'Mažeikis', 'Maželis', 'Mazgelis', 'Mažonas', 'Mažrimas', 'Mažulis', 'Mazūras', 'Mazuronis', 'Mažylis', 'Mediči', 'Medina', 'Medvedevas', 'Meidus', 'Meilus', 'Mekas', 'Melnikas', 'Mendosa', 'Merkevičius', 'Merkys', 'Meškauskas', 'Mianovskis', 'Mičiulis', 'Mickaitis', 'Mickevičius', 'Mickis', 'Mickus', 'Mieželis', 'Miglinas', 'Mikalajūnas', 'Mikalauskas', 'Mikelėnas', 'Mikelionis', 'Mikelis', 'Mikeliūnas', 'Mikėnas', 'Miknevičius', 'Miknius', 'Mikšys', 'Mikuckis', 'Mikulėnas', 'Mikulionis', 'Mikulskis', 'Mikutavičius', 'Mikutis', 'Milaknis', 'Milašius', 'Mileris', 'Milevskis', 'Miliauskas', 'Milinis', 'Miliūnas', 'Milius', 'Miloševičius', 'Minkevičius', 'Minkovskis', 'Minkus', 'Mironas', 'Mišeikis', 'Misevičius', 'Misiukonis', 'Misiūnas', 'Misiūra', 'Miškinis', 'Mitkus', 'Mitrikas', 'Mituzas', 'Miuleris', 'Mizara', 'Mizaras', 'Mizgaitis', 'Mizgiris', 'Mižutavičius', 'Mocartas', 'Mockaitis', 'Mockevičius', 'Mockus', 'Mohn', 'Moisejevas', 'Monkevičius', 'Montvila', 'Morkeliūnas', 'Morkevičius', 'Morkūnas', 'Morkus', 'Moroza', 'Morozas', 'Mošinskis', 'Motiejūnas', 'Motieka', 'Motiekaitis', 'Motuzas', 'Mulokas', 'Muraška', 'Murauskas', 'Mureika', 'Murnikas', 'Murza', 'Musteikis', 'Mykolaitis', 'Nacevičius', 'Nagurskis', 'Nagys', 'Nakas', 'Namavičius', 'Narbekovas', 'Narbutas', 'Narkevičius', 'Naruševičius', 'Narušis', 'Naujokas', 'Nausėda', 'Navickas', 'Navickis', 'Navikas', 'Nedzinskas', 'Neimanas', 'Nekrašas', 'Nekrošius', 'Norbutas', 'Noreika', 'Norkūnas', 'Norkus', 'Normantas', 'Norvilas', 'Numavičius', 'Oginskis', 'Olechnovičius', 'Oleinik', 'Oleka', 'Olekas', 'Oliveira', 'Olivera', 'Orlauskas', 'Orlauskis', 'Orlova', 'Ortega', 'Ostašenkovas', 'Ostrauskas', 'Ožalas', 'Oželis', 'Paberžis', 'Pabrėža', 'Padegimas', 'Pakalnis', 'Pakalniškis', 'Pakštas', 'Palčiauskas', 'Paleckis', 'Palionis', 'Paliulis', 'Palubinskas', 'Palubinskis', 'Pangonis', 'Pankauskas', 'Papečkys', 'Paplauskas', 'Paškevičius', 'Paukštelis', 'Paukštys', 'Paulauskas', 'Paulavičius', 'Paulikas', 'Pauliukėnas', 'Paulius', 'Pavilonis', 'Pavlovskis', 'Pečeliūnas', 'Pečiulis', 'Pečiūra', 'Pečkaitis', 'Peleckis', 'Perminas', 'Peseckas', 'Petkevičius', 'Petkūnas', 'Petkus', 'Petraitis', 'Petraškevičius', 'Petrauskas', 'Petravičius', 'Petrėnas', 'Petrikas', 'Petronaitis', 'Petronis', 'Petrosianas', 'Petrošius', 'Petrovas', 'Petrulis', 'Petruškevičius', 'Piesliakas', 'Pikelis', 'Pikturna', 'Pileckas', 'Pilipavičius', 'Pilvelis', 'Pilypaitis', 'Plečkaitis', 'Pliateris', 'Plioplys', 'Pocius', 'Polikaitis', 'Ponomariovas', 'Popovas', 'Poška', 'Poškus', 'Povilaitis', 'Povilionis', 'Požela', 'Prahiškis', 'Pranaitis', 'Pranckevičius', 'Pranevičius', 'Pranulis', 'Prapiestis', 'Praškevičius', 'Prižgintas', 'Prunskis', 'Puišys', 'Pukevičius', 'Puklevičius', 'Puodžiūnas', 'Pupinis', 'Purėnas', 'Purlys', 'Purvinis', 'Puškorius', 'Puteikis', 'Putinas', 'Putvinskis', 'Račas', 'Račius', 'Račkauskas', 'Radauskas', 'Radavičius', 'Radvila', 'Radvilavičius', 'Radzevičius', 'Radzinskas', 'Radziukynas', 'Radžiūnas', 'Radžius', 'Ragaišis', 'Ragauskas', 'Ragulskis', 'Raitas', 'Rajeckas', 'Rakauskas', 'Ralys', 'Ramanauskas', 'Ramonas', 'Rasimavičius', 'Rastenis', 'Raštikis', 'Raudonikis', 'Raudonis', 'Rauktys', 'Razbadauskas', 'Redlichas', 'Reimeris', 'Reinas', 'Rekašius', 'Rėklaitis', 'Rėkus', 'Remeika', 'Remeikis', 'Repečka', 'Repšys', 'Ribokas', 'Rimas', 'Rimdžius', 'Rimkevičius', 'Rimkus', 'Rimša', 'Rimšelis', 'Rinkevičius', 'Romanovas', 'Rožė', 'Rozentalis', 'Rozga', 'Rudis', 'Rudys', 'Rudžionis', 'Rumšas', 'Ruškys', 'Rutkauskas', 'Ruzveltas', 'Sabaliauskas', 'Sabutis', 'Sadauskas', 'Sakalauskas', 'Šakinis', 'Saladžius', 'Šalčius', 'Šalkauskis', 'Šaltenis', 'Šaltis', 'Samulevičius', 'Sapiega', 'Šarkauskas', 'Sasnauskas', 'Šatas', 'Šatkauskas', 'Šatūnas', 'Šaučiūnas', 'Saudargas', 'Sauka', 'Šaulys', 'Šavelis', 'Savickas', 'Savickis', 'Savukynas', 'Šedbaras', 'Sederevičius', 'Sėdžius', 'Seibutis', 'Seilius', 'Selemenavičius', 'Šemeta', 'Seniūnas', 'Senkus', 'Šepetys', 'Serapinas', 'Sereika', 'Šerėnas', 'Šernas', 'Šeštokas', 'Sicinskis', 'Šidlauskas', 'Šikšnelis', 'Šilanskas', 'Šileika', 'Šileikis', 'Šilgalis', 'Šilinskas', 'Simaitis', 'Simanavičius', 'Šimėnas', 'Šimkevičius', 'Šimkūnas', 'Šimkus', 'Simniškis', 'Simonaitis', 'Simonavičius', 'Šimonis', 'Simons', 'Simutis', 'Sinkevičius', 'Šinkūnas', 'Sipaitis', 'Siparis', 'Sirgėdas', 'Sirutavičius', 'Sirvydis', 'Šiurys', 'Šivickas', 'Skaisgirys', 'Skarbalius', 'Skardžius', 'Skirgaila', 'Skroblas', 'Skučas', 'Slavėnas', 'Slavickas', 'Slavinskas', 'Šležas', 'Sleževičius', 'Šlikas', 'Šliogeris', 'Šliūpas', 'Sližys', 'Smaliukas', 'Smetona', 'Šmidtas', 'Smilgevičius', 'Smilinskas', 'Šmitas', 'Smoriginas', 'Šmulkštys', 'Smyslovas', 'Sodeika', 'Sokas', 'Sondeckis', 'Songaila', 'Špokas', 'Spruogis', 'Spudulis', 'Stačiokas', 'Stakauskas', 'Stakėnas', 'Stalmokas', 'Stančikas', 'Stanevičius', 'Stanišauskas', 'Staniulis', 'Stankevičius', 'Stankūnas', 'Stankus', 'Stanulis', 'Štaras', 'Starkus', 'Stašaitis', 'Stašinskas', 'Stasiulis', 'Stasiūnas', 'Staškevičius', 'Staškus', 'Statkevičius', 'Statkus', 'Staugaitis', 'Stelmokas', 'Stephens', 'Steponavičius', 'Stirbys', 'Štombergas', 'Stoncelis', 'Stonis', 'Stonkus', 'Stonys', 'Storpirštis', 'Strazdas', 'Strazdauskas', 'Strielkūnas', 'Stripeika', 'Strolia', 'Stulginskis', 'Stulpinas', 'Sudaris', 'Sudeikis', 'Šukys', 'Šulcas', 'Šulskis', 'Šumacheris', 'Sungaila', 'Šurkus', 'Šurna', 'Sutkus', 'Suvorovas', 'Švarcas', 'Svečiulis', 'Švedas', 'Švėgžda', 'Sviderskis', 'Švirinas', 'Tamašauskas', 'Taminskas', 'Tamonis', 'Tamošaitis', 'Tamošauskas', 'Tamoševičius', 'Tamulionis', 'Tamulis', 'Tankevičius', 'Tarasevičius', 'Tarulis', 'Tarvydas', 'Teišerskis', 'Tenys', 'Tijūnaitis', 'Tilvikas', 'Tiškevičius', 'Tomaševičius', 'Tomkus', 'Tonkūnas', 'Trakiškis', 'Trečiokas', 'Treinys', 'Trinkūnas', 'Trofimovas', 'Tumas', 'Tumėnas', 'Tyla', 'Tyzenhauzas', 'Ubartas', 'Ulevičius', 'Ulickas', 'Ulmanis', 'Urba', 'Urbaitis', 'Urbanavičius', 'Urbonas', 'Urbonavičius', 'Urbšys', 'Urmonas', 'Ušinskas', 'Uždavinys', 'Uzdila', 'Vabalas', 'Vadopalas', 'Vaičaitis', 'Vaicekauskas', 'Vaičekonis', 'Vaičiulionis', 'Vaičiulis', 'Vaičiūnas', 'Vaičius', 'Vaičys', 'Vaidelys', 'Vailokaitis', 'Vaina', 'Vainauskas', 'Vainiūnas', 'Vainora', 'Vainoras', 'Vaišnora', 'Vaišnoras', 'Vaišvila', 'Vaitekūnas', 'Vaitelis', 'Vaitiekūnas', 'Vaitiekus', 'Vaitkaitis', 'Vaitkevičius', 'Vaitkūnas', 'Vaitkus', 'Vaivada', 'Valaitis', 'Valančius', 'Valantiejus', 'Valantinas', 'Valatka', 'Valatkevičius', 'Valensa', 'Valentinavičius', 'Valevičius', 'Valickas', 'Valimantaitis', 'Valinčius', 'Valionis', 'Valiukas', 'Valiukevičius', 'Valiulis', 'Valiūnas', 'Valius', 'Valkauskas', 'Valušis', 'Valutis', 'Valys', 'Vanagaitis', 'Vanagas', 'Vancevičius', 'Vansevičius', 'Varanavičius', 'Vareikis', 'Variakojis', 'Varkala', 'Varlamovas', 'Varnas', 'Varnauskas', 'Varpiotas', 'Vasaitis', 'Vasiljevas', 'Vaškelis', 'Vaškevičius', 'Vaškys', 'Vasyliūnas', 'Vaza', 'Vaznonis', 'Vázquez', 'Vėberis', 'Vėbra', 'Večkys', 'Vegys', 'Velička', 'Velykis', 'Venckūnas', 'Venckus', 'Venclova', 'Venclovas', 'Venskūnas', 'Venslauskas', 'Verbickas', 'Verbyla', 'Verikas', 'Verseckas', 'Vertelis', 'Vertelka', 'Veselis', 'Veselka', 'Veteikis', 'Veverskis', 'Vėželis', 'Vičius', 'Vidūnas', 'Vidžiūnas', 'Vieira', 'Vigelis', 'Vijūkas', 'Vikšraitis', 'Vilčinskas', 'Vildžiūnas', 'Vileišis', 'Viliams', 'Vilimas', 'Vilkaitis', 'Vilkas', 'Vilkutaitis', 'Vilsonas', 'Vilys', 'Vinikaitis', 'Virbickas', 'Viršilas', 'Viskanta', 'Visminas', 'Visockas', 'Visockis', 'Vitkauskas', 'Vitkus', 'Vizbaras', 'Vizgirda', 'Vladimirovas', 'Vokietaitis', 'Volkovas', 'Volkus', 'Voveris', 'Vyšniauskas', 'Vyžintas', 'Yčas', 'Yla', 'Zabiela', 'Zablockis', 'Zaborskas', 'Žadeikis', 'Žagunis', 'Zakarauskas', 'Žalalis', 'Zaleckas', 'Žalnerauskas', 'Zaunius', 'Zavackas', 'Zavadskas', 'Zdanavičius', 'Žebrauskas', 'Žeimys', 'Žėkas', 'Želvys', 'Žemaitis', 'Žemkalnis', 'Zenkevičius', 'Žičkus', 'Žiemelis', 'Žievys', 'Zigmantas', 'Žilinskas', 'Žilionis', 'Žiliukas', 'Žilys', 'Zinkevičius', 'Žiugžda', 'Žiurlys', 'Žmuidzinavičius', 'Zokaitis', 'Zolubas', 'Zubovas', 'Žukas', 'Žukauskas', 'Žukovas', 'Zulonas', 'Zuoza', 'Zurba', 'Žutautas', 'Žvinklys', 'Žvirblis', 'Žvybas', 'Žylius', 'Žymantas'
    );

    /**
     * @link http://www.horoskopai.lt/gaires/populiariausios-pavardes-lietuvoje/
     * @link https://www.zodynas.lt/pavardes
     */
    protected static $lastNameFemale = array(
        'Abraitytė', 'Abramavičienė', 'Abramikienė', 'Abramonienė', 'Abromaitytė', 'Abromavičienė', 'Abrutytė', 'Adamkevičienė', 'Adamonienė', 'Adomaitienė', 'Adomaitytė', 'Adomavičius', 'Adomavičiūtė', 'Adomonienė', 'Adomonis', 'Adomonytė', 'Aižinienė', 'Akelaitienė', 'Akelaitytė', 'Akstinavičienė', 'Albrechtienė', 'Albužienė', 'Alechnavičienė', 'Aleknaitė', 'Aleknavičienė', 'Aleknevičienė', 'Aleknienė', 'Aleksaitė', 'Aleksandravičiūtė', 'Aleksienė', 'Aleksiūnienė', 'Aleškevičienė', 'Aleškevičiūtė', 'Alinskaitė', 'Ališauskienė', 'Almonaitytė', 'Alšauskienė', 'Alseikienė', 'Ambrasienė', 'Ambrazaitytė', 'Ambrazienė', 'Andrašiūnaitė', 'Andreikėnienė', 'Andrejauskaitė', 'Andrijauskienė', 'Andrikienė', 'Andriukaitienė', 'Andriukonytė', 'Andriušienė', 'Andriuškevičienė', 'Andriušytė', 'Andžiulienė', 'Anisimovienė', 'Aniulienė', 'Antanavičienė', 'Antanavičiūtė', 'Anusauskienė', 'Apanavičiūtė', 'Apeikienė', 'Apeikytė', 'Aramavičiūtė', 'Arlauskienė', 'Armonienė', 'Augustinavičiūtė', 'Bacevičienė', 'Bagdanavičienė', 'Bagdonienė', 'Baikštytė', 'Bakšienė', 'Balčiūnaitė', 'Balčiūnas', 'Balčiūnienė', 'Balevičienė', 'Balevičiūtė', 'Balsienė', 'Banienė', 'Baranauskienė', 'Barauskienė', 'Bartkevičienė', 'Baškienė', 'Bataitienė', 'Baužytė', 'Bernotienė', 'Bieliauskienė', 'Bitė', 'Bložė', 'Blynaitė', 'Brazauskienė', 'Briedienė', 'Brundzaitė', 'Bružaitė', 'Budrienė', 'Budrikaitė', 'Bukauskienė', 'Bumblauskienė', 'Butkevičienė', 'Butkutė', 'Čepaitė', 'Čepienė', 'Čepinskienė', 'Čepulienė', 'Černeckienė', 'Černiauskaitė', 'Černiauskienė', 'Čiplytė', 'Čiurlionytė', 'Čižauskienė', 'Čypienė', 'Dabašinskienė', 'Dagelytė', 'Dambrauskaitė', 'Dambrauskienė', 'Damulienė', 'Daugėlienė', 'Dauguvietienė', 'Dauguvietytė', 'Daujotaitė', 'Degutienė', 'Degutytė', 'Dirsė', 'Domarkienė', 'Drąsutienė', 'Draugelytė', 'Drazdauskaitė', 'Drazdauskienė', 'Dulkė', 'Dunauskaitė', 'Dvarionaitė', 'Gaidamavičiutė', 'Gaigalaitė', 'Gailiūnienė', 'Gailius', 'Gailiūtė', 'Gaižiūnienė', 'Galaunė', 'Galaunienė', 'Galdikienė', 'Galinienė', 'Gecevičiūtė', 'Gečienė', 'Gedvilaitė', 'Giedraitienė', 'Giedrimienė', 'Gimbutienė', 'Gineitytė', 'Gintautienė', 'Gokaitė', 'Gražulytė', 'Griauzdė', 'Griciūtė', 'Grigaitienė', 'Grigaliūnienė', 'Grigaravičienė', 'Grinienė', 'Gruodytė', 'Gudauskienė', 'Gudonytė', 'Gustaitienė', 'Gustienė', 'Gylienė', 'Ignatavičiūtė', 'Ilginienė', 'Ivanauskaitė', 'Jablonskienė', 'Jakštienė', 'Janavičienė', 'Jankauskaitė', 'Jankauskienė', 'Jankevičienė', 'Jankevičiūtė', 'Janonienė', 'Janulaitytė', 'Janulytė', 'Jasiūnaitė', 'Jasudytė', 'Jaudegytė', 'Jautakienė', 'Jogailaitė', 'Jokubauskienė', 'Jonaitienė', 'Jonušauskienė', 'Jonuškaitė', 'Juknaitė', 'Juknevičienė', 'Juknienė', 'Juodeikienė', 'Juodelė', 'Jurgaitienė', 'Jurgelevičiūtė', 'Jurkūnienė', 'Juškevičiūtė', 'Kadytė', 'Kairienė', 'Kairiūkštytė', 'Kalėdienė', 'Kalinauskaitė', 'Kalvaitytė', 'Kaminskaitė', 'Kaminskienė', 'Karaliūnaitė', 'Karaliūnienė', 'Karatajūtė', 'Karosaitė', 'Karpavičienė', 'Karvelienė', 'Kasperavičienė', 'Kastanauskaitė', 'Katchė', 'Katelė', 'Katiliūtė', 'Katinienė', 'Kavaliauskaitė', 'Kavaliauskienė', 'Kazlauskaitė', 'Kazlauskienė', 'Kernagienė', 'Keturakienė', 'Kirvelienė', 'Kisielienė', 'Klimavičienė', 'Korsakienė', 'Krasauskienė', 'Kreivytė', 'Kriaučiūnaitė', 'Krinickaitė', 'Kriščiūnaitė', 'Krištolaitytė', 'Kšanienė', 'Kubilienė', 'Kubiliūtė', 'Kučinskaitė', 'Kučinskienė', 'Kudžmaitė', 'Kuliešienė', 'Kulikauskienė', 'Kumpienė', 'Kuodytė', 'Kupčinskienė', 'Kurmytė', 'Lapinskienė', 'Lašienė', 'Laučkaitė', 'Leimontaitė', 'Lengvenienė', 'Leonavičiūtė', 'Lesauskaitė', 'Leskauskienė', 'Liaudanskienė', 'Liesienė', 'Lukauskienė', 'Lukoševičienė', 'Lukoševičiūtė', 'Lukšaitė', 'Lukšienė', 'Macienė', 'Mačiulienė', 'Maciūtė', 'Mackevičiūtė', 'Majauskaitė', 'Malinauskaitė', 'Marcinkevičienė', 'Marcinkevičiūtė', 'Marčiulionienė', 'Martinaitienė', 'Martinaitytė', 'Masiulytė', 'Matulaitė', 'Mauragienė', 'Mažeikaitė', 'Mažeikienė', 'Mažeikytė', 'Meilutienė', 'Meškauskaitė', 'Meškauskienė', 'Mikalauskaitė', 'Mikėnaitė', 'Miknevičienė', 'Mikšienė', 'Mikšytė', 'Mikulėnaitė', 'Mikulėnienė', 'Miliauskaitė', 'Miliauskienė', 'Mironaitė', 'Misiūnienė', 'Miškinienė', 'Mockuvienė', 'Molytė', 'Monkevičienė', 'Morkūnienė', 'Motiejūnaitė', 'Motiekaitytė', 'Mozūraitytė', 'Mulevičiūtė', 'Murauskienė', 'Narbutaitė', 'Narbutienė', 'Narmontaitė', 'Navakienė', 'Navickaitė', 'Navickienė', 'Nedzinskienė', 'Nenėnaitė', 'Paškevičienė', 'Paukštė', 'Paulauskienė', 'Paulikienė', 'Petraitienė', 'Petrauskaitė', 'Petrauskienė', 'Petronienė', 'Pliaterytė', 'Pociūtė', 'Poškienė', 'Povickaitė', 'Prašmutaitė', 'Pučinskaitė', 'Puronaitė', 'Radvilaitė', 'Radzevičienė', 'Ragauskienė', 'Rakauskienė', 'Ramanauskaitė', 'Ramanauskienė', 'Rapalytė', 'Repečkienė', 'Rimkevičiūtė', 'Rudgalvienė', 'Rudienė', 'Rudzinskaitė', 'Šakienė', 'Šaltenienė', 'Šapokaitė', 'Savickaitė', 'Savickienė', 'Šeduikytė', 'Šiaulienė', 'Šidlauskienė', 'Šimkutė', 'Šimkuvienė', 'Simonaitytė', 'Šiurkutė', 'Smilgevičienė', 'Smilgevičiūtė', 'Šniukštienė', 'Špokaitė', 'Špokienė', 'Stančienė', 'Stankevičienė', 'Stankevičiūtė', 'Stankutė', 'Stasiulionienė', 'Steponavičienė', 'Stonienė', 'Strazdienė', 'Stripeikienė', 'Sutkienė', 'Švažienė', 'Tamoševičienė', 'Tamulevičienė', 'Tiškevičiūtė', 'Tomkienė', 'Urbonienė', 'Užkurėlytė', 'Vaicekauskienė', 'Vaičiūnienė', 'Vainienė', 'Vaišvilaitė', 'Vaitiekūnienė', 'Valaitienė', 'Valatkienė', 'Valiukaitė', 'Valiukas', 'Valiukevičius', 'Valiulis', 'Valiulytė', 'Vanagienė', 'Vasiliauskaitė', 'Vasiliauskienė', 'Veličkaitė', 'Venclovienė', 'Vileišytė', 'Vilkevičiūtė', 'Visockaitė', 'Visockienė', 'Visockytė', 'Ylienė', 'Zdanavičiūtė', 'Žeimienė', 'Žemaitaitienė', 'Žemaitienė', 'Žemaitytė', 'Žilinskaitė', 'Žilinskienė', 'Zinkevičiūtė', 'Žiūkienė', 'Zubovienė', 'Žukauskienė', 'Žukienė', 'Zulonienė', 'Žymantienė'
    );

    /**
     * Return male last name
     * @return string
     * @example 'Vasiliauskas'
     */
    public function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }

    /**
     * Return female last name
     * @return string
     * @example 'Žukauskaitė'
     */
    public function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }

    /**
     * Return driver license number
     * @return string
     * @example 12345678
     */
    public function driverLicence()
    {
        return $this->bothify("########");
    }

    /**
     * Return passport number
     * @return string
     * @example 12345678
     */
    public function passportNumber()
    {
        return $this->bothify("########");
    }

    /**
     * National Personal Identity number (asmens kodas)
     * @link https://en.wikipedia.org/wiki/National_identification_number#Lithuania
     * @link https://lt.wikipedia.org/wiki/Asmens_kodas
     *
     * @param           string        [male|female]
     * @param \DateTime $birthdate
     * @param string    $randomNumber three integers
     *
     * @return string on format XXXXXXXXXXX
     */
    public function personalIdentityNumber($gender = 'male', \DateTime $birthdate = null, $randomNumber = '')
    {
        if (!$birthdate) {
            $birthdate = \Faker\Provider\DateTime::dateTimeThisCentury();
        }

        $genderNumber = ($gender == 'male') ? (int)1 : (int)0;
        $firstNumber = (int)floor($birthdate->format('Y') / 100) * 2 - 34 - $genderNumber;

        $datePart = $birthdate->format('ymd');
        $randomDigits = (string)(!$randomNumber || strlen($randomNumber < 3)) ? static::numerify('###') : substr($randomNumber, 0, 3);
        $partOfPerosnalCode = $firstNumber . $datePart . $randomDigits;

        $sum = self::calculateSum($partOfPerosnalCode, 1);
        $liekana = $sum % 11;

        if ($liekana !== 10) {
            $lastNumber = $liekana;

            return $firstNumber . $datePart . $randomDigits . $lastNumber;
        }

        $sum = self::calculateSum($partOfPerosnalCode, 2);
        $liekana = (int)$sum % 11;

        $lastNumber = ($liekana !== 10) ? $liekana : 0;

        return $firstNumber . $datePart . $randomDigits . $lastNumber;
    }

    /**
     * Calculate the sum of personal code
     * @link https://en.wikipedia.org/wiki/National_identification_number#Lithuania
     * @link https://lt.wikipedia.org/wiki/Asmens_kodas
     *
     * @param string $numbers
     * @param int    $time [1|2]
     *
     * @return int
     */
    private static function calculateSum($numbers, $time = 1)
    {
        if ($time == 1) {
            $multipliers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 1);
        } else {
            $multipliers = array(3, 4, 5, 6, 7, 8, 9, 1, 2, 3);
        }

        $sum = 0;
        for ($i = 1; $i <= 10; $i++) {
            $sum += $numbers[$i - 1] * $multipliers[$i - 1];
        }

        return (int)$sum;
    }
}
