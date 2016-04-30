<?php

namespace Faker\Provider\lb_LU;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}-{{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}-{{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Alain', 'Albert', 'Alex', 'André', 'Andy', 'Armand', 'Arsène', 'Ben', 'Bernard', 'Bob', 'Bruno', 'Carlo', 'Cédric', 'Charel', 'Christian', 'Christophe', 'Claude', 'Daniel', 'David', 'David', 'Denis', 'Eric', 'Ernest', 'Fabien',
        'Fabrice', 'Félix', 'Fernand', 'François', 'Frank', 'Frédéric', 'Gabriel', 'Georges', 'Gilbert', 'Gilles', 'Guy', 'Henri', 'Jacques', 'Jang', 'Jean-Claude', 'Jean-Luc', 'Jean-Marie', 'Jeannot', 'Jeff', 'Jérôme', 'Jo', 'Joé', 'Joel',
        'John', 'Jos', 'José', 'Jules', 'Julien', 'Laurent', 'Léo', 'Léon', 'Lex', 'Louis', 'Luc', 'Luca', 'Lucien', 'Manuel', 'Marc', 'Marcel', 'Marco', 'Mario', 'Mathias', 'Maurice', 'Max', 'Michel', 'Mike', 'Nicolas', 'Noah', 'Norbert',
        'Pascal', 'Patrick', 'Paul', 'Pierre', 'Raoul', 'Raphael', 'Raymond', 'René', 'Richard', 'Robert', 'Roger', 'Roland', 'Romain', 'Ronny', 'Sacha', 'Sam', 'Sammy', 'Sascha', 'Sébastien', 'Serge', 'Sergio', 'Stéphane', 'Steve', 'Sven',
        'Sylvio', 'Thierry', 'Thomas', 'Tim', 'Tom', 'Tom', 'Victor', 'Vincent', 'Xavier', 'Yann', 'Yannick', 'Yves',
    );

    protected static $firstNameFemale = array(
        'Alice', 'Aline', 'Amy', 'Andrée', 'Angèle', 'Anne', 'Annick', 'Arlette', 'Carine', 'Carole', 'Caroline', 'Chantal', 'Charlotte', 'Christiane', 'Christine', 'Claire', 'Claudine', 'Corinne', 'Danielle', 'Denise', 'Diane', 'Edmée',
        'Eliane', 'Elisa', 'Elisabeth', 'Emilie', 'Emilie', 'Emma', 'Fabienne', 'Fernande', 'Florence', 'Françine', 'Françoise', 'Ginette', 'Helène', 'Irène', 'Isabelle', 'Jessica', 'Joëlle', 'Josée', 'Josette', 'Julie', 'Juliette',
        'Justine', 'Karine', 'Lara', 'Laure', 'Laurence', 'Léa', 'Léonie', 'Liliane', 'Louise', 'Lucie', 'Lydie', 'Lynn', 'Madeleine', 'Marcelle', 'Marianne', 'Marie', 'Marie-Jeanne', 'Marie-Paule', 'Mariette', 'Martine', 'Maryse',
        'Michèle', 'Michèlle', 'Mireille', 'Monique', 'Myriam', 'Nadine', 'Nathalie', 'Nelly', 'Nicole', 'Pascale', 'Patricia', 'Régine', 'Renée', 'Romaine', 'Rosa', 'Sandra', 'Sandy', 'Sarah', 'Simone', 'Sonja', 'Sophie', 'Stéphanie',
        'Sylvie', 'Tanja', 'Tessy', 'Thérèse', 'Valérie', 'Véronique', 'Virgine', 'Viviane', 'Yolande', 'Yvette', 'Yvonne', 'Zoé',
    );

    protected static $lastName = array(
        'Ackermann', 'Adam', 'Adrovic', 'Almeida', 'Altmann', 'Alves', 'Andrâž', 'Anen', 'Antony', 'Arend', 'Arendt', 'Bach', 'Back', 'Backes', 'Barthel', 'Bastian', 'Bauer', 'Bauler', 'Baum', 'Bausch', 'Baustert', 'Beck', 'Beckius',
        'Beffort', 'Bemtgen', 'Berchem', 'Berg', 'Berger', 'Bernard', 'Berscheid', 'Bertemes', 'Bertrand', 'Besch', 'Bettendorff', 'Biever', 'Binsfeld', 'Bintener', 'Bintner', 'Bintz', 'Biren', 'Bisdorff', 'Bisenius', 'Bissen', 'Biver',
        'Biwer', 'Bley', 'Block', 'Blum', 'Bock', 'Boever', 'Bohler', 'Bosseler', 'Bour', 'Bourg', 'Brandenburger', 'Bredimus', 'Bremer', 'Breuer', 'Brosius', 'Bruch', 'Bruck', 'Buchler', 'Burg', 'Cardoso', 'Carvalho', 'Claude', 'Clees',
        'Clemens', 'Clement', 'Clesen', 'Cloos', 'Colbach', 'Colling', 'Conrad', 'Conrardy', 'Conter', 'Conzemius', 'Correia', 'Da costa', 'Da cruz', 'Dahm', 'Daleiden', 'De jesus', 'De oliveira', 'De sousa', 'Decker', 'Demuth', 'Dias',
        'Didier', 'Dimmer', 'Dondelinger', 'Donven', 'Dos santos', 'Dostert', 'Duarte', 'Duhr', 'Dumont', 'Dupont', 'Ecker', 'Eicher', 'Eiffes', 'Eischen', 'Elsen', 'Engel', 'Ensch', 'Entringer', 'Ernster', 'Ernzer', 'Erpelding', 'Esch',
        'Even', 'Ewen', 'Ewert', 'Fandel', 'Fautsch', 'Federspiel', 'Feidt', 'Feiereisen', 'Feller', 'Felten', 'Feltes', 'Feltgen', 'Fernandes', 'Ferreira', 'Feyder', 'Feyereisen', 'Fisch', 'Fischbach', 'Fischer', 'Flick', 'Fonck',
        'Franck', 'Francois', 'Frank', 'Frantz', 'Frantzen', 'Franzen', 'Freres', 'Frieden', 'Friederich', 'Friedrich', 'Frisch', 'Frising', 'Fritsch', 'Funck', 'Gaasch', 'Gales', 'Garcia', 'Gaspar', 'Geiben', 'Geisen', 'Gelhausen',
        'Gengler', 'Georges', 'Gerard', 'Gilbertz', 'Gillen', 'Gilson', 'Glesener', 'Glod', 'Gloden', 'Glodt', 'Godart', 'Goebel', 'Goerens', 'Goetzinger', 'Gomes', 'Goncalves', 'Graas', 'Graf', 'Greisch', 'Grethen', 'Grun', 'Haag', 'Haan',
        'Haas', 'Hahn', 'Halsdorf', 'Hamen', 'Hames', 'Hary', 'Haupert', 'Heck', 'Heiderscheid', 'Hein', 'Heinen', 'Heintz', 'Heinz', 'Hellers', 'Hemmen', 'Hemmer', 'Hengen', 'Hentges', 'Hermann', 'Hermes', 'Heuertz', 'Hilbert', 'Hilger',
        'Hirtz', 'Hoss', 'Hubert', 'Huberty', 'Hurt', 'Huss', 'Jacobs', 'Jacoby', 'Jaeger', 'Jans', 'Jeitz', 'Jemming', 'Johanns', 'Jost', 'Jung', 'Jungers', 'Junker', 'Kaiser', 'Kalmes', 'Karier', 'Kasel', 'Kass', 'Kauffmann', 'Kaufmann',
        'Keiser', 'Keller', 'Kemp', 'Kerger', 'Kerschen', 'Kettel', 'Kiefer', 'Kill', 'Kinnen', 'Kirchen', 'Klopp', 'Kneip', 'Knepper', 'Koch', 'Koenig', 'Kohl', 'Kohn', 'Kohnen', 'Konsbruck', 'Koob', 'Koster', 'Krack', 'Kraemer', 'Kraus',
        'Krecké', 'Kreins', 'Kuffer', 'Kugener', 'Kuhn', 'Lambert', 'Lamberty', 'Lamborelle', 'Lamesch', 'Lang', 'Lanners', 'Lauer', 'Laux', 'Leider', 'Lemmer', 'Ley', 'Leyder', 'Linden', 'Linster', 'Lippert', 'Loos', 'Lopes', 'Lorang',
        'Losch', 'Louis', 'Lucas', 'Ludovicy', 'Ludwig', 'Lutgen', 'Lux', 'Maas', 'Machado', 'Mack', 'Mackel', 'Maes', 'Majeres', 'Malget', 'Manderscheid', 'Mangen', 'Mannes', 'Marnach', 'Marques', 'Martin', 'Martins', 'Mathias', 'Mathieu',
        'May', 'Mayer', 'Medernach', 'Medinger', 'Meiers', 'Meis', 'Meisch', 'Melchior', 'Mendes', 'Mergen', 'Mersch', 'Mertens', 'Metz', 'Metzler', 'Michel', 'Michels', 'Miller', 'Moes', 'Monteiro', 'Moreira', 'Mores', 'Moris', 'Mousel',
        'Neu', 'Neuman', 'Neumann', 'Ney', 'Nickels', 'Nicolas', 'Nicolay', 'Nilles', 'Noel', 'Noesen', 'Nosbusch', 'Nothum', 'Oberweis', 'Oestreicher', 'Olinger', 'Oliveira', 'Origer', 'Oswald', 'Paulus', 'Pauly', 'Peffer', 'Peiffer',
        'Pereira', 'Pesch', 'Peters', 'Petit', 'Petry', 'Philippe', 'Pinto', 'Pletschette', 'Poos', 'Prim', 'Probst', 'Pundel', 'Putz', 'Quintus', 'Raach', 'Rausch', 'Rech', 'Reckinger', 'Reichling', 'Reiff', 'Reiffers', 'Reiland',
        'Reinard', 'Reinert', 'Reis', 'Reiser', 'Reiter', 'Reuland', 'Ribeiro', 'Richard', 'Rippinger', 'Risch', 'Rischard', 'Robert', 'Rodesch', 'Roeder', 'Rollinger', 'Rommes', 'Rossi', 'Roth', 'Ruppert', 'Sabotic', 'Sadler', 'Santos',
        'Sassel', 'Sauber', 'Schaack', 'Schaaf', 'Schaefer', 'Schaeffer', 'Schanck', 'Schanen', 'Schank', 'Schartz', 'Schaul', 'Schaus', 'Scheer', 'Scheffen', 'Scheuer', 'Scheuren', 'Schilling', 'Schintgen', 'Schleich', 'Schlesser',
        'Schlim', 'Schmidt', 'Schmitt', 'Schockmel', 'Scholer', 'Schon', 'Schons', 'Schreiber', 'Schreiner', 'Schuh', 'Schuler', 'Schuller', 'Schummer', 'Schuster', 'Schutz', 'Schwartz', 'Schweich', 'Schweitzer', 'Seil', 'Seiler', 'Serres',
        'Seyler', 'Siebenaler', 'Silva', 'Simoes', 'Sinner', 'Soares', 'Stammet', 'Staudt', 'Steffes', 'Steichen', 'Stein', 'Steinbach', 'Steinmetz', 'Stelmes', 'Stemper', 'Stephany', 'Stoffel', 'Stoltz', 'Stoos', 'Strasser', 'Straus',
        'Streff', 'Sunnen', 'Tavares', 'Teixeira', 'Thein', 'Thiel', 'Thielen', 'Thies', 'Thilmany', 'Thimmesch', 'Thinnes', 'Thiry', 'Tholl', 'Thoma', 'Thomas', 'Thome', 'Thommes', 'Thoss', 'Thull', 'Toussaint', 'Trausch', 'Trierweiler',
        'Turmes', 'Turpel', 'Urbany', 'Wahl', 'Waldbillig', 'Wampach', 'Wanderscheid', 'Wantz', 'Weiland', 'Weisgerber', 'Wengler', 'Werner', 'Wester', 'Weydert', 'Weyer', 'Weyland', 'Weyrich', 'Wies', 'Wilhelm', 'Willems', 'Wilmes',
        'Wiltgen', 'Wiltzius', 'Winandy', 'Wirth', 'Wirtz', 'Witry', 'Wohl', 'Wolf', 'Wolter', 'Zeimes', 'Zeimet', 'Zenner', 'Zigrand', 'Zimmer',
    );

    protected static $titleMale = array('Här', 'Här Dr.', 'Här Prof.', 'Här Prof. Dr.');
    protected static $titleFemale = array('Madame', 'Madame Dr.', 'Madame Prof.', 'Madame Prof. Dr.');

    protected static $suffix = array('B.Sc.', 'B.A.', 'B.Eng.', 'MBA.');

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
