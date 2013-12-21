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
        '{{prefix}} {{firstName}} {{lastName}}',
        '{{job}}'
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
        'Vienna', 'Violante', 'Vitalba', 'Zelida', 'Nicola', 'Marcantonio', 'Marisa', 'Elena', 'Paola', 'Francesco', 'Ugo', 'Pierpaolo',
        'Federica', 'Asia', 'Paolo', 'Simone', 'Raimondo', 'Giada', 'Aldo', 'Giacomo', 'Isacco', 'Settimio', 'Martino', 'Francesco Paolo',
        'Sabrina', 'Giovanni', 'Diego', 'Giustino', 'Samara', 'Tatiana', 'Raffaele', 'Raffaele Pio', 'Antonio Pio', 'Giuseppe', 'Giuseppe Pio'
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
        'Milani', 'Pagano', 'Ruggiero', 'Sorrentino', 'D\'amico', 'Orlando', 'Damico', 'Negri', 'Montuori', 'Grillo', 'Del Buono',
        'D\'Andola', 'Ienco', 'Carnevale', 'La Morte', 'Brambilla', 'Gabbana', 'Dolce', 'Chiarella'
    );

    protected static $job = array(
        'Accompagnatore turistico', 'Addestratore di cani', 'Agente di commercio', 'Agente di custodia', 'Agente immobiliare',
        'Agente di Polizia', 'Argicoltore', 'Aiuto commesso', 'Aiuto cuoco', 'Aiuto meccanico', 'Allenatore', 'Allevatore',
        'Allevatore di bestiame', 'Allevatore di pollame', 'Allevatore ittico', 'Amministratore di condominio', 'Amministratore di reti informatiche',
        'Animatore turistico', 'Antennista', 'Antropologo', 'Arbitro', 'Archeologo', 'Architetto', 'Archivista', 'Ascensorista',
        'Assistente alla clientela', 'Assistente di volo', 'Assistente domiciliare', 'Assistente sociale', 'Astronomo', 'Atleta professionista',
        'Attore', 'Attrezzista di scena', 'Attrezzista meccanico', 'Autotrasportatore', 'Avvocato',
        'Babysitter', 'Bagnino', 'Banditore d\'asta', 'Barbiere', 'Barman', 'Benzinaio', 'Bidello', 'Biologo', 'Biotecnologo',
        'Blogger', 'Bracciante agricolo',
        'Calzolaio', 'Cameraman', 'Cameriere', 'Cantante', 'Capostazione', 'Capotreno', 'Carpentiere edile', 'Carrozziere',
        'Cartografo', 'Cassiere di banca', 'Cassiere di negozio', 'Ceramista', 'Collaboratore familiare', 'Commercialista',
        'Commesso di vendita', 'Compositore di musica', 'Conciatore', 'Conduttore TV', 'Consulente del lavoro', 'Contabile',
        'Controllore biglietti', 'Controllore di volo', 'Copritetti', 'Coreografo', 'Correttore di bozze', 'Costumista', 'Critico d\'arte',
        'Croupier', 'Cuoco', 'Chef',
        'Danzatore professionista', 'Dietista', 'Diplomatico', 'Direttore commerciale', 'Direttore d\'albergo', 'Direttore d\'orchestra',
        'Dirigente della Pubblica Amministrazione', 'Docente formazione professionale', 'Docente universitario',
        'Editor', 'Editore', 'Educatore professionale', 'Elettrauto', 'Elettricista', 'Erborista', 'Estetista', 'Etnografo',
        'Fabbro', 'Facchino d\'albergo', 'Falegname', 'Farmacista', 'Fisico', 'Fisioterapista', 'Floricoltore', 'Fornaio',
        'Fotografo', 'Fotoreporter', 'Fresatore', 'Frutticoltore',
        'Gelataio', 'Genetista', 'Geografo', 'Geologo', 'Giardiniere', 'Giornalista', 'Giudice', 'Gommista', 'Grafico',
        'Gruista', 'Guardia giurata', 'Guida alpina', 'Guida naturalistica', 'Guida turistica',
        'Hostess',
        'Idrologo', 'Igienista mentale', 'Imbianchino', 'Impiegato', 'Infermiere', 'Ingegnere gestionale', 'Ingegnere',
        'Insegnante di danza', 'Insegnante di scuola materna', 'Insegnante di scuola primaria superiore', 'Insegnante di scuola secondaria superiore',
        'Interprete', 'Investigatore privato', 'Installatore meccanico', 'Instruttore di volo', 'Istruttore di scuola guida',
        'Lavapiatti', 'Linguista', 'Litografo', 'Logopedista',
        'Macellaio', 'Macchinista ferroviario', 'Magazziniere', 'Maggiordomo', 'Manovale edile', 'Manovale ferroviario',
        'Manutentore informatico', 'Marketing manager', 'Massaggiatore', 'Matematico', 'Meccanico aeronautico', 'Medico',
        'Medico dentista', 'Medico pediatra', 'Metereologo', 'Militare', 'Minatore', 'Modellatore ceramista', 'Modello',
        'Montatore', 'Mosaicista', 'Muratore',
        'Notaio',
        'Odontotecnico', 'Operaio', 'Operatore ecologico', 'Ottico', 'Orafo', 'Orologiaio', 'Ostetrica',
        'Pasticcere', 'Pastore', 'Pellicciaio', 'Pescatore', 'Piastrellista', 'Pilota civile', 'Pilota militare', 'Pizzaiolo',
        'Politologo', 'Polizziotto', 'Ponteggiatore', 'Postino', 'Produttore cinematografico', 'Progettista d\'interni',
        'Progettista software applicativo', 'Programmatore informatico', 'Psicologo', 'Psicoterapeuta', 'Pubblico ministro',
        'Ragioniere', 'Rappresentante farmaceutico', 'Redattore editoriale', 'Regista', 'Responsabile acquisti', 'Responsabile comunicazione',
        'Responsabile del personale', 'Restauratore', 'Revisore contabile', 'Ricercatore industria chimica', 'Rilegatore',
        'Saldatore', 'Sarto', 'Sceneggiatore', 'Scenografo', 'Scultore artistico', 'Segretario di direzione', 'SEO specialist', 'Sociologo',
        'Sommozzatore', 'Spazzacamino', 'Stalliere', 'Stampatore tessile', 'Stantman', 'Statistico', 'Storico', 'Stuccatore',
        'Suggeritore', 'Sviluppatore web',
        'Tappezziere', 'Tecnico del suono', 'Tecnico effetti speciali', 'Tecnico luci', 'Tecnico radio TV', 'Tessitore',
        'Tornitore metallurgico', 'Truccatore',
        'Verniciatore', 'Vetraio', 'Vigile del fuoco', 'Vigile urbano',
        'Webmaster', 'Web developer', 'Web designer',
    );

    private static $prefix = array('Sig.', 'Dott.', 'Dott.ssa', 'Dr.', 'Ing.', 'Sig.ra', 'Sig.na', 'Avv.', 'Geom.', 'Mons.', 'Rag.');

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
