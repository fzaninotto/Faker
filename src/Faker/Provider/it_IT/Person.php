<?php

namespace Faker\Provider\it_IT;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'Aaron', 'Abramo', 'Adriano', 'Akira', 'Alan', 'Alberto', 'Albino', 'Alessandro', 'Alessio', 'Amedeo', 'Amos', 'Anastasio', 'Anselmo',
        'Antimo', 'Antonino', 'Antonio', 'Ariel', 'Armando', 'Aroldo', 'Arturo', 'Augusto', 'Battista', 'Bernardo', 'Boris', 'Caio',
        'Carlo', 'Carmelo', 'Ciro', 'Damiano', 'Danny', 'Dante', 'Davide', 'Davis', 'Demis', 'Dimitri', 'Domingo', 'Dylan',
        'Edilio', 'Egidio', 'Elio', 'Emanuel', 'Emidio', 'Enrico', 'Enzo', 'Ercole', 'Ermes', 'Ethan', 'Ettore', 'Eusebio',
        'Fabiano', 'Fabio', 'Ferdinando', 'Fernando', 'Fiorenzo', 'Flavio', 'Folco', 'Fulvio', 'Furio', 'Gabriele', 'Gaetano', 'Gastone',
        'Gavino', 'Gerlando', 'Germano', 'Giacinto', 'Gianantonio', 'Giancarlo', 'Gianmarco', 'Gianmaria', 'Gioacchino', 'Giordano', 'Giorgio', 'Giuliano',
        'Giulio', 'Graziano', 'Gregorio', 'Guido', 'Harry', 'Hector', 'Iacopo', 'Ian', 'Ilario', 'Italo', 'Ivano', 'Jack',
        'Jacopo', 'Jari', 'Jarno', 'Joey', 'Joseph', 'Joshua', 'Kai', 'Karim', 'Kris', 'Lamberto', 'Lauro', 'Lazzaro',
        'Leonardo', 'Liborio', 'Lino', 'Lorenzo', 'Loris', 'Ludovico', 'Luigi', 'Manfredi', 'Manuele', 'Marco', 'Mariano', 'Marino',
        'Marvin', 'Marzio', 'Matteo', 'Mattia', 'Mauro', 'Max', 'Michael', 'Mirco', 'Mirko', 'Modesto', 'Moreno', 'Nabil',
        'Nadir', 'Nathan', 'Nazzareno', 'Nick', 'Nico', 'Noah', 'Noel', 'Omar', 'Oreste', 'Osvaldo', 'Pablo', 'Patrizio',
        'Pietro', 'Priamo', 'Quirino', 'Raoul', 'Renato', 'Renzo', 'Rocco', 'Rodolfo', 'Romeo', 'Romolo', 'Rudy', 'Sabatino',
        'Sabino', 'Samuel', 'Sandro', 'Santo', 'Sebastian', 'Sesto', 'Silvano', 'Silverio', 'Sirio', 'Siro', 'Timoteo', 'Timothy',
        'Tommaso', 'Ubaldo', 'Umberto', 'Vinicio', 'Walter', 'Xavier', 'Yago', 'Alighieri', 'Alighiero', 'Amerigo', 'Arcibaldo', 'Arduino',
        'Artes', 'Audenico', 'Ausonio', 'Bacchisio', 'Baldassarre', 'Bettino', 'Bortolo', 'Caligola', 'Cecco', 'Cirino', 'Cleros',
        'Costantino', 'Costanzo', 'Danthon', 'Demian','Domiziano', 'Edipo', 'Egisto', 'Eliziario', 'Eriberto', 'Erminio',
        'Eustachio', 'Evangelista', 'Fiorentino', 'Giacobbe', 'Gianleonardo', 'Gianriccardo', 'Giobbe', 'Ippolito',
        'Isira', 'Joannes', 'Kociss', 'Laerte', 'Maggiore', 'Muzio', 'Nestore', 'Odino', 'Odone', 'Olo', 'Oretta', 'Orfeo',
        'Osea', 'Pacifico', 'Pericle', 'Piererminio', 'Pierfrancesco', 'Piersilvio', 'Primo', 'Quarto', 'Quasimodo',
        'Radames', 'Radio', 'Raniero', 'Rosalino', 'Rosolino', 'Rufo', 'Secondo', 'Tancredi', 'Tazio', 'Terzo', 'Teseo',
        'Tolomeo',  'Trevis', 'Tristano', 'Ulrico', 'Valdo', 'Zaccaria', 'Dindo', 'Serse'
    );

    protected static $firstNameFemale = array(
        'Assia', 'Benedetta', 'Bibiana', 'Brigitta', 'Carmela', 'Celeste', 'Cira', 'Claudia', 'Concetta', 'Cristyn', 'Deborah', 'Demi', 'Diana',
        'Donatella', 'Doriana', 'Edvige', 'Elda', 'Elga', 'Elsa', 'Emilia', 'Enrica', 'Erminia', 'Evita', 'Fatima', 'Felicia',
        'Filomena', 'Fortunata', 'Gilda', 'Giovanna', 'Giulietta', 'Grazia', 'Helga', 'Ileana', 'Ingrid', 'Ione', 'Irene', 'Isabel',
        'Ivonne', 'Jelena', 'Kayla', 'Kristel', 'Laura', 'Leone', 'Lia', 'Lidia', 'Lisa', 'Loredana', 'Loretta', 'Luce',
        'Lucia', 'Lucrezia', 'Luna', 'Maika', 'Marcella', 'Maria', 'Marianita', 'Mariapia', 'Marina', 'Maristella', 'Maruska', 'Matilde',
        'Mercedes', 'Michele', 'Miriam', 'Miriana', 'Monia', 'Morgana', 'Naomi', 'Neri', 'Nicoletta', 'Ninfa', 'Noemi', 'Nunzia',
        'Olimpia', 'Ortensia', 'Penelope', 'Prisca', 'Rebecca', 'Rita', 'Rosalba', 'Rosaria', 'Rosita', 'Ruth', 'Samira', 'Sarita',
        'Sasha', 'Shaira', 'Thea', 'Ursula', 'Vania', 'Vera', 'Vienna', 'Artemide', 'Cassiopea', 'Cesidia', 'Clea', 'Cleopatra',
        'Clodovea', 'Cosetta', 'Damiana', 'Danuta', 'Diamante', 'Eufemia', 'Flaviana', 'Gelsomina', 'Genziana', 'Giacinta', 'Guendalina',
        'Jole', 'Mariagiulia', 'Marieva', 'Mietta', 'Nayade', 'Piccarda', 'Selvaggia', 'Sibilla', 'Soriana', 'Sue ellen', 'Tosca','Violante',
        'Vitalba', 'Zelida'
    );

    protected static $lastName = array(
        'Rossi', 'Russo', 'Ferrari', 'Esposito', 'Bianchi', 'Romano', 'Colombo', 'Ricci', 'Marino', 'Greco', 'Bruno', 'Gallo', 'Conti',
        'De luca', 'Mancini', 'Costa', 'Giordano', 'Rizzo', 'Lombardi', 'Moretti', 'Barbieri', 'Fontana', 'Santoro', 'Mariani',
        'Rinaldi', 'Caruso', 'Ferrara', 'Galli', 'Martini', 'Leone', 'Longo', 'Gentile', 'Martinelli', 'Vitale', 'Lombardo', 'Serra',
        'Coppola', 'De Santis', 'D\'angelo', 'Marchetti', 'Parisi', 'Villa', 'Conte', 'Ferraro', 'Ferri', 'Fabbri', 'Bianco',
        'Marini', 'Grasso', 'Valentini', 'Messina', 'Sala', 'De Angelis', 'Gatti', 'Pellegrini', 'Palumbo', 'Sanna', 'Farina',
        'Rizzi', 'Monti', 'Cattaneo', 'Morelli', 'Amato', 'Silvestri', 'Mazza', 'Testa', 'Grassi', 'Pellegrino', 'Carbone',
        'Giuliani', 'Benedetti', 'Barone', 'Rossetti', 'Caputo', 'Montanari', 'Guerra', 'Palmieri', 'Bernardi', 'Martino', 'Fiore',
        'De rosa', 'Ferretti', 'Bellini', 'Basile', 'Riva', 'Donati', 'Piras', 'Vitali', 'Battaglia', 'Sartori', 'Neri', 'Costantini',
        'Milani', 'Pagano', 'Ruggiero', 'Sorrentino', 'D\'amico', 'Orlando', 'Damico', 'Negri'
    );

    protected static $titleMale = array('Sig.', 'Dott.', 'Dr.', 'Ing.');

    protected static $titleFemale = array('Sig.ra', 'Dott.', 'Dr.', 'Ing.');

    private static $suffix = array();

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * TaxCode (CodiceFiscale)
     * @link https://it.wikipedia.org/wiki/Codice_fiscale
     * @param null $lastName
     * @param null $firstName
     * @param string $gender
     * @param \DateTime|null $birthdate
     * @param null $belfiore
     * @return string
     */
    public static function taxId($lastName = null, $firstName = null, $gender = 'm', \DateTime $birthdate = null, $belfiore = null)
    {
        //Birth Date
        $months = array(1=>'A',2=>'B',3=>'C',4=>'D',5=>'E',6=>'H',7=>'L',8=>'M',9=>'P',10=>'R',11=>'S',12=>'T');
        if (is_null($birthdate)) {
            $birthdate = \Faker\Provider\DateTime::dateTimeThisCentury();
        }
        $birthdate = explode('_', date_format($birthdate, 'y_m_d'));
        $yy = $birthdate[0];
        $mm = $months[intval($birthdate[1])];

        if ($gender == 'f' || $gender == 'F' || $gender == 'Female') {
            $dd = intval($birthdate[2])+40;
            $dd = $dd < 10 ? '0'.$dd : $dd;
        } else {
            $dd = $birthdate[2];
        }

        //Names
        if (is_null($lastName)) {
            $lastName = self::$lastName[mt_rand(0, sizeof(self::$lastName)-1)];
        }
        if (is_null($firstName)) {
            if (mt_rand() / mt_getrandmax() > 0.5) {
                $firstName = self::$firstNameFemale[rand(0, sizeof(self::$firstNameFemale)-1)];
            } else {
                $firstName = self::$firstNameMale[rand(0, sizeof(self::$firstNameMale)-1)];
            }
        }

        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");

        //Last Name
        $lastName = preg_replace('/ /', '', $lastName);
        $lName = '';
        if (strlen($lastName) < 3) {
            $lName = $lastName;
            while (strlen($lName) < 3) {
                $lName = $lName.'x';
            }
        } else {
            $consonants = preg_replace('#[aeiou]#i', '', $lastName);
            $vowels = preg_replace('#['.$consonants.']#i', '', $lastName);
            $lName = (strlen($consonants) <= 3) ? substr($consonants.$vowels, 0, 3):substr($consonants, 0, 3);
        }

        //First Name
        $firstName = preg_replace('/ /', '', $firstName);
        $fName = '';
        if (strlen($firstName) < 3) {
            $fName = $firstName;
            while (strlen($fName) < 3) {
                $fName = $fName.'x';
            }
        } else {
            $consonants = preg_replace('#[aeiou]#i', '', $firstName);
            $vowels = preg_replace('#['.$consonants.']#i', '', $firstName);
            $fName = (strlen($consonants) <= 3) ? substr($consonants.$vowels, 0, 3):$consonants[0].$consonants[2].$consonants[3];
        }

        // Belfiore Code (Fake)
        if (is_null($belfiore)) {
            $letters = 'abcdefghilm';
            $randLetter = $letters[rand(0, strlen($letters)-1)];
            $randInt = mt_rand(1, $randLetter == 'm' ? 427 : 999);

            $randInt = $randInt > 99 ? $randInt : ($randInt > 9 ? '0'.$randInt : '00'.$randInt);
            $belfiore = $randLetter.$randInt;
        }


        // Checksum
        $c_odds = array('0'=>1,'1'=>0,'2'=>5,'3'=>7,'4'=>9,'5'=>13,'6'=>15,'7'=>17,'8'=>19,'9'=>21,'A'=>1,'B'=>0,'C'=>5,'D'=>7,'E'=>9,'F'=>13,'G'=>15,'H'=>17,'I'=>19,'J'=>21,'K'=>2,'L'=>4,'M'=>18,'N'=>20,'O'=>11,'P'=>3,'Q'=>6,'R'=>8,'S'=>12,'T'=>14,'U'=>16,'V'=>10,'W'=>22,'X'=>25,'Y'=>24,'Z'=>23);
        $c_evens = array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'A'=>0,'B'=>1,'C'=>2,'D'=>3,'E'=>4,'F'=>5,'G'=>6,'H'=>7,'I'=>8,'J'=>9,'K'=>10,'L'=>11,'M'=>12,'N'=>13,'O'=>14,'P'=>15,'Q'=>16,'R'=>17,'S'=>18,'T'=>19,'U'=>20,'V'=>21,'W'=>22,'X'=>23,'Y'=>24,'Z'=>25);
        $reminder = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');


        $code = strtoupper($lName.$fName.$yy.$mm.$dd.$belfiore);

        $result = 0;
        for ($i = 0; $i < strlen($code); ++$i) {
            $result += $i % 2 == 0 ? intval($c_odds[$code[$i]]) : intval($c_evens[$code[$i]]);
        }
        $checksum = $reminder[$result % 26];

        return $code.$checksum;
    }
}
