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
        'Antonello', 'Abramo', 'Adriano', 'Artemio', 'Alan', 'Alberto', 'Albino', 'Alessandro', 'Alessio', 'Amedeo', 'Amos', 'Anastasio', 'Anselmo',
        'Antimo', 'Antonino', 'Antonio', 'Aristide', 'Armando', 'Aroldo', 'Arturo', 'Augusto', 'Battista', 'Bernardo', 'Boris', 'Caio',
        'Carlo', 'Carmelo', 'Ciro', 'Damiano', 'Daniele', 'Dante', 'Davide', 'Davis', 'Demis', 'Dimitri', 'Calogero',
        'Edilio', 'Egidio', 'Elio', 'Emanuele', 'Emidio', 'Enrico', 'Enzo', 'Ercole', 'Ermes', 'Ethan', 'Ettore', 'Eusebio',
        'Fabiano', 'Fabio', 'Ferdinando', 'Fernando', 'Fiorenzo', 'Flavio', 'Folco', 'Fulvio', 'Furio', 'Gabriele', 'Gaetano', 'Gastone',
        'Gavino', 'Gerlando', 'Germano', 'Giacinto', 'Gianantonio', 'Giancarlo', 'Gianmarco', 'Gianmaria', 'Gioacchino', 'Giordano', 'Giorgio', 'Giuliano',
        'Giulio', 'Graziano', 'Gregorio', 'Guido', 'Iacopo', 'Iannice', 'Ilario', 'Italo', 'Ivano', 'Giacomo',
        'Jacopo', 'Jari', 'Jarno', 'Giosué', 'Cristiano', 'Lamberto', 'Lauro', 'Lazzaro',
        'Leonardo', 'Liborio', 'Lino', 'Lorenzo', 'Loris', 'Ludovico', 'Luigi', 'Manfredi', 'Manuele', 'Marco', 'Mariano', 'Marino',
        'Marvin', 'Marzio', 'Matteo', 'Mattia', 'Mauro', 'Massimo', 'Michele', 'Mirco', 'Mirko', 'Modesto', 'Moreno', 'Nabil',
        'Nadir', 'Nathan', 'Nazzareno', 'Nick', 'Nico', 'Noah', 'Noel', 'Omar', 'Oreste', 'Osvaldo', 'Pablo', 'Patrizio',
        'Pietro', 'Priamo', 'Quirino', 'Raoul', 'Renato', 'Renzo', 'Rocco', 'Rodolfo', 'Romeo', 'Romolo', 'Rudy', 'Sabatino',
        'Sabino', 'Samuel', 'Sandro', 'Santo', 'Sebastian', 'Sesto', 'Silvano', 'Silverio', 'Sirio', 'Siro', 'Timoteo',
        'Tommaso', 'Ubaldo', 'Umberto', 'Vinicio', 'Walter', 'Xavier', 'Yago', 'Amerigo', 'Arcibaldo', 'Arduino',
        'Artes', 'Audenico', 'Ausonio', 'Bacchisio', 'Baldassarre', 'Bettino', 'Bortolo', 'Caligola', 'Cecco', 'Cirino',
        'Costantino', 'Costanzo', 'Demian','Domiziano', 'Edipo', 'Egisto', 'Eliziario', 'Eriberto', 'Erminio',
        'Eustachio', 'Evangelista', 'Fiorentino', 'Giacobbe', 'Gianleonardo', 'Gianriccardo', 'Giobbe', 'Ippolito', 
        'Laerte', 'Maggiore', 'Muzio', 'Nestore', 'Odino', 'Odone', 'Oretta', 'Orfeo',
        'Osea', 'Pacifico', 'Pericle', 'Piererminio', 'Pierfrancesco', 'Piersilvio', 'Primo', 'Quarto', 'Quasimodo',
        'Radames', 'Radio', 'Raniero', 'Rosalino', 'Rosolino', 'Rufo', 'Secondo', 'Tancredi', 'Tazio', 'Terzo', 'Teseo',
        'Tolomeo',  'Trevis', 'Tristano', 'Ulrico', 'Valdo', 'Zaccaria', 'Dindo', 'Serse', 'Goffredo', 'Francesco', 'Paolo', 
        'Pietro', 'Giovanni', 'Giuseppe', 'Mario', 'Andrea', 'Silvio'
    );

    protected static $firstNameFemale = array(
        'Alessia', 'Benedetta', 'Bernarda', 'Bibiana', 'Brigitta', 'Carmela', 'Celeste', 'Claudia', 'Concetta', 'Cristina', 'Debora', 'Damiana', 'Diana',
        'Donatella', 'Doriana', 'Edvige', 'Elda', 'Elga', 'Elsa', 'Emilia', 'Enrica', 'Erminia', 'Evita', 'Fatima', 'Felicia',
        'Filomena', 'Fortunata', 'Gilda', 'Giovanna', 'Giulietta', 'Grazia', 'Olga', 'Ileana', 'Ingrid', 'Ione', 'Irene', 'Isabella',
        'Ivonne', 'Jelena', 'Laura', 'Leone', 'Lia', 'Lidia', 'Lisa', 'Loredana', 'Loretta', 'Luce',
        'Lucia', 'Lucrezia', 'Luna', 'Michela', 'Marcella', 'Maria', 'Marianita', 'Mariapia', 'Marina', 'Maristella', 'Maruska', 'Matilde',
        'Mercedes', 'Miriam', 'Miriana', 'Monia', 'Morgana', 'Naomi', 'Nicoletta', 'Ninfa', 'Noemi', 'Nunzia',
        'Olimpia', 'Ortensia', 'Penelope', 'Prisca', 'Rebecca', 'Rita', 'Rosalba', 'Rosaria', 'Rosita', 'Samira', 'Sarita',
        'Ursula', 'Vania', 'Vera', 'Artemide', 'Clea', 'Cleopatra',
        'Clodovea', 'Cosetta', 'Damiana', 'Danuta', 'Diamante', 'Eufemia', 'Flaviana', 'Gelsomina', 'Genziana', 'Giacinta', 'Guendalina',
        'Jole', 'Mariagiulia', 'Marieva', 'Mietta', 'Nayade', 'Piccarda', 'Selvaggia', 'Sibilla', 'Soriana', 'Tosca',
        'Vitalba', 'Zelida', 'Tiziana', 'Sara', 'Graziella', 'Ines', 'Silvia', 'Anna', 'Alessandra', 'Valentina', 'Annalisa', 'Elisa' 
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
        'Milani', 'Pagano', 'Ruggiero', 'Sorrentino', 'D\'amico', 'Orlando', 'Damico', 'Negri', 'Tassinari', 'Calzolari', 'Mancuso'
    );

    protected static $titleMale = array('Sig.', 'Dott.', 'Rag.', 'Ing.', 'Prof.', 'Avv.');

    protected static $titleFemale = array('Sig.ra', 'Sig.na', 'Dott.', 'Dr.', 'Ing.', 'Prof.ssa');

    private static $suffix = array();

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
