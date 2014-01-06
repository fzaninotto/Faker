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
        'Ludovico', 'Maggiore', 'Manuele', 'Marcantonio', 'Mariano', 'Marvin', 'Matteo', 'Mauro', 'Michael', 'Mirco', 'Modesto', 'Muzio', 'Nabil', 'Nathan',
        'Nick', 'Nicola', 'Noah', 'Odino', 'Olo', 'Oreste', 'Osea', 'Pablo', 'Patrizio', 'Piererminio', 'Pierfrancesco', 'Piersilvio', 'Priamo', 'Quarto',
        'Quirino', 'Radames', 'Raniero', 'Renato', 'Rocco', 'Romeo', 'Rosalino', 'Rudy', 'Sabatino', 'Samuel', 'Santo', 'Sebastian', 'Serse',
        'Silvano', 'Sirio', 'Tancredi', 'Terzo', 'Timoteo', 'Tolomeo', 'Trevis', 'Ubaldo', 'Ulrico', 'Valdo', 'Neri',
        'Vinicio', 'Walter', 'Xavier', 'Yago', 'Zaccaria', 'Abramo', 'Adriano', 'Alan', 'Albino', 'Aldo', 'Alessio', 'Alighiero',
        'Amerigo', 'Anastasio', 'Antimo', 'Antonio', 'Antonio Pio', 'Arduino', 'Aroldo', 'Arturo', 'Augusto', 'Avide', 'Baldassarre', 'Bettino',
        'Bortolo', 'Caligola', 'Carmelo', 'Celeste', 'Ciro', 'Costanzo', 'Dante', 'Danthon', 'Davis', 'Demis', 'Diego', 'Dindo',
        'Domiziano', 'Edipo', 'Egisto', 'Eliziario', 'Emidio', 'Enzo', 'Eriberto', 'Erminio', 'Ettore', 'Eustachio', 'Fabio', 'Fernando',
        'Fiorenzo', 'Folco', 'Francesco', 'Francesco Paolo', 'Furio', 'Gaetano', 'Gavino', 'Gerlando', 'Giacobbe', 'Giacomo', 'Giancarlo', 'Gianmaria', 'Giobbe', 'Giorgio', 'Giovanni', 'Giuseppe', 'Giuseppe Pio', 'Giustino',
        'Giulio', 'Gregorio', 'Hector', 'Ian', 'Ippolito', 'Ivano', 'Jacopo', 'Jarno', 'Joannes', 'Joshua', 'Karim', 'Kris', 'Lamberto',
        'Isacco', 'Lazzaro', 'Leone', 'Lino', 'Loris', 'Luigi', 'Manfredi', 'Marco', 'Marino', 'Martino', 'Marzio', 'Mattia', 'Max', 'Michele', 'Mirko', 'Moreno',
        'Nadir', 'Nazzareno', 'Nestore', 'Nico', 'Noel', 'Odone', 'Omar', 'Orfeo', 'Osvaldo', 'Pacifico', 'Paolo', 'Pericle', 'Pierpaolo', 'Pietro', 'Primo',
        'Quasimodo', 'Radio', 'Raffaele', 'Raffaele Pio', 'Raimondo', 'Raoul', 'Renzo', 'Rodolfo', 'Romolo', 'Rosolino', 'Rufo', 'Sabino', 'Sandro', 'Sasha', 'Secondo', 'Sesto', 'Settimio',
        'Silverio', 'Simone', 'Siro', 'Tazio', 'Teseo', 'Timothy', 'Tommaso', 'Tristano', 'Umberto', 'Ugo', 'Ariel', 'Artemide', 'Asia', 'Azue', 'Benedetta',
        'Bibiana', 'Brigitta', 'Carmela', 'Cassiopea', 'Cesidia', 'Cira', 'Clea', 'Cleopatra', 'Clodovea', 'Concetta', 'Cosetta', 'Cristyn',
        'Damiana', 'Danuta', 'Deborah', 'Demi', 'Diamante', 'Diana', 'Donatella', 'Doriana', 'Edvige', 'Elda', 'Elena', 'Elga', 'Elsa', 'Emilia', 'Enrica', 'Federica',
        'Erminia', 'Eufemia', 'Evita', 'Fatima', 'Felicia', 'Filomena', 'Flaviana', 'Fortunata', 'Gelsomina', 'Genziana', 'Giacinta', 'Giada', 'Gilda',
        'Giovanna', 'Giulietta', 'Grazia', 'Guendalina', 'Helga', 'Ileana', 'Ingrid', 'Irene', 'Isabel', 'Isira', 'Ivonne', 'Jelena', 'Jole',
        'Claudia', 'Kayla', 'Kristel', 'Laura', 'Lucia', 'Lia', 'Lidia', 'Lisa', 'Loredana', 'Loretta', 'Luce', 'Lucrezia', 'Luna', 'Maika',
        'Marcella', 'Maria', 'Mariagiulia', 'Marianita', 'Mariapia', 'Marieva', 'Marina', 'Marisa', 'Maristella', 'Maruska', 'Matilde', 'Mecren',
        'Mercedes', 'Mietta', 'Miriana', 'Miriam', 'Monia', 'Morgana', 'Naomi', 'Nayade', 'Nicoletta', 'Ninfa', 'Noemi', 'Nunzia', 'Olimpia',
        'Oretta', 'Ortensia', 'Paola', 'Penelope', 'Piccarda', 'Prisca', 'Rebecca', 'Rita', 'Rosalba', 'Rosaria', 'Rosita', 'Ruth', 'Samira',
        'Sabrina', 'Samara', 'Sarita', 'Selvaggia', 'Shaira', 'Sibilla', 'Soriana', 'Sue ellen', 'Tatiana', 'Thea', 'Tosca', 'Ursula', 'Vania', 'Vera',
        'Vienna', 'Violante', 'Vitalba', 'Zelida',
    );

    protected static $lastName = array(
        'Amato', 'Barbieri', 'Barone', 'Basile', 'Battaglia', 'Bellini', 'Benedetti', 'Bernardi', 'Bianchi', 'Bianco', 'Brambilla', 'Bruno',
        'Caputo', 'Carbone', 'Carnevale', 'Caruso', 'Cattaneo', 'Chiarella', 'Colombo', 'Conte', 'Conti', 'Coppola', 'Costa', 'Costantini',
        'D\'amico', 'D\'Andola', 'D\'angelo', 'Damico', 'De Angelis', 'De luca', 'De rosa', 'De Santis', 'Del Buono', 'Dolce', 'Donati', 
        'Esposito', 'Fabbri', 'Farina', 'Ferrara', 'Ferrari', 'Ferraro', 'Ferretti', 'Ferri', 'Fiore', 'Fontana', 
        'Gabbana', 'Galli', 'Gallo', 'Gatti', 'Gentile', 'Giordano', 'Giuliani', 'Grassi', 'Grasso', 'Greco', 'Grillo', 'Guerra', 'Ienco', 'Leone', 'Longo', 'Lombardi', 'Lombardo',
        'Mancini', 'Marchetti', 'Mariani', 'Marini', 'Marino', 'Martinelli', 'Martini', 'Martino', 'Mazza', 'Messina', 'Milani', 'Montanari', 'Monti', 'Montuori', 'Morelli', 'Moretti',
        'Negri', 'Neri', 'Pagano', 'Palmieri', 'Palumbo', 'Parisi', 'Pellegrini', 'Pellegrino', 'Piras', 
        'Orlando', 'Ricci', 'Rinaldi', 'Riva', 'Rizzi', 'Rizzo', 'Romano', 'Rossetti', 'Rossi', 'Ruggiero', 'Russo',
        'Sala', 'Sanna', 'Santoro', 'Sartori', 'Serra', 'Silvestri', 'Sorrentino', 'Testa', 'Valentini', 'Villa', 'Vitale', 'Vitali', 
    );

    private static $prefix = array('Sig.', 'Dott.', 'Dott.ssa', 'Dr.', 'Ing.', 'Sig.ra', 'Sig.na', 'Avv.', 'Geom.', 'Mons.', 'Rag.');

    /**
     * @example 'Sig.'
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
