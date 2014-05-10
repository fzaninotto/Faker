<?php
namespace Faker\Provider\ro_RO;

class Person extends \Faker\Provider\Person
{
    // http://en.wikipedia.org/wiki/Romanian_name, prefixes are for more formal purposes
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}'
    );

    //http://ro.wikipedia.org/wiki/List%C4%83_de_prenume_rom%C3%A2ne%C8%99ti#Feminine
    protected static $firstNameFemale = array(
        'Ada', 'Adela', 'Adelaida', 'Adelina', 'Adina', 'Adriana', 'Agata', 'Aglaia', 'Agripina', 'Aida', 'Alberta', 'Albertina', 'Alexandra', 'Alexandrina', 'Alida', 'Alina', 'Alice', 'Alis', 'Alma',
        'Amalia', 'Amelia', 'Amanda', 'Ana', 'Anabela', 'Anaida', 'Anamaria', 'Anastasia', 'Anca', 'Ancuța', 'Anda', 'Andra', 'Andrada', 'Andreea', 'Anemona', 'Aneta', 'Angela', 'Anghelina', 'Anica',
        'Anișoara', 'Antoaneta', 'Antonia', 'Antonela', 'Anuța', 'Ariadna', 'Ariana', 'Arina', 'Aristița', 'Artemisa', 'Astrid', 'Atena', 'Augustina', 'Aura', 'Aurelia', 'Aureliana', 'Aurica', 'Aurora',
        'Beatrice', 'Betina', 'Bianca', 'Blanduzia', 'Bogdana', 'Brândușa', 'Camelia', 'Carina', 'Carla', 'Carmen', 'Carmina', 'Carolina', 'Casandra', 'Casiana', 'Caterina', 'Catinca', 'Catrina', 'Catrinel',
        'Cătălina', 'Cecilia', 'Celia', 'Cerasela', 'Cezara', 'Cipriana', 'Clara', 'Clarisa', 'Claudia', 'Clementina', 'Cleopatra', 'Codrina', 'Codruța', 'Constantina', 'Constanța', 'Consuela', 'Coralia',
        'Corina', 'Cornelia', 'Cosmina', 'Crenguța', 'Crina', 'Cristina', 'Daciana', 'Dafina', 'Daiana', 'Dalia', 'Dana', 'Daniela', 'Daria', 'Dariana', 'Delia', 'Demetra', 'Denisa', 'Despina', 'Diana',
        'Dida', 'Didina', 'Dimitrina', 'Dina', 'Dochia', 'Doina', 'Domnica', 'Dora', 'Doriana', 'Dorina', 'Dorli', 'Draga', 'Dumitra', 'Dumitrana', 'Ecaterina', 'Eftimia', 'Elena', 'Eleonora', 'Eliana',
        'Elisabeta', 'Elisaveta', 'Eliza', 'Elodia', 'Elvira', 'Emilia', 'Emanuela', 'Erica', 'Estera', 'Eufrosina', 'Eugenia', 'Eusebia', 'Eva', 'Evanghelina', 'Evelina', 'Fabia', 'Fabiana', 'Felicia',
        'Filofteia', 'Fiona', 'Flavia', 'Floare', 'Floarea', 'Flora', 'Floriana', 'Florica', 'Florina', 'Florentina', 'Florența', 'Francesca', 'Frusina', 'Gabriela', 'Geanina', 'Gențiana', 'Georgeta',
        'Georgia', 'Georgiana', 'Geta', 'Gherghina', 'Gianina', 'Gina', 'Giorgiana', 'Grațiana', 'Grațiela', 'Hortensia', 'Henrieta', 'Heracleea', 'Iasmina', 'Ica', 'Ileana', 'Ilinca', 'Ilona', 'Ina',
        'Ioana', 'Ioanina', 'Iolanda', 'Ionela', 'Ionelia', 'Iosefina', 'Irina', 'Iridenta', 'Iris', 'Isabela', 'Iulia', 'Iuliana', 'Iustina', 'Ivona', 'Izabela', 'Jana', 'Janeta', 'Janina', 'Jasmina',
        'Jeana', 'Julia', 'Julieta', 'Larisa', 'Laura', 'Laurenția', 'Lavinia', 'Lăcrămioara', 'Leana', 'Lelia', 'Leontina', 'Leopoldina', 'Letiția', 'Lia', 'Liana', 'Lidia', 'Ligia', 'Lili', 'Liliana',
        'Lioara', 'Livia', 'Loredana', 'Lorelei', 'Lorena', 'Luana', 'Lucia', 'Luciana', 'Lucreția', 'Ludovica', 'Ludmila', 'Luiza', 'Luminița', 'Magdalena', 'Maia', 'Manuela', 'Mara', 'Marcela', 'Marga',
        'Margareta', 'Marcheta', 'Maria', 'Mariana', 'Maricica', 'Marilena', 'Marina', 'Marinela', 'Marioara', 'Marta', 'Matilda', 'Malvina', 'Mădălina', 'Mălina', 'Mărioara', 'Măriuca', 'Melania', 'Melina',
        'Mihaela', 'Milena', 'Mina', 'Minodora', 'Mioara', 'Mirabela', 'Mirela', 'Mirona', 'Miruna', 'Mona', 'Monalisa', 'Monica', 'Nadia', 'Narcisa', 'Natalia', 'Natașa', 'Noemi', 'Nicoleta', 'Niculina',
        'Nidia', 'Nora', 'Norica', 'Oana', 'Octavia', 'Octaviana', 'Ofelia', 'Olga', 'Olimpia', 'Olivia', 'Ortansa', 'Otilia', 'Ozana', 'Pamela', 'Paraschiva', 'Paula', 'Paulica', 'Paulina', 'Patricia',
        'Petronela', 'Petruța', 'Pompilia', 'Profira', 'Rada', 'Rafila', 'Raluca', 'Ramona', 'Rebeca', 'Renata', 'Rica', 'Roberta', 'Robertina', 'Rodica', 'Romanița', 'Romina', 'Roza', 'Rozalia', 'Roxana',
        'Roxelana', 'Ruxanda', 'Ruxandra', 'Sabina', 'Sabrina', 'Safta', 'Salomea', 'Sanda', 'Saveta', 'Savina', 'Sânziana', 'Semenica', 'Severina', 'Sidonia', 'Silvia', 'Silvana', 'Silviana',
        'Simina', 'Simona', 'Smaranda', 'Sofia', 'Sonia', 'Sorana', 'Sorina', 'Speranța', 'Stana', 'Stanca', 'Stela', 'Steliana', 'Steluța', 'Suzana', 'Svetlana', 'Ștefana', 'Ștefania', 'Tamara', 'Tania',
        'Tatiana', 'Teea', 'Teodora', 'Teodosia', 'Teona', 'Tiberia', 'Timea', 'Tinca', 'Tincuța', 'Tudora', 'Tudorița', 'Tudosia', 'Valentina', 'Valeria', 'Vanesa', 'Varvara', 'Vasilica', 'Venera', 'Vera',
        'Veronica', 'Veta', 'Vicenția', 'Victoria', 'Violeta', 'Viorela', 'Viorica', 'Virginia', 'Viviana', 'Voichița', 'Xenia', 'Zaharia', 'Zamfira', 'Zaraza', 'Zenobia', 'Zenovia', 'Zina', 'Zoe'
    );

    //http://ro.wikipedia.org/wiki/List%C4%83_de_prenume_rom%C3%A2ne%C8%99ti#Feminine
    protected static $firstNameMale = array(
        'Achim', 'Adam', 'Adelin', 'Adonis', 'Adrian', 'Adi', 'Agnos', 'Albert', 'Alex', 'Alexandru', 'Alexe', 'Aleodor', 'Alin', 'Alistar', 'Amedeu', 'Amza', 'Anatolie', 'Andrei', 'Angel', 'Anghel', 'Antim',
        'Anton', 'Antonie', 'Antoniu', 'Arian', 'Aristide', 'Arsenie', 'Augustin', 'Aurel', 'Aurelian', 'Aurică', 'Avram', 'Axinte', 'Barbu', 'Bartolomeu', 'Basarab', 'Bănel', 'Bebe', 'Beniamin', 'Benone',
        'Bernard', 'Bogdan', 'Brăduț', 'Bucur', 'Caius', 'Camil', 'Cantemir', 'Carol', 'Casian', 'Cazimir', 'Călin', 'Cătălin', 'Cedrin', 'Cezar', 'Ciprian', 'Claudiu', 'Codin', 'Codrin', 'Codruț', 'Cornel',
        'Corneliu', 'Corvin', 'Constantin', 'Cosmin', 'Costache', 'Costel', 'Costin', 'Crin', 'Cristea', 'Cristian', 'Cristobal', 'Cristofor', 'Dacian', 'Damian', 'Dan', 'Daniel', 'Darius', 'David',
        'Decebal', 'Denis', 'Dinu', 'Dominic', 'Dorel', 'Dorian', 'Dorin', 'Dorinel', 'Doru', 'Dragoș', 'Ducu', 'Dumitru', 'Edgar', 'Edmond', 'Eduard', 'Eftimie', 'Emil', 'Emilian', 'Emanoil', 'Emanuel',
        'Emanuil', 'Eremia', 'Eric', 'Ernest', 'Eugen', 'Eusebiu', 'Eustațiu', 'Fabian', 'Felix', 'Filip', 'Fiodor', 'Flaviu', 'Florea', 'Florentin', 'Florian', 'Florin', 'Francisc', 'Frederic',
        'Gabi', 'Gabriel', 'Gelu', 'George', 'Georgel', 'Georgian', 'Ghenadie', 'Gheorghe', 'Gheorghiță', 'Ghiță', 'Gică', 'Gicu', 'Giorgian', 'Grațian', 'Gregorian', 'Grigore',
        'Haralamb', 'Haralambie', 'Horațiu', 'Horea', 'Horia', 'Iacob', 'Iancu', 'Ianis', 'Ieremia', 'Ilarie', 'Ilarion', 'Ilie', 'Inocențiu', 'Ioan', 'Ion', 'Ionel', 'Ionică', 'Ionuț', 'Iosif', 'Irinel',
        'Iulian', 'Iuliu', 'Iurie', 'Iustin', 'Iustinian', 'Ivan', 'Jan', 'Jean', 'Jenel', 'Ladislau', 'Lascăr', 'Laurențiu', 'Laurian', 'Lazăr', 'Leonard', 'Leontin', 'Lică', 'Liviu', 'Lorin', 'Luca',
        'Lucențiu', 'Lucian', 'Lucrețiu', 'Ludovic', 'Manole', 'Marcel', 'Marcu', 'Marian', 'Marin', 'Marius', 'Martin', 'Matei', 'Maxim', 'Maximilian', 'Mădălin', 'Mihai', 'Mihail', 'Mihnea', 'Mircea',
        'Miron', 'Mitică', 'Mitruț', 'Mugur', 'Mugurel', 'Nae', 'Narcis', 'Nechifor', 'Nelu', 'Nichifor', 'Nicoară', 'Nicodim', 'Nicolae', 'Nicolaie', 'Nicu', 'Nicuță', 'Niculiță', 'Nicușor', 'Norbert',
        'Norman', 'Octav', 'Octavian', 'Octaviu', 'Olimpian', 'Olimpiu', 'Oliviu', 'Ovidiu', 'Pamfil', 'Panait', 'Panagachie', 'Paul', 'Pavel', 'Pătru', 'Petre', 'Petrică', 'Petrișor', 'Petru', 'Petruț',
        'Pompiliu', 'Radu', 'Rafael', 'Rareș', 'Raul', 'Răducu', 'Răzvan', 'Relu', 'Remus', 'Robert', 'Romeo', 'Romulus', 'Sabin', 'Sandu', 'Sava', 'Sebastian', 'Sergiu', 'Sever', 'Severin', 'Silvian',
        'Silviu', 'Simi', 'Simion', 'Sinică', 'Sorin', 'Stan', 'Stancu', 'Stelian', 'Sandu', 'Șerban', 'Ștefan', 'Teodor', 'Teofil', 'Teohari', 'Theodor', 'Tiberiu', 'Timotei', 'Titus', 'Todor', 'Toma',
        'Traian', 'Tudor', 'Valentin', 'Valeriu', 'Valter', 'Vasile', 'Vasilică', 'Veniamin', 'Vicențiu', 'Victor', 'Vincențiu', 'Viorel', 'Visarion', 'Vlad', 'Vladimir', 'Vlaicu', 'Voicu', 'Zamfir', 'Zeno'
    );

    //courtesy of Florin LIPAN, at nume.ottomotor.ro
    protected static $lastName = array(
        'Achim', 'Adam', 'Albu', 'Aldea', 'Alexa', 'Alexandrescu', 'Alexandru', 'Alexe', 'Andrei', 'Anghel', 'Antal', 'Anton', 'Apostol', 'Ardelean', 'Ardeleanu', 'Avram',
        'Baciu', 'Badea', 'Balan', 'Balint', 'Banica', 'Banu', 'Barbu', 'Barbulescu', 'Bejan', 'Biro', 'Blaga', 'Boboc', 'Bodea', 'Bogdan', 'Bota', 'Botezatu', 'Bratu', 'Bucur', 'Buda', 'Bunea', 'Burlacu',
        'Calin', 'Catana', 'Cazacu', 'Chiriac', 'Chirila', 'Chirita', 'Chis', 'Chivu', 'Ciobanu', 'Ciocan', 'Cojocaru', 'Coman', 'Constantin', 'Constantinescu', 'Cornea', 'Cosma', 'Costache',
        'Costea', 'Costin', 'Covaci', 'Cozma', 'Craciun', 'Cretu', 'Crisan', 'Cristea', 'Cristescu', 'Croitoru', 'Cucu',
        'Damian', 'Dan', 'Danciu', 'Danila', 'Dascalu', 'David', 'Diaconescu', 'Diaconu', 'Dima', 'Dinca', 'Dinu', 'Dobre', 'Dobrescu', 'Dogaru', 'Dragan', 'Draghici',
        'Dragoi', 'Dragomir', 'Dumitrache', 'Dumitrascu', 'Dumitrescu', 'Dumitriu', 'Dumitru', 'Duta',
        'Enache', 'Ene', 'Farcas', 'Filimon', 'Filip', 'Florea', 'Florescu', 'Fodor', 'Fratila',
        'Gabor', 'Gal', 'Ganea', 'Gavrila', 'Georgescu', 'Gheorghe', 'Gheorghita', 'Gheorghiu', 'Gherman', 'Ghita', 'Giurgiu', 'Grecu', 'Grigoras', 'Grigore', 'Grigorescu', 'Grosu', 'Groza',
        'Horvath', 'Iacob', 'Iancu', 'Ichim', 'Ignat', 'Ilie', 'Iliescu', 'Ion', 'Ionescu', 'Ionita', 'Iordache', 'Iorga', 'Iosif', 'Irimia', 'Ispas', 'Istrate', 'Ivan', 'Ivascu',
        'Kiss', 'Kovacs', 'Lazar', 'Luca', 'Lungu', 'Lupu', 'Macovei', 'Maftei', 'Man', 'Manea', 'Manolache', 'Manole', 'Marcu', 'Marginean', 'Marian', 'Marin', 'Marinescu', 'Martin', 'Mateescu',
        'Matei', 'Maxim', 'Mazilu', 'Micu', 'Mihai', 'Mihaila', 'Mihailescu', 'Mihalache', 'Mihalcea', 'Milea', 'Militaru', 'Mircea', 'Mirea', 'Miron', 'Miu', 'Mocanu', 'Moga', 'Moise', 'Moldovan',
        'Moldoveanu', 'Molnar', 'Morar', 'Moraru', 'Muntean', 'Munteanu', 'Muresan', 'Musat', 'Nagy', 'Nastase', 'Neacsu', 'Neagoe', 'Neagu', 'Neamtu', 'Nechita', 'Necula', 'Nedelcu',
        'Negoita', 'Negrea', 'Negru', 'Nemes', 'Nica', 'Nicoara', 'Nicolae', 'Nicolescu', 'Niculae', 'Niculescu', 'Nistor', 'Nita', 'Nitu',
        'Oancea', 'Olariu', 'Olaru', 'Oltean', 'Olteanu', 'Oprea', 'Opris', 'Paduraru', 'Pana', 'Panait', 'Paraschiv', 'Parvu', 'Pasca', 'Pascu', 'Patrascu', 'Paun', 'Pavel', 'Petcu', 'Peter',
        'Petre', 'Petrea', 'Petrescu', 'Pintea', 'Pintilie', 'Pirvu', 'Pop', 'Popa', 'Popescu', 'Popovici', 'Preda', 'Prodan', 'Puiu', 'Radoi', 'Radu', 'Radulescu', 'Roman', 'Rosca', 'Rosu',
        'Rotaru', 'Rus', 'Rusu', 'Sabau', 'Sandor', 'Sandu', 'Sarbu', 'Sava', 'Savu', 'Serban', 'Sima', 'Simion', 'Simionescu', 'Simon', 'Sirbu', 'Soare', 'Solomon', 'Staicu', 'Stan',
        'Stanciu', 'Stancu', 'Stanescu', 'Stefan', 'Stefanescu', 'Stoian', 'Stoica', 'Stroe', 'Suciu', 'Szabo', 'Szasz', 'Szekely', 'Tamas', 'Tanase', 'Tataru', 'Teodorescu', 'Toader',
        'Toma', 'Tomescu', 'Toth', 'Trandafir', 'Trif', 'Trifan', 'Tudor', 'Tudorache', 'Tudose', 'Turcu', 'Ungureanu', 'Ursu', 'Vaduva', 'Varga', 'Vasile', 'Vasilescu', 'Vasiliu', 'Veres',
        'Vintila', 'Visan', 'Vlad', 'Voicu', 'Voinea', 'Zaharia', 'Zamfir'
    );

    protected static $titleMale = array('dl.', 'ing.', 'dr.');
    protected static $titleFemale = array('d-na.', 'd-șoara', 'ing.', 'dr.');

    protected static $cnpCountyCodes = array(
        'AB' => '01', 'AR' => '02', 'AG' => '03', 'B'  => '40', 'BC' => '04', 'BH' => '05',
        'BN' => '06', 'BT' => '07', 'BV' => '08', 'BR' => '09', 'BZ' => '10', 'CS' => '11',
        'CL' => '51', 'CJ' => '12', 'CT' => '13', 'CV' => '14', 'DB' => '15', 'DJ' => '16',
        'GL' => '17', 'GR' => '52', 'GJ' => '18', 'HR' => '19', 'HD' => '20', 'IL' => '21',
        'IS' => '22', 'IF' => '23', 'MM' => '24', 'MH' => '25', 'MS' => '26', 'NT' => '27',
        'OT' => '28', 'PH' => '29', 'SM' => '30', 'SJ' => '31', 'SB' => '32', 'SV' => '33',
        'TR' => '34', 'TM' => '35', 'TL' => '36', 'VS' => '37', 'VL' => '38', 'VN' => '39',

        'B1' => '41', 'B2' => '42', 'B3' => '43', 'B4' => '44', 'B5' => '45', 'B6' => '46'
    );

    /**
     * Personal Numerical Code (CNP)
     *
     * @link http://ro.wikipedia.org/wiki/Cod_numeric_personal
     * @example 1111111111118
     *
     * @param  string  $gender  Valid values: m, f, 1, 2
     * @param  integer $century Valid values: 1800, 1900, 2000, 1, 2, 3, 4, 5, 6
     * @param  string  $county  Valid values: 2 letter ISO 3166-2:RO county codes and B1-B6 for Bucharest's 6 sectors
     * @return string
     *
     */
    public function cnp($gender = null, $century = null, $county = null)
    {
        if (is_null($county) || !array_key_exists($county, static::$cnpCountyCodes)) {
            $countyCode = static::randomElement(array_values(static::$cnpCountyCodes));
        } else {
            $countyCode = static::$cnpCountyCodes[$county];
        }

        $cnp = (string) static::cnpFirstDigit($gender, $century)
             . static::numerify('##')
             . sprintf('%02d', $this->generator->month())
             . sprintf('%02d', $this->generator->dayOfMonth())
             . $countyCode
             . static::numerify('##%')
        ;

        $cnp = static::cnpAddChecksum($cnp);

        return $cnp;
    }

    /**
     * Calculates the first digit for the Personal Numerical Code (CNP) based on
     * the gender and century
     *
     * @param  string  $gender  Valid values: m, f, 1, 2
     * @param  integer $century Valid values: 1800, 1900, 2000, 1, 2, 3, 4, 5, 6
     * @return integer
     */
    protected static function cnpFirstDigit($gender = null, $century = null)
    {
        switch ($century) {
            case 1800:
            case 3:
            case 4:
                $centuryCode = 2;
                break;
            case 1900:
            case 1:
            case 2:
                $centuryCode = 0;
                break;
            case 2000:
            case 5:
            case 6:
                $centuryCode = 4;
                break;
            default:
                $centuryCode = static::randomElement(array(0, 2, 4, 6, 9));
        }

        switch (strtolower($gender)) {
            case 'm':
            case 1:
                $genderCode = 1;
                break;
            case 'f':
            case 2:
                $genderCode = 2;
                break;
            default:
                $genderCode = static::randomElement(array(1, 2));
        }

        $firstDigit = $centuryCode + $genderCode;

        return ($firstDigit > 9) ? 9 : $firstDigit;
    }

    /**
     * Calculates a checksum for the Personal Numerical Code (CNP).
     *
     * @param  string $cnp Randomly generated CNP
     * @return string CNP with the last digit altered to a proper checksum
     */
    protected static function cnpAddChecksum($cnp)
    {
        $checkNumber = 279146358279;

        $checksum = 0;
        foreach (range(0, 11) as $digit) {
            $checksum += substr($cnp, $digit, 1) * substr($checkNumber, $digit, 1);
        }
        $checksum = $checksum % 11;

        return substr($cnp, 0, 12) . ($checksum == 10 ? 1 : $checksum);
    }
}
