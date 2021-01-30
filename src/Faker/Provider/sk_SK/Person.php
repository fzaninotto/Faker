<?php

namespace Faker\Provider\sk_SK;

class Person extends \Faker\Provider\Person
{
    protected static $lastNameFormat = array(
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    );

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}} {{suffix}}'
    );

    protected static $firstNameMale = array(
        'Adam', 'Adolf', 'Adrián', 'Alan', 'Albert', 'Albín', 'Alexander', 'Alexej', 'Aleš', 'Alfonz', 'Alfréd',
        'Alojz', 'Ambróz', 'Andrej', 'Anton', 'Arnold', 'Arpád', 'Augustín', 'Aurel',
        'Bartolomej', 'Belo', 'Benjamín', 'Bernard', 'Beňadik', 'Blahoslav', 'Blažej', 'Bohdan', 'Bohumil', 'Bohumír',
        'Bohuslav', 'Bohuš', 'Boleslav', 'Bonifác', 'Boris', 'Branislav', 'Bruno', 'Bystrík',
        'Ctibor', 'Cyprián', 'Cyril',
        'Dalibor', 'Daniel', 'Demeter', 'Denis', 'Dezider', 'Dionýz', 'Dobroslav', 'Dominik', 'Drahomír', 'Drahoslav',
        'Dušan', 'Dávid',
        'Edmund', 'Eduard', 'Emanuel', 'Emil', 'Erik', 'Ernest', 'Ervín', 'Eugen',
        'Fedor', 'Ferdinand', 'Filip', 'Florián', 'František', 'Frederik', 'Fridrich', 'Félix',
        'Gabriel', 'Gašpar', 'Gejza', 'Gregor', 'Gustáv',
        'Henrich', 'Hubert', 'Hugo',
        'Ignác', 'Igor', 'Imrich', 'Ivan', 'Izidor', 'Iľja',
        'Jakub', 'Jarolím', 'Jaromír', 'Jaroslav', 'Jerguš', 'Jozef', 'Juraj', 'Ján', 'Júlia', 'Július',
        'Kamil', 'Karol', 'Kazimír', 'Klement', 'Koloman', 'Konštantín', 'Kornel', 'Kristián', 'Krištof',
        'Ladislav', 'Leonard', 'Leopold', 'Levoslav', 'Lukáš',
        'Ľubomír', 'Ľubor', 'Ľuboslav', 'Ľuboš', 'Ľudomil', 'Ľudovít',
        'Marcel', 'Marek', 'Marián', 'Maroš', 'Martin', 'Matej', 'Matúš', 'Maximilián', 'Medard', 'Metod', 'Michal',
        'Mikuláš', 'Milan', 'Miloslav', 'Miloš', 'Miroslav', 'Mojmír', 'Móric',
        'Norbert',
        'Oldrich', 'Oleg', 'Oliver', 'Ondrej', 'Oskar', 'Oto',
        'Pankrác', 'Patrik', 'Pavol', 'Peter', 'Pravoslav', 'Prokop',
        'Radomír', 'Radoslav', 'Radovan', 'Radúz', 'Rastislav', 'René', 'Richard', 'Roland', 'Roman',
        'Rudolf', 'Róbert',
        'Samuel', 'Sergej', 'Servác', 'Severín', 'Silvester', 'Slavomír', 'Stanislav', 'Svetozár', 'Svätopluk',
        'Štefan',
        'Tadeáš', 'Teodor', 'Tibor', 'Tichomír', 'Timotej', 'Tomáš',
        'Urban',
        'Valentín', 'Valér', 'Vasil', 'Vavrinec', 'Vendelín', 'Viktor', 'Viliam', 'Vincent', 'Vladimír', 'Vladislav',
        'Vlastimil', 'Vojtech', 'Vratislav', 'Vratko', 'Václav', 'Vít', 'Víťazoslav',
        'Zdenko', 'Zlatko', 'Zoltán',
        'Žigmund',
    );

    protected static $firstNameFemale = array(
        'Adela', 'Adriána', 'Agnesa', 'Agáta', 'Albína', 'Alena', 'Alexandra', 'Alica', 'Alojza', 'Alžbeta', 'Amália',
        'Anabela', 'Anastázia', 'Andrea', 'Anežka', 'Angela', 'Anna', 'Antónia', 'Aurélia',
        'Barbora', 'Berta', 'Beáta', 'Bibiána', 'Blanka', 'Blažena', 'Bohdana', 'Bohumila', 'Bohuslava', 'Božena',
        'Božidara', 'Branislava', 'Brigita', 'Bronislava',
        'Cecília',
        'Dagmara', 'Dana', 'Danica', 'Daniela', 'Darina', 'Denisa', 'Diana', 'Dobromila', 'Dobroslava', 'Dominika',
        'Dorota', 'Drahomíra', 'Drahoslava', 'Dušana', 'Dáša',
        'Edita', 'Ela', 'Elena', 'Eleonóra', 'Eliška', 'Elvíra', 'Ema', 'Emília', 'Erika', 'Estera', 'Etela',
        'Eugénia', 'Eva',
        'Filoména', 'Františka',
        'Gabriela', 'Galina', 'Gertrúda', 'Gizela',
        'Hana', 'Hedviga', 'Helena', 'Henrieta', 'Hermína', 'Hilda', 'Hortenzia',
        'Ida', 'Ingrida', 'Irena', 'Irma', 'Ivana', 'Iveta', 'Ivica', 'Izabela',
        'Jana', 'Jarmila', 'Jaroslava', 'Jela', 'Jolana', 'Jozefína', 'Judita', 'Juliana', 'Justína', 'Júlia',
        'Kamila', 'Karina', 'Karolína', 'Katarína', 'Klaudia', 'Klára', 'Kornélia', 'Kristína', 'Kvetoslava',
        'Laura', 'Lea', 'Lenka', 'Lesana', 'Liana', 'Libuša', 'Linda', 'Lucia', 'Lujza', 'Lívia', 'Lýdia',
        'Ľubica', 'Ľubomíra', 'Ľuboslava', 'Ľudmila', 'Ľudomila',
        'Magdaléna', 'Malvína', 'Marcela', 'Margaréta', 'Margita', 'Marianna', 'Marta', 'Martina', 'Marína', 'Matilda',
        'Melinda', 'Melánia', 'Michaela', 'Milada', 'Milena', 'Milica', 'Miloslava', 'Milota', 'Miriama', 'Miroslava',
        'Monika', 'Mária', 'Nadežda',
        'Nataša', 'Natália', 'Nikola', 'Nina', 'Nora',
        'Olympia', 'Otília', 'Oľga',
        'Patrícia', 'Paulína', 'Perla', 'Petra', 'Petronela',
        'Rebeka', 'Regína', 'Renáta', 'Romana', 'Rozália', 'Ružena',
        'Sabína', 'Sidónia', 'Silvia', 'Simona', 'Sláva', 'Slávka', 'Sofia', 'Soňa', 'Stanislava', 'Stela', 'Svetlana',
        'Sára',
        'Štefánia',
        'Tamara', 'Tatiana', 'Terézia',
        'Uršuľa',
        'Valentína', 'Valéria', 'Vanda', 'Vanesa', 'Veronika', 'Viera', 'Vieroslava', 'Viktória', 'Vilma', 'Viola',
        'Vladimíra', 'Vlasta',
        'Xénia',
        'Zdenka', 'Zina', 'Zita', 'Zlatica', 'Zoja', 'Zora', 'Zuzana',
        'Žaneta', 'Želmíra', 'Žofia',
    );

    protected static $lastNameMale = array(
        'Abrahám', 'Adam', 'Adamec', 'Almáši', 'Anderle', 'Antal',
        'Babka', 'Bahna', 'Bahno', 'Bajnok', 'Balaša', 'Balog', 'Balogh', 'Baláž', 'Baran', 'Baranka', 'Bartovič',
        'Bartoš', 'Bača', 'Beck', 'Beihofner', 'Bella', 'Beran', 'Bernolák', 'Beňo', 'Bicek', 'Bielik', 'Biringer',
        'Blaho', 'Bondra', 'Bosák', 'Boška', 'Brezina', 'Bugár', 'Buš',
        'Chalupka', 'Chudík', 'Cyprich', 'Cíger',
        'Čaplovič', 'Čarnogurský', 'Čierny',
        'Dacej', 'Danko', 'Debnár', 'Dej', 'Dekýš', 'Doležal', 'Dostál', 'Dočolomanský', 'Drajna', 'Droppa', 'Dubovský',
        'Dudek', 'Dula', 'Dulla', 'Dusík', 'Dvonč', 'Dzurjanin', 'Dávid',
        'Ďaďo', 'Ďurica', 'Ďuriš',
        'Fabian', 'Fabián', 'Fajnor', 'Farkašovský', 'Feldek', 'Fico', 'Filc', 'Filip', 'Finka', 'Ftorek',
        'Galis', 'Gallo', 'Gašpar', 'Gašparovič', 'Gocník', 'Golonka', 'Greguš', 'Grznár',
        'Hablák', 'Habšuda', 'Haluška', 'Halák', 'Hanko', 'Hanzal', 'Hanzel', 'Haščák', 'Heretik', 'Hečko', 'Hlaváček',
        'Hlinka', 'Hochschorner', 'Holub', 'Holuby', 'Horváth', 'Horák', 'Hossa', 'Hraško', 'Hric', 'Hrmo',
        'Hrušovský', 'Huba', 'Hudáček', 'Hála',
        'Ihnačák',
        'Janoška', 'Jantošovič', 'Janík', 'Jonata', 'Jurina', 'Jurík', 'Jáni', 'Jánošík',
        'Kaliský', 'Karul', 'Karvaš', 'Keníž', 'Klapka', 'Klaus', 'Kolník', 'Kolár', 'Konečný', 'Konstantinidis',
        'Kopecký', 'Korec', 'Kostrec', 'Kováč', 'Kováčik', 'Koza', 'Král', 'Kubík', 'Kučera',
        'Labuda', 'Langoš', 'Lepšík', 'Lexa', 'Lintner', 'Lubina', 'Lukáč', 'Lupták', 'Líška',
        'Majeský', 'Malachovský', 'Malíšek', 'Malý', 'Marek', 'Marián', 'Masaryk', 'Maslo', 'Matiaško', 'Medveď',
        'Menyhért', 'Mečiar', 'Mečíř', 'Mikloško', 'Mikulík', 'Mikuš', 'Mikúš', 'Mišík', 'Mojžiš', 'Mokroš', 'Molnár',
        'Moravčík', 'Musil', 'Mydlo',
        'Nagy', 'Nemec', 'Němec', 'Neruda', 'Nezval', 'Nitra', 'Novotný', 'Novák', 'Nábělek',
        'Obšut', 'Otčenáš',
        'Pauko', 'Pavlikovský', 'Pavúk', 'Pašek', 'Paška', 'Paško', 'Pelikán', 'Petrovický', 'Petruška', 'Plch',
        'Podhradský', 'Podkonický', 'Pokorný', 'Poliak', 'Polák', 'Procházka', 'Puskás', 'Puškáš',
        'Raši', 'Repiský', 'Riszdorfer', 'Romančík', 'Rozenberg', 'Rus', 'Ružička', 'Rúfus', 'Růžička',
        'Samson', 'Sedliak', 'Senko', 'Sidor', 'Sklenka', 'Skutecký', 'Slašťan', 'Sloboda', 'Slobodník', 'Slota',
        'Slovák', 'Smrek', 'Stodola', 'Straka', 'Szabó', 'Sámel', 'Sýkora',
        'Šimonovič', 'Škriniar', 'Šouc', 'Šoustal', 'Štefan', 'Štefanka', 'Šulc', 'Šurka', 'Švehla', 'Šťastný',
        'Tatar', 'Tatár', 'Tatarka', 'Tatárka', 'Timko', 'Tiso', 'Tomeček', 'Truben', 'Turčok', 'Tóth',
        'Uram', 'Urban', 'Urblík',
        'Vajcík', 'Valent', 'Valuška', 'Varga', 'Vašíček', 'Vesel', 'Veselý', 'Vico', 'Višňovský', 'Vlček', 'Vydarený',
        'Weiss',
        'Zeman', 'Zima', 'Zimka', 'Zipser', 'Zátopek', 'Zúbrik',
    );

    protected static $lastNameFemale = array(
        'Adamcová',
        'Balogová', 'Balážová', 'Butvínová',
        'Černá', 'Čierna', 'Čuntalová',
        'Dubníčková',
        'Ferjenčíková', 'Fialová', 'Fingerlandová', 'Finková',
        'Godolová', 'Gonová',
        'Hajzerová', 'Hantuchová', 'Holubová', 'Holubová', 'Holéczyová', 'Horváthová', 'Hotová', 'Hrdá', 'Hulmanová',
        'Jakubová', 'Jančová',
        'Kapustová', 'Karolčíková', 'Kažimírová', 'Kocúrová', 'Kolrusová', 'Kolárová', 'Konečná', 'Kopecká', 'Kováčová',
        'Košíková', 'Krajčíová', 'Kravjarová', 'Králiková', 'Králová', 'Kubáňová', 'Kučerová', 'Kušnírová',
        'Litajová', 'Lukáčová',
        'Malá', 'Malíková', 'Molnárová', 'Molnárová', 'Muráriková', 'Murčová', 'Máliková',
        'Nemcová', 'Nosková', 'Novotná',
        'Ondrejková', 'Ondrišová', 'Oravcová', 'Oslejová', 'Oťapková',
        'Pirošová', 'Plšková', 'Podhradská', 'Poláková', 'Popovičová',
        'Radičová', 'Rezníčková', 'Ringlóciová', 'Růžičková',
        'Sadloňová', 'Senková', 'Slobodníková', 'Slobodová', 'Sobotková', 'Staneková', 'Svobodová', 'Szabová', 'Sárová',
        'Šimková', 'Šimonová', 'Šindlerová', 'Šoltisová', 'Šťastná',
        'Taliánová', 'Tóthová',
        'Vargová', 'Veselá', 'Virčíková', 'Vlčková', 'Vícenová',
        'Zelenayová', 'Zemanová', 'Zuzulová',
    );

    protected static $title = array(
        'Bc.', 'Ing.', 'MUDr.', 'MVDr.', 'Mgr.', 'JUDr.', 'PhDr.', 'RNDr.', 'doc.', 'Dr.', 'BcA.', 'ICDr.', 'Ing.', 'Ing. arch.', 'JUDr.',
        'Mgr. art.', 'MSDr.', 'PaedDr.', 'PharmDr.', 'PhDr.', 'PhMr.', 'RNDr.', 'RSDr.', 'ThDr.', 'ThLic.', 'prof.', 'Dr. h. c.'
    );

    private static $suffix = array(
        'CSc.', 'DrSc.', 'DSc.', 'Ph.D.', 'Th.D.'
    );

    public function title($gender = null)
    {
        return static::titleMale();
    }

    /**
     * replaced by specific unisex slovakian title
     */
    public static function titleMale()
    {
        return static::randomElement(static::$title);
    }

    /**
     * replaced by specific unisex slovakian title
     */
    public static function titleFemale()
    {
        return static::titleMale();
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any
     * @example 'Novotný'
     */
    public function lastName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return static::lastNameMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return $this->generator->parse(static::randomElement(static::$lastNameFormat));
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
