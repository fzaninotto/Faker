<?php

namespace Faker\Provider\da_DK;

/**
 * @link http://www.danskernesnavne.navneforskning.ku.dk/Personnavne.asp
 *
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Person extends \Faker\Provider\Person
{
    /**
     * @var array Danish person name formats.
     */
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{middleName}} {{lastName}}',
        '{{firstName}} {{middleName}} {{lastName}}',
        '{{firstName}} {{middleName}} {{lastName}}',
        '{{firstName}} {{middleName}} {{lastName}}',
        '{{firstName}} {{middleName}}-{{middleName}} {{lastName}}',
        '{{firstName}} {{middleName}} {{middleName}}-{{lastName}}',
    );

    /**
     * @var array Danish first names.
     */
    protected static $firstName = array(
        'Marie', 'Peter', 'Christian', 'Erik', 'Anna', 'Jens', 'Hans', 'Margrethe', 'Niels', 'Jørgen', 'Karen', 'Kirstine',
        'Kristian', 'Kirsten', 'Johanne', 'Henrik', 'Poul', 'Elisabeth', 'Svend', 'Søren', 'Aage', 'Michael', 'Lars', 'Else',
        'Ole', 'Anne', 'Martin', 'Inger', 'Anders', 'Mette', 'Thomas', 'Louise', 'Johannes', 'Maria', 'Ellen', 'Knud', 'Kristine',
        'Hanne', 'Sofie', 'Jan', 'Emil', 'John', 'Inge', 'Bent', 'Karl', 'Carl', 'Henning', 'Per', 'Susanne', 'Frederik', 'Rasmus',
        'Morten', 'Helle', 'Andreas', 'Jesper', 'Grethe', 'Arne', 'Marianne', 'Kim', 'Lene', 'Gerda', 'Børge', 'Peder', 'Birthe',
        'Charlotte', 'Bente', 'Birgit', 'Tove', 'Flemming', 'Edith', 'Ruth', 'Kaj', 'Mads', 'Kathrine', 'Pia', 'Lone', 'Christine',
        'Camilla', 'Emilie', 'Leif', 'Jytte', 'Jette', 'Torben', 'Kurt', 'Birgitte', 'Mogens', 'Helene', 'Bodil', 'Julie', 'Steen',
        'Jacob', 'Henry', 'Lis', 'Ove', 'Katrine', 'Lise', 'Ulla', 'Bjarne', 'Finn', 'Claus', 'Gitte', 'Ingeborg', 'Eva', 'Tina',
        'Preben', 'Bo', 'Gudrun', 'Irene', 'Otto', 'Mikkel', 'Cecilie', 'Allan', 'Carsten', 'Ane', 'Christina', 'Vibeke', 'Ingrid',
        'Jakob', 'Marius', 'Johan', 'Brian', 'Annette', 'Ida', 'Egon', 'Rikke', 'Holger', 'Emma', 'Alfred', 'Laura', 'Mathias',
        'Viggo', 'Daniel', 'Jonas', 'Simon', 'Karin', 'Valdemar', 'Agnes', 'Aksel', 'Erna', 'Gunnar', 'Mary', 'Pernille',
        'Mathilde', 'Anette', 'Aase', 'Kasper', 'Lykke', 'Dorthe', 'Lisbeth', 'Astrid', 'Helga', 'Verner', 'Esther', 'Vilhelm',
        'Frank', 'Heidi', 'Signe', 'Georg', 'Line', 'Inga', 'Amalie', 'Jensine', 'Henriette', 'Dorthea', 'Helge', 'Kenneth',
        'Erling', 'Villy', 'Elise', 'Merete', 'Alice', 'Magnus', 'Jørn', 'Lasse', 'Ib', 'Ella', 'Anton', 'Axel', 'Sonja', 'Laurits',
        'Rigmor', 'Hansine', 'Karoline', 'Robert', 'Maren', 'Lilly', 'Margit', 'Alexander', 'Elly', 'Jenny', 'Tage', 'Harry',
        'Vagn', 'Martha', 'Harald', 'Dorte', 'Valborg', 'Olga', 'Ejner', 'Caroline', 'Karina', 'Frederikke', 'Trine', 'Kjeld',
        'Anni', 'Rita', 'Ernst', 'Benny', 'Jane', 'Ejnar', 'Malene', 'Maja', 'Dennis', 'Elna', 'Sara', 'Nanna', 'Agnete', 'Andrea',
        'Linda', 'Marinus', 'Tommy', 'Bjørn', 'René', 'Stine', 'Dagmar', 'Nikolaj', 'Anker', 'Dagny', 'Karsten', 'Tobias', 'Nina',
        'Asta', 'Nielsine', 'Palle', 'Sigrid', 'Mona', 'Gert', 'Johnny', 'Cathrine', 'Anja', 'Solveig', 'Klaus', 'Casper',
        'Nicolai', 'Oliver', 'Sebastian', 'Jonna', 'Lillian', 'Frede', 'Rene', 'Leo', 'Anita', 'Jeppe', 'Thorvald', 'Grete',
        'Albert', 'Ebba', 'Julius', 'Lotte', 'Ester', 'Gustav', 'Richard', 'Mia', 'William', 'Rosa', 'Viola', 'David', 'Dan',
        'Jeanette', 'Henny', 'Benjamin', 'Mikael', 'Annelise', 'Britta', 'Petra', 'August', 'Sarah', 'Gurli', 'Birte', 'Steffen',
        'Stig', 'Vera', 'Ann', 'Edvard', 'Oluf', 'Ulrik', 'Patrick', 'Sophie', 'Vilhelmine', 'Tom', 'Tine', 'Agnethe', 'Laila',
        'Joan', 'Connie', 'Michelle', 'Ketty', 'Karla', 'Augusta', 'Kai', 'Orla', 'Alma', 'Petrea', 'Evald', 'Victor', 'Ali',
        'Betty', 'Oda', 'Kristina', 'Ejvind', 'Alex', 'Edel', 'Ragnhild', 'Ivan', 'Ditte', 'Bettina', 'Willy', 'Paul', 'Rune',
        'Mark', 'Magdalene', 'Annie', 'Clara', 'Lisa', 'Eleonora', 'Keld', 'Kristen', 'Theodor', 'Doris', 'Lilian', 'Ludvig',
        'Simone', 'Mie', 'Lena', 'Asger', 'Elin', 'Christoffer', 'Olivia', 'Christen', 'Magda', 'Oskar', 'Berit', 'Carla',
        'Thorkild', 'Charles', 'Heinrich', 'Max', 'Thora', 'Eigil', 'Josefine', 'Frida', 'Yvonne', 'Tanja', 'Stefan', 'Vivi',
        'Mariane', 'Herman', 'Kamilla', 'Emmy', 'Betina', 'Gunhild', 'Elsebeth', 'Bernhard', 'Sigurd', 'Sanne', 'Margrete',
        'Anny', 'Nicklas', 'Birger', 'Elvira', 'Randi', 'Viktor', 'Frode', 'Louis', 'Emanuel', 'Lydia', 'Klara', 'Minna', 'Bruno',
        'Philip', 'Ingemann', 'Marcus', 'Susan', 'Amanda', 'Carlo', 'Martine', 'Rasmine', 'Lea', 'Olaf', 'Janne', 'Tonny', 'Conny',
        'Oline', 'Lærke', 'Troels', 'Gunner', 'Hedvig', 'Sven', 'Carina', 'Jannie', 'Kristoffer', 'Sørine', 'Lilli', 'Freja',
        'Kristiane', 'Nicoline', 'Bertha', 'Meta', 'Christiane', 'Kent', 'Arnold', 'Victoria', 'Kamma', 'Gertrud', 'Sofus',
        'Mohammad', 'Elisa', 'Harriet', 'Nicolaj', 'Ingelise', 'Adolf', 'Britt', 'Kate', 'Nikoline', 'Lissi', 'Petrine', 'Sandra',
        'Ebbe', 'Herdis', 'Helena', 'Herluf', 'Hugo', 'Freddy', 'Irma', 'Rudolf', 'Liselotte', 'Arthur', 'Isabella', 'Jørgine',
        'Mike', 'Eli', 'Oscar', 'Janni', 'Katja', 'Iben', 'Diana', 'Josephine', 'Helen', 'Werner', 'Lucas', 'Juliane', 'Uffe',
        'Hilda', 'Jes', 'Ahmad', 'Winnie', 'Jimmy', 'Frits', 'Lynge', 'Jonathan', 'Marlene', 'Sten', 'Laurids', 'Mohamed', 'Helmer',
        'Esben', 'Anne-Marie', 'Villiam', 'Einar', 'Vita', 'Poula', 'Adam', 'Thor', 'Ninna', 'Hartvig', 'Wilhelm', 'Asbjørn',
        'Therese', 'Thi', 'Nadia', 'Helmuth', 'Majbritt', 'Sigfred', 'Jon', 'Eline', 'Krista', 'Sune', 'Anine', 'Maiken', 'Thea',
        'Juel', 'Bendt', 'Hermann', 'Anne-Mette', 'Kaja', 'Iris', 'Richardt', 'Thyra', 'Elias', 'Metha', 'Gerhard', 'Povl',
        'Bjarke', 'Joachim', 'Martinus', 'Lukas', 'Ingvard', 'Tim', 'Solvejg', 'Pouline', 'Hjalmar', 'Walther', 'Hassan', 'Ina',
        'Sofia', 'Erland', 'Laurine', 'Lauritz', 'Ejgil', 'Unavngivet', 'Ellinor', 'Ejler', 'Liv', 'Kevin', 'Christa', 'Marc',
        'Annalise', 'Elsa', 'Lizzie', 'Ahmed', 'Nils', 'Ferdinand', 'Ilse', 'Hanna', 'Markus', 'Niklas', 'Edmund', 'Alfrida',
        'Folmer', 'Rebecca', 'Jul', 'Christopher', 'Lisbet', 'Mille', 'Theodora', 'Nancy', 'Benedikte', 'Osvald', 'Fritz', 'Vang',
        'Alberte', 'Kresten', 'Nick', 'Vivian', 'Annika', 'Yrsa', 'Rose', 'Åge', 'Hardy', 'Ibrahim', 'Alexandra', 'Sabrina',
        'Mohamad', 'Sine', 'Inge-Lise', 'Anne-Lise', 'Paula', 'Bolette', 'Sidsel', 'Viktoria', 'Jack', 'Alvilda', 'Maj-Britt',
        'Ingolf', 'Ragna', 'Malthe', 'Lennart', 'Chris', 'Olav', 'Severin', 'Alf', 'Lissy', 'Maj', 'Jimmi', 'Monica', 'Selma',
        'Johanna', 'Vagner', 'Elinor', 'Merethe', 'Rebekka', 'Josef', 'Pauline', 'Bitten', 'Agathe', 'Heine', 'Conni', 'Karlo',
        'Rolf', 'Stephanie', 'Matilde', 'Chr', 'Jeanne', 'Evelyn', 'Dora', 'Mai', 'Leon',
    );

    /**
     * @var array Danish middle names.
     */
    protected static $middleName = array(
        'Møller', 'Lund', 'Holm', 'Jensen', 'Juul', 'Nielsen', 'Kjær', 'Hansen', 'Skov', 'Østergaard', 'Vestergaard',
        'Nørgaard', 'Dahl', 'Bach', 'Friis', 'Søndergaard', 'Andersen', 'Bech', 'Pedersen', 'Bruun', 'Nygaard', 'Winther',
        'Bang', 'Krogh', 'Schmidt', 'Christensen', 'Hedegaard', 'Toft', 'Damgaard', 'Holst', 'Sørensen', 'Juhl', 'Munk',
        'Skovgaard', 'Søgaard', 'Aagaard', 'Berg', 'Dam', 'Petersen', 'Lind', 'Overgaard', 'Brandt', 'Larsen', 'Bak', 'Schou',
        'Vinther', 'Bjerregaard', 'Riis', 'Bundgaard', 'Kruse', 'Mølgaard', 'Hjorth', 'Ravn', 'Madsen', 'Rasmussen',
        'Jørgensen', 'Kristensen', 'Bonde', 'Bay', 'Hougaard', 'Dalsgaard', 'Kjærgaard', 'Haugaard', 'Munch', 'Bjerre', 'Due',
        'Sloth', 'Leth', 'Kofoed', 'Thomsen', 'Kragh', 'Højgaard', 'Dalgaard', 'Hjort', 'Kirkegaard', 'Bøgh', 'Beck', 'Nissen',
        'Rask', 'Høj', 'Brix', 'Storm', 'Buch', 'Bisgaard', 'Birch', 'Gade', 'Kjærsgaard', 'Hald', 'Lindberg', 'Høgh', 'Falk',
        'Koch', 'Thorup', 'Borup', 'Knudsen', 'Vedel', 'Poulsen', 'Bøgelund', 'Juel', 'Frost', 'Hvid', 'Bjerg', 'Bæk', 'Elkjær',
        'Hartmann', 'Kirk', 'Sand', 'Sommer', 'Skou', 'Nedergaard', 'Meldgaard', 'Brink', 'Lindegaard', 'Fischer', 'Rye',
        'Hoffmann', 'Daugaard', 'Gram', 'Johansen', 'Meyer', 'Schultz', 'Fogh', 'Bloch', 'Lundgaard', 'Brøndum', 'Jessen',
        'Busk', 'Holmgaard', 'Lindholm', 'Krog', 'Egelund', 'Engelbrecht', 'Buus', 'Korsgaard', 'Ellegaard', 'Tang', 'Steen',
        'Kvist', 'Olsen', 'Nørregaard', 'Fuglsang', 'Wulff', 'Damsgaard', 'Hauge', 'Sonne', 'Skytte', 'Brun', 'Kronborg',
        'Abildgaard', 'Fabricius', 'Bille', 'Skaarup', 'Rahbek', 'Borg', 'Torp', 'Klitgaard', 'Nørskov', 'Greve', 'Hviid',
        'Mørch', 'Buhl', 'Rohde', 'Mørk', 'Vendelbo', 'Bjørn', 'Laursen', 'Egede', 'Rytter', 'Lehmann', 'Guldberg', 'Rosendahl',
        'Krarup', 'Krogsgaard', 'Westergaard', 'Rosendal', 'Fisker', 'Højer', 'Rosenberg', 'Svane', 'Storgaard', 'Pihl',
        'Mohamed', 'Bülow', 'Birk', 'Hammer', 'Bro', 'Kaas', 'Clausen', 'Nymann', 'Egholm', 'Ingemann', 'Haahr', 'Olesen',
        'Nøhr', 'Brinch', 'Bjerring', 'Christiansen', 'Schrøder', 'Guldager', 'Skjødt', 'Højlund', 'Ørum', 'Weber',
        'Bødker', 'Bruhn', 'Stampe', 'Astrup', 'Schack', 'Mikkelsen', 'Høyer', 'Husted', 'Skriver', 'Lindgaard', 'Yde',
        'Sylvest', 'Lykkegaard', 'Ploug', 'Gammelgaard', 'Pilgaard', 'Brogaard', 'Degn', 'Kaae', 'Kofod', 'Grønbæk',
        'Lundsgaard', 'Bagge', 'Lyng', 'Rømer', 'Kjeldgaard', 'Hovgaard', 'Groth', 'Hyldgaard', 'Ladefoged', 'Jacobsen',
        'Linde', 'Lange', 'Stokholm', 'Bredahl', 'Hein', 'Mose', 'Bækgaard', 'Sandberg', 'Klarskov', 'Kamp', 'Green',
        'Iversen', 'Riber', 'Smedegaard', 'Nyholm', 'Vad', 'Balle', 'Kjeldsen', 'Strøm', 'Borch', 'Lerche', 'Grønlund',
        'Vestergård', 'Østergård', 'Nyborg', 'Qvist', 'Damkjær', 'Kold', 'Sønderskov', 'Bank',
    );

    /**
     * @var array Danish last names.
     */
    protected static $lastName = array(
        'Jensen', 'Nielsen', 'Hansen', 'Pedersen', 'Andersen', 'Christensen', 'Larsen', 'Sørensen', 'Rasmussen', 'Petersen',
        'Jørgensen', 'Madsen', 'Kristensen', 'Olsen', 'Christiansen', 'Thomsen', 'Poulsen', 'Johansen', 'Knudsen', 'Mortensen',
        'Møller', 'Jacobsen', 'Jakobsen', 'Olesen', 'Frederiksen', 'Mikkelsen', 'Henriksen', 'Laursen', 'Lund', 'Schmidt',
        'Eriksen', 'Holm', 'Kristiansen', 'Clausen', 'Simonsen', 'Svendsen', 'Andreasen', 'Iversen', 'Jeppesen', 'Mogensen',
        'Jespersen', 'Nissen', 'Lauridsen', 'Frandsen', 'Østergaard', 'Jepsen', 'Kjær', 'Carlsen', 'Vestergaard', 'Jessen',
        'Nørgaard', 'Dahl', 'Christoffersen', 'Skov', 'Søndergaard', 'Bertelsen', 'Bruun', 'Lassen', 'Bach', 'Gregersen',
        'Friis', 'Johnsen', 'Steffensen', 'Kjeldsen', 'Bech', 'Krogh', 'Lauritsen', 'Danielsen', 'Mathiesen', 'Andresen',
        'Brandt', 'Winther', 'Toft', 'Ravn', 'Mathiasen', 'Dam', 'Holst', 'Nilsson', 'Lind', 'Berg', 'Schou', 'Overgaard',
        'Kristoffersen', 'Schultz', 'Klausen', 'Karlsen', 'Paulsen', 'Hermansen', 'Thorsen', 'Koch', 'Thygesen', 'Bak', 'Kruse',
        'Bang', 'Juhl', 'Davidsen', 'Berthelsen', 'Nygaard', 'Lorentzen', 'Villadsen', 'Lorenzen', 'Damgaard', 'Bjerregaard',
        'Lange', 'Hedegaard', 'Bendtsen', 'Lauritzen', 'Svensson', 'Justesen', 'Juul', 'Hald', 'Beck', 'Kofoed', 'Søgaard',
        'Meyer', 'Kjærgaard', 'Riis', 'Johannsen', 'Carstensen', 'Bonde', 'Ibsen', 'Fischer', 'Andersson', 'Bundgaard',
        'Johannesen', 'Eskildsen', 'Hemmingsen', 'Andreassen', 'Thomassen', 'Schrøder', 'Persson', 'Hjorth', 'Enevoldsen',
        'Nguyen', 'Henningsen', 'Jønsson', 'Olsson', 'Asmussen', 'Michelsen', 'Vinther', 'Markussen', 'Kragh', 'Thøgersen',
        'Johansson', 'Dalsgaard', 'Gade', 'Bjerre', 'Ali', 'Laustsen', 'Buch', 'Ludvigsen', 'Hougaard', 'Kirkegaard', 'Marcussen',
        'Mølgaard', 'Ipsen', 'Sommer', 'Ottosen', 'Müller', 'Krog', 'Hoffmann', 'Clemmensen', 'Nikolajsen', 'Brodersen',
        'Therkildsen', 'Leth', 'Michaelsen', 'Graversen', 'Frost', 'Dalgaard', 'Albertsen', 'Laugesen', 'Due', 'Ebbesen',
        'Munch', 'Svenningsen', 'Ottesen', 'Fisker', 'Albrechtsen', 'Axelsen', 'Erichsen', 'Sloth', 'Bentsen', 'Westergaard',
        'Bisgaard', 'Nicolaisen', 'Magnussen', 'Thuesen', 'Povlsen', 'Thorup', 'Høj', 'Bentzen', 'Johannessen', 'Vilhelmsen',
        'Isaksen', 'Bendixen', 'Ovesen', 'Villumsen', 'Lindberg', 'Thomasen', 'Kjærsgaard', 'Buhl', 'Kofod', 'Ahmed', 'Smith',
        'Storm', 'Christophersen', 'Bruhn', 'Matthiesen', 'Wagner', 'Bjerg', 'Gram', 'Nedergaard', 'Dinesen', 'Mouritsen',
        'Boesen', 'Borup', 'Abrahamsen', 'Wulff', 'Gravesen', 'Rask', 'Pallesen', 'Greve', 'Korsgaard', 'Haugaard', 'Josefsen',
        'Bæk', 'Espersen', 'Thrane', 'Mørch', 'Frank', 'Lynge', 'Rohde', 'Larsson', 'Hammer', 'Torp', 'Sonne', 'Boysen', 'Bay',
        'Pihl', 'Fabricius', 'Høyer', 'Birch', 'Skou', 'Kirk', 'Antonsen', 'Høgh', 'Damsgaard', 'Dall', 'Truelsen', 'Daugaard',
        'Fuglsang', 'Martinsen', 'Therkelsen', 'Jansen', 'Karlsson', 'Caspersen', 'Steen', 'Callesen', 'Balle', 'Bloch', 'Smidt',
        'Rahbek', 'Hjort', 'Bjørn', 'Skaarup', 'Sand', 'Storgaard', 'Willumsen', 'Busk', 'Hartmann', 'Ladefoged', 'Skovgaard',
        'Philipsen', 'Damm', 'Haagensen', 'Hviid', 'Duus', 'Kvist', 'Adamsen', 'Mathiassen', 'Degn', 'Borg', 'Brix', 'Troelsen',
        'Ditlevsen', 'Brøndum', 'Svane', 'Mohamed', 'Birk', 'Brink', 'Hassan', 'Vester', 'Elkjær', 'Lykke', 'Nørregaard',
        'Meldgaard', 'Mørk', 'Hvid', 'Abildgaard', 'Nicolajsen', 'Bengtsson', 'Stokholm', 'Ahmad', 'Wind', 'Rømer', 'Gundersen',
        'Carlsson', 'Grøn', 'Khan', 'Skytte', 'Bagger', 'Hendriksen', 'Rosenberg', 'Jonassen', 'Severinsen', 'Jürgensen',
        'Boisen', 'Groth', 'Bager', 'Fogh', 'Hussain', 'Samuelsen', 'Pilgaard', 'Bødker', 'Dideriksen', 'Brogaard', 'Lundberg',
        'Hansson', 'Schwartz', 'Tran', 'Skriver', 'Klitgaard', 'Hauge', 'Højgaard', 'Qvist', 'Voss', 'Strøm', 'Wolff', 'Krarup',
        'Green', 'Odgaard', 'Tønnesen', 'Blom', 'Gammelgaard', 'Jæger', 'Kramer', 'Astrup', 'Würtz', 'Lehmann', 'Koefoed',
        'Skøtt', 'Lundsgaard', 'Bøgh', 'Vang', 'Martinussen', 'Sandberg', 'Weber', 'Holmgaard', 'Bidstrup', 'Meier', 'Drejer',
        'Schneider', 'Joensen', 'Dupont', 'Lorentsen', 'Bro', 'Bagge', 'Terkelsen', 'Kaspersen', 'Keller', 'Eliasen', 'Lyberth',
        'Husted', 'Mouritzen', 'Krag', 'Kragelund', 'Nørskov', 'Vad', 'Jochumsen', 'Hein', 'Krogsgaard', 'Kaas', 'Tolstrup',
        'Ernst', 'Hermann', 'Børgesen', 'Skjødt', 'Holt', 'Buus', 'Gotfredsen', 'Kjeldgaard', 'Broberg', 'Roed', 'Sivertsen',
        'Bergmann', 'Bjerrum', 'Petersson', 'Smed', 'Jeremiassen', 'Nyborg', 'Borch', 'Foged', 'Terp', 'Mark', 'Busch',
        'Lundgaard', 'Boye', 'Yde', 'Hinrichsen', 'Matzen', 'Esbensen', 'Hertz', 'Westh', 'Holmberg', 'Geertsen', 'Raun',
        'Aagaard', 'Kock', 'Falk', 'Munk',
    );

    /**
     * Randomly return a danish name.
     *
     * @return string
     */
    public static function middleName()
    {
        return static::randomElement(static::$middleName);
    }

    /**
     * Randomly return a danish CPR number (Personnal identification number) format.
     *
     * @link http://cpr.dk/cpr/site.aspx?p=16
     * @link http://en.wikipedia.org/wiki/Personal_identification_number_%28Denmark%29
     *
     * @return string
     */
    public static function cpr()
    {
        $birthdate = new \DateTime('@' . mt_rand(0, time()));

        return sprintf('%s-%s', $birthdate->format('dmy'), static::numerify('%###'));
    }
}
