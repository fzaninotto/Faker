<?php

namespace Faker\Provider\de_CH;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{prefixMale}} {{firstNameMale}} {{lastName}}',
        '{{prefixFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{prefixMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
        '{{prefixFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    );

    protected static $firstNameMale = array(
        'Alois', 'Andrea', 'Anselm', 'Anton', 'Armando', 'Arnold', 'Artur',
        'Beat', 'Blaise', 'Bruno',
        'Clement',
        'Daniel', 'Dieter', 'Donato', 'Egon',
        'Elvin', 'Ernst', 'Erwin', 'Etienne',
        'Flavian', 'Franco', 'Frankl', 'Franz',
        'Guido',
        'Hannes', 'Hans-Ruedi', 'Heinz', 'Herman',
        'Juerg',
        'Klaus',
        'Linus',
        'Manfred', 'Marc', 'Marcel', 'Marius', 'Markus', 'Marlo', 'Michael',
        'Nino',
        'Olivier', 'Olli', 'Olympio', 'Orell',
        'Pablo', 'Paulo', 'Pirmin',
        'Reno', 'Reto', 'Rodolphe',
        'Stephane',
        'Timo',
        'Ueli', 'Urs',
        'Vitus',
        'Werner', 'William',
        'Xavier',
        'Zelimir', 'Zoltan'
    );

    protected static $firstNameFemale = array(
        'Ambra', 'Annina', 'Astrid',
        'Babetta', 'Bettina',
        'Chantal', 'Clarisse', 'Corinne', 'Cyrilla',
        'Dania', 'Donata',
        'Emerita', 'Erma', 'Erminia',
        'Fabia', 'Fabiana', 'Fabiola', 'Flavia', 'Florina',
        'Giona',
        'Hanneli', 'Hanni', 'Heidi', 'Helga',
        'Imelda', 'Isa',
        'Karin', 'Karine', 'Katja',
        'Ladina', 'Liana', 'Lisia', 'Lorella',
        'Maria', 'Marilena', 'Marlies', 'Melania', 'Menica', 'Michaela', 'Mirella', 'Monette',
        'Odile', 'Orsina', 'Orsola', 'Ottavia',
        'Patty', 'Pia', 'Purissimma',
        'Ramona', 'Regula', 'Renata', 'Resli', 'Roesli',
        'Sabine', 'Silva', 'Sira', 'Sonja',
        'Teresa', 'Trudi',
        'Uschi',
        'Verena', 'Vreneli', 'Vreni'
    );

    protected static $firstName = array(
        'Alois', 'Andrea', 'Anselm', 'Anton', 'Armando', 'Arnold', 'Artur',
        'Beat', 'Blaise', 'Bruno',
        'Clement',
        'Daniel', 'Dieter', 'Donato', 'Egon',
        'Elvin', 'Ernst', 'Erwin', 'Etienne',
        'Flavian', 'Franco', 'Frankl', 'Franz',
        'Guido',
        'Hannes', 'Hans-Ruedi', 'Heinz', 'Herman',
        'Juerg',
        'Klaus',
        'Linus',
        'Manfred', 'Marc', 'Marcel', 'Marius', 'Markus', 'Marlo', 'Michael',
        'Nino',
        'Olivier', 'Olli', 'Olympio', 'Orell',
        'Pablo', 'Paulo', 'Pirmin',
        'Reno', 'Reto', 'Rodolphe',
        'Stephane',
        'Timo',
        'Ueli', 'Urs',
        'Vitus',
        'Werner', 'William',
        'Xavier',
        'Zelimir', 'Zoltan',
        'Ambra', 'Annina', 'Astrid',
        'Babetta', 'Bettina',
        'Chantal', 'Clarisse', 'Corinne', 'Cyrilla',
        'Dania', 'Donata',
        'Emerita', 'Erma', 'Erminia',
        'Fabia', 'Fabiana', 'Fabiola', 'Flavia', 'Florina',
        'Giona',
        'Hanneli', 'Hanni', 'Heidi', 'Helga',
        'Imelda', 'Isa',
        'Karin', 'Karine', 'Katja',
        'Ladina', 'Liana', 'Lisia', 'Lorella',
        'Maria', 'Marilena', 'Marlies', 'Melania', 'Menica', 'Michaela', 'Mirella', 'Monette',
        'Odile', 'Orsina', 'Orsola', 'Ottavia',
        'Patty', 'Pia', 'Purissimma',
        'Ramona', 'Regula', 'Renata', 'Resli', 'Roesli',
        'Sabine', 'Silva', 'Sira', 'Sonja',
        'Teresa', 'Trudi',
        'Uschi',
        'Verena', 'Vreneli', 'Vreni'
    );

    protected static $lastName = array(
        'Abbuhl', 'Abegg', 'Abele', 'Aberle', 'Abert', 'Abplanalp', 'Accola', 'Adank', 'Aebersold', 'Aebi', 'Aegerter', 'Aerni', 'Aeschliman', 'Allaman', 'Allenbach', 'Allmendinger', 'Almendinger', 'Altermatt', 'Altherr', 'Amacher', 'Amacker', 'Amaker', 'Ambuehl', 'Ammann', 'Amrein', 'Amsler', 'Amstutz', 'Anderegg', 'Andrist', 'Andros', 'Angst', 'Ankenbauer', 'Ankeney', 'Ankeny', 'Ankney', 'Anliker', 'Annen', 'Arn', 'Arner', 'Arnet', 'Asper', 'Au',
        'Balli', 'Bally', 'Balmer', 'Balsiger', 'Balthis', 'Bandi', 'Bangerter', 'Batliner', 'Batz', 'Baumgartner', 'Beachy', 'Benziger', 'Berlinger', 'Berna', 'Berry', 'Bertschy', 'Bichsel', 'Bieri', 'Bierle', 'Billeter', 'Binggeli', 'Bircher', 'Birchler', 'Birchmeier', 'Birrer', 'Bisch', 'Bise', 'Biser', 'Bisig', 'Bitz', 'Bixel', 'Blaser', 'Blasi', 'Blatter', 'Blattner', 'Blauch', 'Blesi', 'Bless', 'Blickensderfer', 'Blosch', 'Blosser', 'Bodmer', 'Bohren', 'Boller', 'Bolliger', 'Bollinger', 'Bonny', 'Bonson', 'Booz', 'Borer', 'Boschert', 'Bossard', 'Bossart', 'Bosse', 'Bossert', 'Bosshart', 'Boxler', 'Bracher', 'Bracker', 'Braker', 'Brandenberg', 'Brandenberger', 'Brander', 'Brandis', 'Brandli', 'Breneman', 'Briel', 'Brilhart', 'Briner', 'Britsch', 'Brubacher', 'Bruder', 'Brust', 'Bruster', 'Bryner', 'Buchli', 'Bueche', 'Bullinger', 'Buol', 'Burckhalter', 'Burgi', 'Burgin', 'Burgy', 'Buri', 'Burk', 'Burkart', 'Burkhalter', 'Burri', 'Burry', 'Buser', 'Buss', 'Bussinger', 'Bussmann',
        'Caflisch', 'Camenzind', 'Carle', 'Carli', 'Caspari',
        'Danuser', 'Degen', 'Deiss', 'Denzler', 'Derrer', 'Dettwiler', 'Deubel', 'Dietiker', 'Disler', 'Doerflinger', 'Dreher', 'Droz', 'Durian', 'Durig', 'Durrenberger', 'Durtschi', 'Dury',
        'Eberle', 'Eberlein', 'Eberly', 'Ebersold', 'Ebey', 'Eblin', 'Effinger', 'Eggen', 'Eggenberger', 'Egle', 'Egli', 'Eglin', 'Egloff', 'Egly', 'Ehli', 'Ehly', 'Eigsti', 'Ellenberg', 'Ellenberger', 'Elmer', 'Elsinger', 'Emch', 'Emminger', 'Epple', 'Erb', 'Erisman', 'Eschmann', 'Ess', 'Etter', 'Evard', 'Eversole', 'Eversoll',
        'Fahr', 'Fahrner', 'Fahrni', 'Fanger', 'Fankhauser', 'Farner', 'Fasel', 'Fasnacht', 'Fassnacht', 'Favre', 'Federer', 'Federspiel', 'Fehr', 'Fehrmann', 'Feierabend', 'Felber', 'Fellman', 'Ferraris', 'Fessler', 'Fetsch', 'Fluck', 'Fluckiger', 'Flury', 'Fohn', 'Forrer', 'Fouty', 'Frech', 'Frehner', 'Frick', 'Fricke', 'Fricker', 'Friedli', 'Friedmann', 'Froehle', 'Frueh', 'Frutiger', 'Fuhrer', 'Fuhriman', 'Furrer',
        'Gabler', 'Gadient', 'Gaffner', 'Gafner', 'Gallatin', 'Galli', 'Gallman', 'Gallus', 'Galster', 'Gambetta', 'Gamma', 'Gander', 'Gantenbein', 'Gantert', 'Gantner', 'Ganz', 'Gartman', 'Gass', 'Gasser', 'Gassner', 'Gast', 'Gauch', 'Gaugler', 'Gavin', 'Gehman', 'Gehret', 'Gehrig', 'Gehring', 'Geiser', 'Geisert', 'Geisinger', 'Gensler', 'Gerber', 'Germann', 'Germond', 'Gersbach', 'Gerster', 'Gerstner', 'Gerth', 'Gertsch', 'Gessner', 'Giauque', 'Gilgen', 'Gilliand', 'Gilliard', 'Ging', 'Girtman', 'Gisel', 'Gisi', 'Gisler', 'Glanzman', 'Glaser', 'Glassey', 'Glasson', 'Glaus', 'Glauser', 'Gloor', 'Glor', 'Gnall', 'Gnann', 'Gobeli', 'Gochnauer', 'Gochnour', 'Godat', 'Goehner', 'Goepfert', 'Goetsch', 'Gohl', 'Golay', 'Goll', 'Gonthier', 'Goodpaster', 'Gott', 'Gotti', 'Gottstein', 'Graesser', 'Grasser', 'Gray', 'Greber', 'Gremminger', 'Greninger', 'Grether', 'Grieder', 'Griesel', 'Grimm', 'Grimme', 'Grogg', 'Grosjean', 'Grossen', 'Grossenbacher', 'Grumbach', 'Grunder', 'Gruner', 'Grunwald', 'Gschwind', 'Gsell', 'Gubler', 'Gubser', 'Guell', 'Guerry', 'Guggisberg', 'Guhl', 'Guidroz', 'Guldin', 'Gull', 'Guman', 'Gump', 'Gurtner', 'Gutknecht', 'Gutmann', 'Gutzwiller', 'Guyer',
        'Haab', 'Haag', 'Habegger', 'Haberle', 'Haby', 'Haener', 'Hagelin', 'Haldiman', 'Haller', 'Hane', 'Hang', 'Hanny', 'Hari', 'Harkleroad', 'Harkrader', 'Hauenstein', 'Haueter', 'Hauri', 'Haury', 'Heckethorn', 'Hediger', 'Hedinger', 'Heeb', 'Heffelfinger', 'Hefti', 'Hegg', 'Hegler', 'Heglin', 'Heidecker', 'Heitz', 'Henault', 'Henggeler', 'Henny', 'Herda', 'Hertenstein', 'Hiestand', 'Hilfiker', 'Hilty', 'Hirschi', 'Hirschy', 'Hirtzel', 'Hochstedler', 'Hochstetler', 'Hochstrasser', 'Hoesly', 'Hoffstetter', 'Holdener', 'Honsberger', 'Hopler', 'Hostetler', 'Hostetter', 'Huffstetler', 'Huggler', 'Hum', 'Hunkler', 'Hunziker', 'Hurliman',
        'Ilg', 'Imboden', 'Inabinet', 'Inabinett', 'Inabnit', 'Ingold', 'Isch', 'Iseli', 'Iselin', 'Isely',
        'Jacklin', 'Jacky', 'Jaecks', 'Jaggi', 'Jauch', 'Jenni', 'Jenny', 'Joos', 'Joost', 'Jud',
        'Kadis', 'Kaegi', 'Kalt', 'Kamer', 'Karle', 'Karlen', 'Karrer', 'Karson', 'Kaser', 'Kasser', 'Keel', 'Kehrli', 'Kellerhals', 'Kenagy', 'Kennel', 'Kensinger', 'Kerlin', 'Keusch', 'Kibler', 'Kiebler', 'Kienast', 'Kiener', 'Kihm', 'Kim', 'Kimmich', 'Kingery', 'Kinsinger', 'Kipfer', 'Klauser', 'Klausman', 'Klausner', 'Klay', 'Kleiner', 'Knecht', 'Knill', 'Knobel', 'Koelliker', 'Kohli', 'Krahenbuhl', 'Krebs', 'Krehbiel', 'Kreutzer', 'Krieg', 'Krieger', 'Kronenberg', 'Kronenberger', 'Kropf', 'Krummen', 'Kubly', 'Kuechler', 'Kueny', 'Kuenzi', 'Kuenzli', 'Kugler', 'Kult', 'Kumm', 'Kundert', 'Kundinger', 'Kuper', 'Kupp', 'Kupper', 'Kury', 'Kuser', 'Kyburz', 'Ladnier',
        'La Franchi', 'Lagman', 'Laiche', 'Landenberger', 'Landis', 'Langel', 'Lanter', 'Laqua', 'Latsha', 'Latty', 'Lauby', 'Lauper', 'Leisy', 'Letsch', 'Leupp', 'Leuthold', 'Leuty', 'Leutzinger', 'Leuzinger', 'Lichtenwalter', 'Lichti', 'Lichty', 'Liechti', 'Liechty', 'Litty', 'Lobsinger', 'Loerch', 'Loewy', 'Loosli', 'Lori', 'Lory', 'Luchsinger', 'Ludy', 'Luthi', 'Luthy',
        'Maggi', 'Marthaler', 'Marti', 'Martie', 'Marty', 'Mast', 'Matti', 'Matty', 'Merkel', 'Messerli', 'Messerly', 'Mettler', 'Michlig', 'Miesch', 'Miller', 'Mischler', 'Moix', 'Montandon', 'Montavon', 'Morand', 'Mosher', 'Mosiman', 'Mosman', 'Muetzel', 'Muggli', 'Muhleman', 'Muhr', 'Muri', 'Murner', 'Musselman', 'Mylin',
        'Naff', 'Neeser', 'Neff', 'Neidhart', 'Neiger', 'Nestle', 'Neyer', 'Niederberger', 'Niederhauser', 'Niffenegger', 'Nigg', 'Noser', 'Notter', 'Notz', 'Nuessle', 'Nufer', 'Nuffer',
        'Oberle', 'Oberlin', 'Oberly', 'Obert', 'Oblinger', 'Obrecht', 'Obrist', 'Odermatt', 'Oertli', 'Oesch', 'Oester', 'Oppliger', 'Orell', 'Orner', 'Ottinger', 'Ottmar',
        'Palley', 'Paper', 'Pappan', 'Peachey', 'Pedroni', 'Pfenninger', 'Pfister', 'Plapp', 'Polt', 'Pulfer',
        'Raber', 'Ragatz', 'Rais', 'Raisch', 'Raith', 'Ramp', 'Ramseier', 'Ramser', 'Ramseyer', 'Rassier', 'Rast', 'Rath', 'Rathgeb', 'Raths', 'Rauber', 'Rauch', 'Reber', 'Rechsteiner', 'Reichlin', 'Reichling', 'Reichmuth', 'Reif', 'Reifler', 'Reinemann', 'Reist', 'Reitnauer', 'Reller', 'Remy', 'Renfer', 'Rengel', 'Renner', 'Rentsch', 'Reutlinger', 'Rezin', 'Rhyner', 'Ribordy', 'Richner', 'Rickenbach', 'Rieben', 'Riedy', 'Rietmann', 'Rilling', 'Rim', 'Riniker', 'Ris', 'Risch', 'Risen', 'Riser', 'Rising', 'Risinger', 'Risler', 'Rissler', 'Ritzman', 'Roell', 'Roesch', 'Roethlisberger', 'Rohner', 'Rohr', 'Rohrbach', 'Rohrer', 'Rolli', 'Romer', 'Roos', 'Roser', 'Roten', 'Rubin', 'Ruch', 'Ruchti', 'Rudi', 'Rudin', 'Ruef', 'Rueff', 'Ruegsegger', 'Ruesch', 'Rufener', 'Ruh', 'Ruscher', 'Russ', 'Rust', 'Ruth', 'Rutz', 'Ryman', 'Ryser',
        'Salis', 'Sandoz', 'Saxer', 'Schaffert', 'Schaffhauser', 'Schellenberg', 'Schelling', 'Scherzer', 'Scherzinger', 'Schield', 'Schlappi', 'Schoenly', 'Schudel', 'Schuerger', 'Schurter', 'Schwallie', 'Schwoerer', 'Semon', 'Signer', 'Simmen', 'Sistrunk', 'Sollberger', 'Sprunger', 'Stager', 'Staheli', 'Stamm', 'Sterchi', 'Stocklin', 'Stoecklin', 'Struchen', 'Stuessy', 'Surbeck', 'Swartzendruber',
        'Tanner', 'Theiler', 'Thelin', 'Thoeny', 'Thoma', 'Thomann', 'Thommen', 'Tobler', 'Torian', 'Trabert', 'Trachsel', 'Treichel', 'Treichler', 'Tresch', 'Tribolet', 'Tritten', 'Trollinger', 'Troxler', 'Truby', 'Trumpy', 'Tschannen', 'Tschantz', 'Tschanz', 'Tschappat', 'Tschoepe', 'Tschopp',
        'Ummel', 'Utzinger',
        'Vetsch', 'Voegeli', 'Voirol', 'Von Allmen', 'Von Arx', 'Von Gunten',
        'Wager', 'Walliser', 'Walp', 'Weder', 'Wehrli', 'Wehrly', 'Weltner', 'Welty', 'Wenzinger', 'Weyker', 'Wiget', 'Willan', 'Winzenried', 'Wirthlin', 'Wurgler', 'Wyss',
        'Zarn', 'Zarr', 'Zaugg', 'Zbinden', 'Zehren', 'Zercher', 'Zesiger', 'Zimmerli', 'Zobrist', 'Zopfi', 'Zoss', 'Zuber', 'Zug', 'Zutter', 'Zwahlen', 'Zwicky', 'Zwiefelhofer'
    );

    protected static $prefixMale = array('Herr', 'Dr.', 'Ing.', 'Dipl.-Ing.', 'Prof.', 'Univ.Prof.');
    protected static $prefixFemale = array('Frau', 'Dr.', 'Ing.', 'Dipl.-Ing.', 'Prof.', 'Univ.Prof.');

    protected static $suffix = array('B.Sc.', 'B.A.', 'B.Eng.', 'MBA.');

    /**
     * @example 'Mrs.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefixMale);
    }

    /**
     * @example 'Argus'
     */
    public static function firstNameMale()
    {
        return static::randomElement(static::$firstNameMale);
    }

    /**
     * @example 'Magret'
     */
    public static function firstNameFemale()
    {
        return static::randomElement(static::$firstNameFemale);
    }

    /**
     * @example 'Herr'
     */
    public static function prefixMale()
    {
        return static::randomElement(static::$prefixMale);
    }

    /**
     * @example 'Frau'
     */
    public static function prefixFemale()
    {
        return static::randomElement(static::$prefixFemale);
    }

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
