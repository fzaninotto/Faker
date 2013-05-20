<?php

namespace Faker\Provider\it_IT;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}}',
        '{{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}}'
    );

    protected static $firstName = array(
        'Aaron', 'Akira', 'Alberto', 'Alessandro', 'Alighieri', 'Amedeo', 'Amos', 'Anselmo', 'Antonino', 'Arcibaldo', 'Armando', 'Artes',
        'Audenico', 'Ausonio', 'Bacchisio', 'Battista', 'Bernardo', 'Boris', 'Caio', 'Carlo', 'Cecco', 'Cirino', 'Cleros', 'Costantino',
        'Damiano', 'Danny', 'Davide', 'Demian', 'Dimitri', 'Domingo', 'Dylan', 'Edilio', 'Egidio', 'Elio', 'Emanuel', 'Enrico', 'Ercole',
        'Ermes', 'Ethan', 'Eusebio', 'Evangelista', 'Fabiano', 'Ferdinando', 'Fiorentino', 'Flavio', 'Fulvio', 'Gabriele', 'Gastone', 'Germano',
        'Giacinto', 'Gianantonio', 'Gianleonardo', 'Gianmarco', 'Gianriccardo', 'Gioacchino', 'Giordano', 'Giuliano', 'Graziano', 'Guido', 'Harry',
        'Iacopo', 'Ilario', 'Ione', 'Italo', 'Jack', 'Jari', 'Joey', 'Joseph', 'Kai', 'Kociss', 'Laerte', 'Lauro', 'Leonardo', 'Liborio', 'Lorenzo',
        'Ludovico', 'Maggiore', 'Manuele', 'Mariano', 'Marvin', 'Matteo', 'Mauro', 'Michael', 'Mirco', 'Modesto', 'Muzio', 'Nabil', 'Nathan',
        'Nick', 'Noah', 'Odino', 'Olo', 'Oreste', 'Osea', 'Pablo', 'Patrizio', 'Piererminio', 'Pierfrancesco', 'Piersilvio', 'Priamo', 'Quarto',
        'Quirino', 'Radames', 'Raniero', 'Renato', 'Rocco', 'Romeo', 'Rosalino', 'Rudy', 'Sabatino', 'Samuel', 'Santo', 'Sebastian', 'Serse',
        'Silvano', 'Sirio', 'Tancredi', 'Terzo', 'Timoteo', 'Tolomeo', 'Trevis', 'Ubaldo', 'Ulrico', 'Valdo', 'Neri',
        'Vinicio', 'Walter', 'Xavier', 'Yago', 'Zaccaria', 'Abramo', 'Adriano', 'Alan', 'Albino', 'Alessio', 'Alighiero',
        'Amerigo', 'Anastasio', 'Antimo', 'Antonio', 'Arduino', 'Aroldo', 'Arturo', 'Augusto', 'Avide', 'Baldassarre', 'Bettino',
        'Bortolo', 'Caligola', 'Carmelo', 'Celeste', 'Ciro', 'Costanzo', 'Dante', 'Danthon', 'Davis', 'Demis', 'Dindo',
        'Domiziano', 'Edipo', 'Egisto', 'Eliziario', 'Emidio', 'Enzo', 'Eriberto', 'Erminio', 'Ettore', 'Eustachio', 'Fabio', 'Fernando',
        'Fiorenzo', 'Folco', 'Furio', 'Gaetano', 'Gavino', 'Gerlando', 'Giacobbe', 'Giancarlo', 'Gianmaria', 'Giobbe', 'Giorgio', 'Giulio',
        'Gregorio', 'Hector', 'Ian', 'Ippolito', 'Ivano', 'Jacopo', 'Jarno', 'Joannes', 'Joshua', 'Karim', 'Kris', 'Lamberto',
        'Lazzaro', 'Leone', 'Lino', 'Loris', 'Luigi', 'Manfredi', 'Marco', 'Marino', 'Marzio', 'Mattia', 'Max', 'Michele', 'Mirko', 'Moreno',
        'Nadir', 'Nazzareno', 'Nestore', 'Nico', 'Noel', 'Odone', 'Omar', 'Orfeo', 'Osvaldo', 'Pacifico', 'Pericle', 'Pietro', 'Primo',
        'Quasimodo', 'Radio', 'Raoul', 'Renzo', 'Rodolfo', 'Romolo', 'Rosolino', 'Rufo', 'Sabino', 'Sandro', 'Sasha', 'Secondo', 'Sesto',
        'Silverio', 'Siro', 'Tazio', 'Teseo', 'Timothy', 'Tommaso', 'Tristano', 'Umberto', 'Ariel', 'Artemide', 'Assia', 'Azue', 'Benedetta',
        'Bibiana', 'Brigitta', 'Carmela', 'Cassiopea', 'Cesidia', 'Cira', 'Clea', 'Cleopatra', 'Clodovea', 'Concetta', 'Cosetta', 'Cristyn',
        'Damiana', 'Danuta', 'Deborah', 'Demi', 'Diamante', 'Diana', 'Donatella', 'Doriana', 'Edvige', 'Elda', 'Elga', 'Elsa', 'Emilia', 'Enrica',
        'Erminia', 'Eufemia', 'Evita', 'Fatima', 'Felicia', 'Filomena', 'Flaviana', 'Fortunata', 'Gelsomina', 'Genziana', 'Giacinta', 'Gilda',
        'Giovanna', 'Giulietta', 'Grazia', 'Guendalina', 'Helga', 'Ileana', 'Ingrid', 'Irene', 'Isabel', 'Isira', 'Ivonne', 'Jelena', 'Jole',
        'Claudia', 'Kayla', 'Kristel', 'Laura', 'Lucia', 'Lia', 'Lidia', 'Lisa', 'Loredana', 'Loretta', 'Luce', 'Lucrezia', 'Luna', 'Maika',
        'Marcella', 'Maria', 'Mariagiulia', 'Marianita', 'Mariapia', 'Marieva', 'Marina', 'Maristella', 'Maruska', 'Matilde', 'Mecren',
        'Mercedes', 'Mietta', 'Miriana', 'Miriam', 'Monia', 'Morgana', 'Naomi', 'Nayade', 'Nicoletta', 'Ninfa', 'Noemi', 'Nunzia', 'Olimpia',
        'Oretta', 'Ortensia', 'Penelope', 'Piccarda', 'Prisca', 'Rebecca', 'Rita', 'Rosalba', 'Rosaria', 'Rosita', 'Ruth', 'Samira',
        'Sarita', 'Selvaggia', 'Shaira', 'Sibilla', 'Soriana', 'Sue ellen', 'Thea', 'Tosca', 'Ursula', 'Vania', 'Vera',
        'Vienna', 'Violante', 'Vitalba', 'Zelida'
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

    private static $prefix = array('Sig.', 'Dott.', 'Dr.', 'Ing.');

    private static $suffix = array();

    /**
     * @example 'Mrs.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
