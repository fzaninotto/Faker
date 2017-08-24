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
        'Adriano', 'Achille', 'Alan', 'Alberto', 'Alessandro', 'Alessio', 'Alfredo', 'Agostino', 'Amedeo', 'Andrea', 'Anselmo', 'Antonino',
        'Antonio', 'Armando', 'Aroldo', 'Arturo', 'Augusto', 'Baldassarre', 'Bartolomeo', 'Bernardo', 'Bettino', 'Boris', 'Calogero', 'Carlo',
        'Carmelo', 'Ciro', 'Costantino', 'Costanzo', 'Cristian', 'Cristiano', 'Damiano', 'Daniele', 'Dante', 'Davide', 'Dennis', 'Domenico',
        'Domiziano', 'Edilio', 'Edoardo', 'Egidio', 'Elia', 'Elio', 'Emanuele', 'Emidio', 'Enrico', 'Enzo', 'Erminio', 'Ettore', 'Eusebio', 'Ezio',
        'Fabiano', 'Fabio', 'Fabrizio', 'Ferdinando', 'Fernando', 'Filippo', 'Flavio', 'Francesco', 'Fulvio', 'Furio', 'Gabriele', 'Gaetano', 'Gastone',
        'Germano', 'Giacinto', 'Giacobbe', 'Giancarlo', 'Gianleonardo', 'Gianmarco', 'Gianmaria', 'Gianriccardo', 'Gioacchino', 'Giordano', 'Giorgio',
        'Giovanni', 'Giuliano', 'Giulio', 'Giuseppe', 'Graziano', 'Gregorio', 'Guido', 'Iacopo', 'Ignazio', 'Ilario', 'Italo', 'Ivan', 'Ivano', 'Jacopo',
        'Jari', 'Lamberto', 'Lauro', 'Leonardo', 'Lino', 'Lorenzo', 'Loris', 'Luca', 'Luciano', 'Ludovico', 'Luigi', 'Manfredi', 'Manuele',
        'Marco', 'Mariano', 'Marino', 'Mario', 'Marzio', 'Matteo', 'Mattia', 'Mauro', 'Michael', 'Mirco', 'Mirko', 'Moreno', 'Nazzareno', 'Nereo',
        'Nico', 'Nicola', 'Norberto', 'Oliviero', 'Omar', 'Oreste', 'Orfeo', 'Osvaldo', 'Paolo', 'Patrizio', 'Pierfrancesco', 'Piero', 'Piersilvio',
        'Pietro', 'Primo', 'Quasimodo', 'Quirino', 'Raniero', 'Raul', 'Renato', 'Renzo', 'Riccardo', 'Rocco', 'Rodolfo', 'Romeo', 'Romolo',
        'Rosalino', 'Rosolino', 'Rudy', 'Salvatore', 'Samuel', 'Samuele', 'Sandro', 'Santino', 'Saviero', 'Savino', 'Sebastiano', 'Silvano', 'Sirio',
        'Tancredi', 'Tazio', 'Teodoro', 'Tiziano', 'Tommaso', 'Ugo', 'Umberto', 'Valentino', 'Valerio', 'Vincenzo', 'Vinicio', 'Vittorio', 'Walter'
    );

    protected static $firstNameFemale = array(
        'Ada', 'Adele', 'Adriana', 'Alessandra', 'Alessia', 'Ambra', 'Angelica', 'Anna', 'Annamaria', 'Antonella', 'Asia', 'Aurora',
        'Barbara', 'Beatrice', 'Benedetta', 'Bianca', 'Bibiana', 'Brigida', 'Carmela', 'Caterina', 'Celeste', 'Chiara', 'Cinzia',
        'Clara', 'Claudia', 'Concetta', 'Cristiana', 'Cristina', 'Damiana', 'Daniela', 'Debora', 'Diana', 'Donatella', 'Doriana',
        'Elda', 'Elena', 'Eleonora', 'Elga', 'Elisa', 'Elisabetta', 'Elsa', 'Emilia', 'Emma', 'Enrica', 'Erminia', 'Eva',
        'Fatima', 'Federica', 'Filomena', 'Flaviana', 'Fortunata', 'Francesca', 'Gaia', 'Giovanna', 'Giulia', 'Giulietta', 'Grazia',
        'Greta', 'Guendalina', 'Ilaria', 'Ileana', 'Ilenia', 'Irene', 'Isabella', 'Lara', 'Laura', 'Lidia', 'Lisa', 'Loredana',
        'Lorella', 'Loretta', 'Lucia', 'Luciana', 'Lucrezia', 'Ludovica', 'Luna', 'Manuela', 'Marcella', 'Margherita', 'Maria',
        'Marianna', 'Marika', 'Marina', 'Marta', 'Martina', 'Marzia', 'Matilde', 'Melissa', 'Michela', 'Miriam', 'Monica', 'Morgana',
        'Nadia', 'Naomi', 'Natalina', 'Nicoletta', 'Noemi', 'Norma', 'Nunzia', 'Olga', 'Olimpia', 'Oriana', 'Ornella', 'Ortensia',
        'Pamela', 'Paola', 'Patrizia', 'Rachele', 'Rebecca', 'Rita', 'Roberta', 'Rosa', 'Rosalba', 'Rosaria', 'Rossana', 'Rossella',
        'Sabrina', 'Samanta', 'Sandra', 'Sara', 'Selvaggia', 'Silvia', 'Simona', 'Sonia', 'Susanna', 'Teodora', 'Teresa', 'Tiziana', 'Tosca',
        'Valeria', 'Valentina', 'Vanessa', 'Vania', 'Vera', 'Vienna', 'Violante', 'Vittoria', 'Viviana', 'Zoe'
    );

    protected static $lastName = array(
        'Agnelli', 'Amato', 'Baggio', 'Banfi', 'Barbieri', 'Barone', 'Basile', 'Battaglia', 'Bellini', 'Benedetti', 'Bernardi', 'Bianchi',
        'Bianco', 'Biasi', 'Bitta', 'Caputo', 'Carbone', 'Caruso', 'Catalano', 'Cattaneo', 'Colombo', 'Conte', 'Conti', 'Coppola',
        'Costa', 'Costantini', 'Damico', 'De Angelis', 'De Gregori', 'De Luca', 'De Marinis', 'De Rosa', 'De Santis', 'Di Marzio', 'Donati',
        'Esposito', 'Fabbri', 'Farina', 'Ferrara', 'Ferrari', 'Ferraro', 'Ferretti', 'Ferri', 'Fiore', 'Fontana', 'Galli', 'Gallo', 'Gatti',
        'Gentile', 'Gervasi', 'Gianattasio', 'Giordano', 'Giuliani', 'Grassi', 'Grasso', 'Greco', 'Guerra', 'Leone', 'Liguori', 'Lombardi',
        'Longhi', 'Longo', 'Maldini', 'Mancini', 'Marchetti', 'Mariani', 'Marini', 'Marino', 'Martinelli', 'Martini', 'Martino', 'Mazza',
        'Messina', 'Milani', 'Montanari', 'Monti', 'Morandi', 'Moratti', 'Morelli', 'Moretti', 'Negri', 'Neri', 'Nervi', 'Oriali', 'Orlando',
        'Pagano', 'Palmieri', 'Palumbo', 'Parisi', 'Pellegrini', 'Pellegrino', 'Piras', 'Pozzetto', 'Pozzi', 'Rendina', 'Ricci', 'Rinaldi',
        'Riva', 'Rizzi', 'Rizzo', 'Rogi', 'Romano', 'Rossetti', 'Rossi', 'Ruggiero', 'Russo', 'Sala', 'Sanna', 'Santoro', 'Savastano', 'Serra',
        'Silvestri', 'Sorrentino', 'Tagliabue', 'Toldo', 'Vendola', 'Verdi', 'Veronesi', 'Villa', 'Villaggio', 'Vitale', 'Vitali', 'Viviani'
    );

    protected static $titleMale = array('Arch.', 'Avv.', 'Dott.', 'Dr.', 'Geom.', 'Ing.', 'Prof.', 'Rag.', 'Sig.');

    protected static $titleFemale = array('Arch.', 'Avv.', 'Dott.ssa', 'Dr.ssa', 'Geom', 'Ing.', 'Prof.ssa', 'Rag', 'Sig.na', 'Sig.ra');

    /**
     * TaxCode (CodiceFiscale)
     * @link https://it.wikipedia.org/wiki/Codice_fiscale
     * @return string
     */
    public static function taxId()
    {
        return strtoupper(static::bothify('??????##?##?###?'));
    }
}
