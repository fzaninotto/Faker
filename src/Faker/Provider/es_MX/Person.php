<?php

namespace Faker\Provider\es_MX;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{fullLastname}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{fullLastname}}',
    );

    protected static $stateAbbr = array(
        'AS', 'BC', 'BS', 'CC', 'CL', 'CM', 'CS', 'CH', 'DF', 'DG', 'GT', 'GR', 'HG', 'JC', 'MC', 'MN', 'MS', 'NT', 'NL', 'OC', 'PL', 'QT', 'QR', 'SP', 'SL', 'SR', 'TC', 'TS', 'TL', 'VZ', 'YN', 'ZS'
    );

    /**
     * @link https://es.wikipedia.org/wiki/Categoría:Nombres_masculinos
     */
    protected static $firstNameMale = array(
        'Aarón', 'Abdías', 'Abdón', 'Abel', 'Abelardo', 'Abraham', 'Absalón', 'Abundio', 'Acacio', 'Achiuta', 'Acisclo', 'Adalberto', 'Adalberón', 'Adán', 'Adem', 'Adolfo', 'Adrista', 'Adrián', 'Afrodisio', 'Agamenón', 'Agapito', 'Agastia', 'Agatoclio', 'Aghásura', 'Agni', 'Agustín', 'Aitor', 'Aladino', 'Alarico', 'Albano', 'Alberto', 'Albino', 'Alcibíades', 'Alcides', 'Aldo', 'Alec', 'Alejandro', 'Alejo', 'Alfonso', 'Alfredo', 'Alois', 'Álvaro', 'Amadeo', 'Amado', 'Amador', 'Amancio', 'Amara Simja', 'Amara-kosha', 'Ambrosio', 'Amenhotep', 'Amit', 'Amsha', 'Américo', 'Amílcar', 'Amós', 'Anacleto', 'Ananías', 'Anastasio', 'Anatole', 'Anatolio', 'Ander', 'Andhaka', 'Andrea', 'Andrei', 'Andrés', 'Andrónico', 'Ángel', 'Aníbal', 'Aniceto', 'Anselmo', 'Antenor', 'Antoni', 'Antonino', 'Antonio', 'Āpastamba', 'Apolinar', 'Apolo', 'Apolonio', 'Aquiles', 'Argimiro', 'Aristarco', 'Arístides', 'Aristóteles', 'Arjuna', 'Armand', 'Armando', 'Arnaldo', 'Arnulfo', 'Arquímedes', 'Arsenio', 'Aruná', 'Aryaman', 'Ascanio', 'Asdrúbal', 'Ashuatama', 'Aśoka', 'Ashuin', 'Atanasio', 'Augurio', 'Augusto', 'Aureliano', 'Aurelio', 'Avelino', 'Axel',
        'Bala Krisna', 'Balam', 'Balarama', 'Balbino', 'Baldomero', 'Balduino', 'Baltasar', 'Banásura', 'Bartolomé', 'Basilio', 'Baudhāyana', 'Bautista', 'Beato', 'Belisario', 'Beltrán', 'Benedicto', 'Benigno', 'Benito', 'Benjamín', 'Bento', 'Berengario', 'Bernabé', 'Bernardino', 'Bernardo', 'Bernhard', 'Bernie', 'Berto', 'Betuel', 'Bhaga', 'Bhajan', 'Bharadvaya', 'Bharata', 'Bhavaviveka', 'Bhima', 'Bhishmá', 'Biagio', 'Bienvenido', 'Blas', 'Bobo', 'Bogdan', 'Bogumil', 'Bogusław', 'Boleslao', 'Boni', 'Bonifacio', 'Borja', 'Bosco', 'Boutros', 'Boyan', 'Braulio', 'Brfxxccxxmnpcccclllmmnprxvclmnckssqlbb11116', 'Brian', 'Brijadratha', 'Brihaspati', 'Bronisław', 'Bruno', 'Burgess',
        'Calixto', 'Camilo', 'Cancio', 'Canek', 'Canuto', 'Carlos', 'Carmelo', 'Casimiro', 'Casio', 'Casiodoro', 'Casto', 'Cayetano', 'Cayo', 'Cecilio', 'Ceferino', 'Celedonio', 'Celestino', 'Celso', 'Cháraka', 'Chiávana', 'Cipriano', 'Ciriaco', 'Ciriaco', 'Cirilo', 'Ciro', 'Claudio', 'Clemente', 'Columbano', 'Columbano', 'Conrado', 'Constancio', 'Constantino', 'Cornelio', 'Corono', 'Cosme', 'Crescencio', 'Crisanto', 'Crispín', 'Cristián', 'Cristóbal', 'Crisóstomo', 'Cuauhtémoc', 'Czesław', 'Cándido', 'César',
        'Dadhichi', 'Daksha', 'Dalmacio', 'Dalmacio', 'Damián', 'Daniel', 'Danilo', 'Darío', 'Dasharatha', 'David', 'Demetrio', 'Demi', 'Deodato', 'Deogracias', 'Desiderio', 'Devabhuti', 'Devala', 'Diego', 'Dieus', 'Dimas', 'Diodoro', 'Dionisio', 'Dobromir', 'Domingo', 'Donato', 'Doroteo', 'Dritarastra', 'Drona', 'Drupada', 'Durvasa', 'Duryodhana', 'Dámaso',
        'Edelmiro', 'Edgar', 'Edmundo', 'Eduardo', 'Edwin', 'Eero', 'Efraím', 'Egidio', 'Eleazar', 'Eleuterio', 'Eliseo', 'Eloy', 'Elías', 'Emerico', 'Emeterio', 'Emilio', 'Enoc', 'Enrique', 'Enzo', 'Enós', 'Epifanio', 'Erasmo', 'Eric', 'Ernesto', 'Esaú', 'Esdras', 'Espartaco', 'Estanislao', 'Esteban', 'Etelfrido', 'Ethelbaldo', 'Eudes', 'Eugenio', 'Eulogio', 'Eusebio', 'Eustaquio', 'Evangelista', 'Evaristo', 'Ezequiel',
        'Fabio', 'Fabián', 'Fabricio', 'Facundo', 'Faustino', 'Fausto', 'Federico', 'Feliciano', 'Felipe', 'Fermín', 'Fernando', 'Fidel', 'Fidel', 'Filemón', 'Finnian', 'Fiódor', 'Florencio', 'Florentino', 'Florián', 'Forrest', 'Fortunato', 'Francisco', 'Froilán', 'Fructuoso', 'Fulgencio', 'Félix',
        'Gabino', 'Gabriel', 'Gamaliel', 'Gandharva', 'Ganesha', 'Garga Muni', 'Garuda', 'Gaspar', 'Gastón', 'Gaudencio', 'Gedeón', 'George', 'Gerardo', 'Germano', 'Germán', 'Germán', 'Gerson', 'Gervasio', 'Gianluca', 'Gianni', 'Gilberto', 'Ginés', 'Ginés', 'Gisbert', 'Godofredo', 'Goliat', 'Gonzalo', 'Gopala', 'Gorō', 'Aksapada Gótama', 'Gottlieb', 'Govinda', 'Gregorio', 'Gritsa Madá', 'Guido', 'Guillermo', 'Guillén', 'Gumaro', 'Gustavo', 'Guy',
        'Hamza', 'Harold', 'Haroldo', 'Harry', 'Hassan', 'Héctor', 'Heihachi', 'Heihachirō', 'Heinz', 'Heliodoro', 'Henrik', 'Henrique', 'Henrique', 'Heraclio', 'Hercle', 'Heriberto', 'Herman', 'Hermann', 'Hermenegildo', 'Herodes', 'Heráclides', 'Higinio', 'Hilario', 'Hipólito', 'Hisashi', 'Homero', 'Homobono', 'Honorato', 'Honorio', 'Horacio', 'Horatio', 'Hormisdas', 'Huberto', 'Hugo', 'Humberto', 'Hércules',
        'Iaksa', 'Ichirō', 'Ignacio', 'Iker',
        'Iksuaku', 'Indalecio', 'Isaac', 'Isaías', 'Isidoro', 'Isidro', 'Ismael', 'Israel', 'Iudistira', 'Ivo', 'Iván', 'Izan',
        'Jacobo', 'Jael', 'Jaganatha', 'Jaime', 'Jair', 'Jairo', 'Jalaiuda', 'Jamie', 'Janto', 'Jarischandra', 'Javier', 'Jean-François', 'Jean-Pierre', 'Jemachandra', 'Jenaro', 'Jeremías', 'Jerónimo', 'Jirania Kashipú', 'Jirō', 'Joachim', 'Joaquín', 'Job', 'Joel', 'Johann', 'Jorge', 'Josefino', 'Josmar', 'Jossmar', 'Josu', 'Josué', 'José', 'José Luis', 'José María', 'Josías', 'Juan', 'Juanelo', 'Judá', 'Julio', 'Julián',
        'Kailash', 'Kalidasa', 'Kanua', 'Kardama', 'Karttikeya', 'Kavi', 'Kedara', 'Kedarnath', 'Kemuel', 'Kenneth', 'Kenzō', 'Kintuillang', 'Kojirō', 'Ksatri', 'Kumbhá Karna', 'Kushika',
        'Labán', 'Ladislao', 'Lain', 'Lalo', 'Laureano', 'Lautaro', 'Leandro', 'Leonardo', 'Leopoldo', 'Leví', 'Licas', 'Lior', 'Loïc', 'Lokapala', 'Lorenzo', 'Lubomir', 'Lucas', 'Ludovico', 'Ludovico', 'Luis', 'Lázaro',
        'Maffeo', 'Maia Asura', 'Mamerto', 'Mansur', 'Manuel', 'Marcelino', 'Marcelo', 'Marcos', 'Mariano', 'Mario', 'Martiño', 'Martín', 'Matariswan', 'Mateo', 'Mauricio', 'Medardo', 'Michel', 'Miguel', 'Mikel', 'Miqueas', 'Mirko', 'Miroslav', 'Moritz', 'Mstislav', 'Muhammad', 'Mustafá', 'Mázatl',
        'Nahuel', 'Nahum', 'Nala', 'Nandi', 'Narakasura', 'Nataraja', 'Nath', 'Natán', 'Nehemías', 'Nelson', 'Nepomuk', 'Néstor', 'Nicolás', 'Nikita', 'Nimi', 'Norberto', 'Noé', 'Námaste', 'Níriti',
        'Odón', 'Oier', 'Omar', 'Onesíforo', 'Ordoño', 'Orlando', 'Óscar', 'Osmar', 'Osvaldo', 'Oswaldo',
        'Pablo', 'Panagiotis', 'Pándava', 'Pandú', 'Pantaleón', 'Paolo', 'Parashurama', 'Pariksit', 'Parsuá', 'Paryania', 'Pascual', 'Patricio', 'Pedro', 'Philippe', 'Pol', 'Pradiumna', 'Premislao', 'Primitivo', 'Prithú', 'Prudencio', 'Publio', 'Pulaja', 'Puloman', 'Purushottama', 'Pánfilo', 'Púrusha',
        'Quirico',
        'Radomir', 'Radosław', 'Rafael', 'Raghú', 'Raimundo', 'Rainer', 'Rajú', 'Ravana', 'Raúl', 'Regis', 'Remigio', 'Renato', 'René', 'Reto', 'Reza', 'Ribhu',
        'Ricardo', 'Rinchen Gyaltsen', 'Rishikesh', 'Roberto', 'Rodolfo', 'Rodrigo', 'Rogelio', 'Roger', 'Rommel', 'Rosendo', 'Ráksasa',
        'Saburō', 'Sadrac', 'Sajádeva', 'Sakya Trizin', 'Salvador', 'Sambor', 'Samuel', 'Sancho', 'Santiago', 'Santiago', 'Sanyaia', 'Šarūnas', 'Satrayit', 'Saúl', 'Selim', 'Laksman Sen', 'Senén', 'Sergio', 'Shalivájana', 'Adi Shankara', 'Shinzō', 'Shirō', 'Shiva', 'Siddha', 'Sidonio', 'Simón', 'Slavko', 'Slawomir', 'Srivatsa', 'Stefano', 'Sudraka', 'Sukra', 'Suleimán', 'Suyog',
        'Taichi', 'Takumi', 'Tal', 'Timoteo', 'Tinia', 'Tito', 'Tobías', 'Togarma', 'Tomás', 'Tonatiuh', 'Toussaint', 'Tuastri',
        'Ubaldo', 'Uranius', 'Urbano', 'Urbano', 'Uriel', 'Urso', 'Urías',
        'Václav', 'Vairochana', 'Vaiu', 'Vajrapani', 'Valerio', 'Valéry', 'Vasudeva', 'Vicente', 'Víctor', 'Vidura', 'Vishua Karma', 'Visnú', 'Vito',
        'Zabulón', 'Zacarías', 'Zanobi', 'Zaqueo', 'Zbigniew', 'Zoran'
    );

    /**
     * @link https://es.wikipedia.org/wiki/Categoría:Nombres_femeninos
     */
    protected static $firstNameFemale = array('Abigaíl', 'Adela', 'Adelaida', 'Áditi', 'Adoración', 'Adriana', 'África', 'Aglaé', 'Agripina', 'Águeda', 'Ai', 'Aída', 'Ailén', 'Ainhoa', 'Aitana', 'Alaksmí', 'Alba', 'Alejandra', 'Alicia', 'Alida', 'Almudena', 'Aloïse', 'Altagracia', 'Amalia', 'Amanda', 'Amatallah', 'Amaya', 'Ambá', 'Amelia', 'Amparo', 'Ana', 'Ana María', 'Anahí', 'Andrea', 'Ángela', 'Ángeles', 'Angelina', 'Angustias', 'Angélica', 'Anneliese', 'Antonella', 'Anunciación', 'Apsará', 'Araceli', 'Aránzazu', 'Ariadna', 'Ariel', 'Arlette', 'Arminda', 'Arundhati', 'Astrid', 'Asunción', 'Aurora', 'Ayelén', 'Aylin', 'Ayodhya', 'Azahara', 'Azucena',
        'Beatrice', 'Beatriz', 'Begoña', 'Belinda', 'Belén', 'Berenguela', 'Berenice', 'Bernie', 'Berta', 'Betsabé', 'Blanca', 'Blasa', 'Bogna', 'Bogumila', 'Bożena', 'Briseida', 'Brígida', 'Bárbara',
        'Camila', 'Candelaria', 'Caridad', 'Carmela', 'Carmen', 'Casandra', 'Casia', 'Catalina', 'Cecilia', 'Cecilia', 'Celia', 'Chiquinquirá', 'Cilia', 'Citlalli', 'Clara', 'Claudia', 'Clementina', 'Cleopatra', 'Clotilde', 'Concepción', 'Consolación', 'Constanza', 'Consuelo', 'Covadonga', 'Cristal', 'Cristina', 'Cunegunda', 'Cynthia',
        'Dafne', 'Dalila', 'Dámaris', 'Dania', 'Débora', 'Delia', 'Delilah', 'Demetria', 'Denisa', 'Denise', 'Devakī', 'Devájuti', 'Deyanira', 'Dharani', 'Diana', 'Diti', 'Dolores', 'Dorcas', 'Dorotea', 'Draupadi', 'Drusila', 'Dánae',
        'Edurne', 'Efigenia', 'Eiko', 'Elena', 'Elisa', 'Elizabeth', 'Eloísa', 'Elsa', 'Elvira', 'Emma', 'Engracia', 'Enriqueta', 'Erin', 'Escarlata', 'Esperanza', 'Estefanía', 'Ester', 'Eudoxia', 'Éunice', 'Eva',
        'Fe', 'Felicidad', 'Fernanda', 'Flora', 'Florencia', 'Francina', 'Françoise', 'Fátima',
        'Gabriela', 'Gema', 'Genoveva', 'Genoveva', 'Georgina', 'Gertrudis', 'Ginebra', 'Giovanna', 'Gisela', 'Gloria', 'Gopi', 'Gracia',
        'Harriet', 'Haydée', 'Helga', 'Herminia', 'Hitomi', 'Holi', 'Hortensia', 'Hosanna',
        'Iaksi', 'Idoia', 'Ileana', 'Imelda', 'Ingeborg', 'Ingrid', 'Inés', 'Irene', 'Iris', 'Isabel', 'Isidora', 'Isidoro', 'Itziar',
        'Jacqueline', 'Jadwiga',
        'Jael', 'Jessica', 'Jimena', 'Josefa', 'Jovita', 'Juana', 'Judit', 'Julia', 'Julieta',
        'Kaede', 'Kali', 'Kalpa', 'Kámala', 'Kamalátmika', 'Karen', 'Karina', 'Keiko', 'Keila', 'Kira', 'Kirara', 'Kumiko', 'Kundalini', 'Kuntí',
        'Laura', 'Leila', 'Leilani', 'Leire', 'Leticia', 'Liberata', 'Liliana', 'Linda', 'Llacolén', 'Lopa Mudra', 'Lorena', 'Lourdes', 'Lucía', 'Ludmila', 'Luisa', 'Luz',
        'Macarena', 'Magali', 'Magdalena', 'Maite', 'Majá Vidiá', 'Malena', 'Małgorzata', 'Malinalli', 'Mantra', 'Marcelina', 'Margaret', 'Margarita', 'Marguerite', 'Mariana', 'Maribel', 'Mariel', 'Mariela', 'Marina', 'Marta', 'Martina de Roma', 'María', 'María Amalia', 'María Ana', 'María Cristina', 'María del Mar', 'María Luisa', 'María Pía', 'María Teresa', 'Matrikas', 'Megumi', 'Melania', 'Melisa', 'Mencía', 'Mia', 'Michelle', 'Milca', 'Millaray', 'Miranda', 'Mireya', 'Mirtha', 'Mónica', 'Montserrat', 'Muriel', 'Máxima',
        'Nadezhda', 'Nadia', 'Nahia', 'Nancy', 'Natalia', 'Nayra', 'Nell', 'Nerea', 'Nicole', 'Nikté', 'Noelia', 'Noemí', 'Norma', 'Nuria', 'Níriti',
        'Ofelia', 'Olga', 'Olinta', 'Olivia', 'Ophelia',
        'Paloma', 'Pamela', 'Paola', 'Parvati', 'Patricia', 'Patricia', 'Paula', 'Paulina', 'Paz', 'Petra', 'Pilar', 'Prakriti', 'Pritiví',
        'Radha', 'Rajasuya', 'Raminta', 'Rayén', 'Rebeca', 'Renata', 'Richa', 'Richa', 'Rita', 'Rocío', 'Rosalba', 'Rosalinda', 'Rosario', 'Rut',
        'Sabine', 'Sabrina', 'Sadako', 'Sakti', 'Salma', 'Samhita', 'Samira', 'Sancha', 'Sandra', 'Sara', 'Saramá', 'Saraniú', 'Sarasvati', 'Satiá Bhama', 'Sattva', 'Selene', 'Setefilla', 'Shakha', 'Shakira', 'Shakuntalá', 'Shirin', 'Sigrid', 'Silvia', 'Sinivalí', 'Sinéad', 'Sita', 'Sofía', 'Sonia', 'Sophie', 'Soraya', 'Suargá', 'Subhadrá', 'Sulamita', 'Susana', 'Sāṃkhya',
        'Taciana', 'Talía', 'Tamar', 'Tamara', 'Tania', 'Tania', 'Teresa', 'Triana',
        'Úrsula', 'Urvashí',
        'Valentina', 'Valeria', 'Valme', 'Vanessa', 'Vega', 'Vera', 'Verónica', 'Vicenta',
        'Victoria', 'Virginia',
        'Wendy',
        'Xiomara', 'Xóchitl',
        'Yambavati', 'Iashodá', 'Yolanda', 'Yuko', 'Yólotl',
        'Zoe', 'Zoraida', 'Zulema'
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_common_Spanish_surnames#Mexico
     */
    protected static $lastNames = array(
        "Aguilar", "Álvarez",
        "Castillo", "Castro", "Chávez", "Contreras", "Cortez", "Cruz",
        "Díaz", "Domínguez",
        "Estrada",
        "Fernández", "Flores",
        "García", "Garza", "Gómez", "González", "Guerrero", "Gutiérrez", "Guzmán",
        "Hernández", "Herrera",
        "Jiménez", "Juárez",
        "Luna",
        "Martínez", "Medina", "Méndez", "Mendoza", "Morales", "Moreno", "Muñoz",
        "Ortega", "Ortíz",
        "Pérez",
        "Ramírez", "Ramos", "Reyes", "Rivera", "Rodríguez", "Rojas", "Romero", "Ruíz",
        "Salazar", "Sánchez", "Soto",
        "Torres",
        "Vargas", "Vásquez", "Velásquez",
    );


    /**
     * @inheritdoc
     *
     * @example Castro Rodríguez
     */
    public function fullLastName()
    {
        return static::lastName() . ' ' . static::lastName();
    }

    /**
     * @example Fernández
     * @return string
     */
    public function lastName()
    {
        return static::randomElement(static::$lastNames);
    }

    /**
     * generates CURP (uique identity code for both citizens and residents of Mexico)
     *
     * @param string    $firstName      First name
     * @param string    $lastNameFather Fathers last name
     * @param string    $lastNameMother Mothers last name
     * @param \DateTime $birthDate      Birth date
     * @param string    $gender         Gender
     * @param string    $state          State of birth
     *
     * @return string  generated curp
     *
     * @link https://github.com/hectorip/RFC-CURP-Mexico/blob/master/src/mxk.js ported from this
     * @link https://en.wikipedia.org/wiki/Unique_Population_Registry_Code
     */
    public static function curp($firstName = null, $lastNameFather = null, $lastNameMother = null, $birthDate = null, $gender = null, $state = null)
    {
        $gender = in_array($gender, array(Person::GENDER_MALE, Person::GENDER_FEMALE)) ? $gender : static::randomElement(array(Person::GENDER_MALE, Person::GENDER_FEMALE));

        if ($gender === Person::GENDER_MALE) {
            $firstName = static::removeAccents(static::removeCommonNames(mb_strtoupper($firstName ? $firstName : static::firstNameMale())));
        } else {
            $firstName = static::removeAccents(static::removeCommonNames(mb_strtoupper($firstName ? $firstName : static::firstNameFemale())));
        }

        $lastNameFather = static::removeAccents(static::removePrefixes(mb_strtoupper($lastNameFather ? $lastNameFather : static::randomElement(static::$lastNames))));
        $lastNameMother = static::removeAccents(static::removePrefixes(mb_strtoupper($lastNameMother ? $lastNameMother : static::randomElement(static::$lastNames))));
        $birthDate = $birthDate ? $birthDate : \Faker\Provider\DateTime::dateTimeBetween();

        $curp = static::commonPartBetweenCurpAndRfc('curp', $firstName, $lastNameFather, $lastNameMother, $birthDate);

        if ($gender == Person::GENDER_MALE) {
            $curp .= 'H';
        } else {
            $curp .= 'M';
        }
        $curp .= in_array($state, static::$states) ? $state : 'NE';

        $curp .= static::secondInternalConsonant($lastNameFather);
        $curp .= static::secondInternalConsonant($lastNameMother);
        $curp .= static::secondInternalConsonant($firstName);

        if ($birthDate->format('Y') <= 2000) {
            $curp .= static::bothify('#');
        } else {
            $curp .= strtoupper(static::bothify('?'));
        }
        $curp .= static::getLastChar($curp);
        return $curp;
    }

    private static function getLastChar($curp)
    {
        $characters = array(
            '0' => '00',
            '1' => '01',
            '2' => '02',
            '3' => '03',
            '4' => '04',
            '5' => '05',
            '6' => '06',
            '7' => '07',
            '8' => '08',
            '9' => '09',
            'A' => '10',
            'B' => '11',
            'C' => '12',
            'D' => '13',
            'E' => '14',
            'F' => '15',
            'G' => '16',
            'H' => '17',
            'I' => '18',
            'J' => '19',
            'K' => '20',
            'L' => '21',
            'M' => '22',
            'N' => '23',
            '-' => '24',
            'O' => '25',
            'P' => '26',
            'Q' => '27',
            'R' => '28',
            'S' => '29',
            'T' => '30',
            'U' => '31',
            'V' => '32',
            'W' => '33',
            'X' => '34',
            'Y' => '35',
            'Z' => '36',
            '*' => '37',
        );

        $curpVerifier = '';
        foreach (str_split($curp) as $curpChar) {
            $curpVerifier .= key_exists($curpChar, $characters) ? $characters[$curpChar] : '00';
        }
        $counterDigit = 0;
        for ($i = 1; $i <= strlen($curp); $i++) {
            $counterDigit += (int)$curpVerifier{($i * 2 - 1)} * (19 - $i);
        }
        $digitModule = $counterDigit % 10;
        if ($digitModule > 0) {
            $digitVerifier = 10 - $digitModule;
            if (strlen($digitVerifier) > 1) {
                $digitVerifier = substr($digitVerifier, -1);
            }
            return $digitVerifier;
        }
        return $digitModule;
    }

    /**
     * generates RFC
     *
     * @param string    $firstName      First name
     * @param string    $lastNameFather Fathers last name
     * @param string    $lastNameMother Mothers last name
     * @param \DateTime $birthDate      Birth date
     * @param string    $gender         Gender
     *
     * @return string  Generated RFC
     *
     * @link https://github.com/hectorip/RFC-CURP-Mexico/blob/master/src/mxk.js ported from this
     * @link https://es.wikipedia.org/wiki/Registro_Federal_de_Contribuyentes_(México)
     */
    public static function personRfc($firstName = null, $lastNameFather = null, $lastNameMother = null, $birthDate = null, $gender = null)
    {
        $gender = in_array($gender, array(Person::GENDER_MALE, Person::GENDER_FEMALE)) ? $gender : static::randomElement(array(Person::GENDER_MALE, Person::GENDER_FEMALE));

        if ($gender === Person::GENDER_MALE) {
            $firstName = static::removeAccents(mb_strtoupper($firstName ? $firstName : static::firstNameMale()));
        } else {
            $firstName = static::removeAccents(mb_strtoupper($firstName ? $firstName : static::firstNameFemale()));
        }

        $lastNameFather = static::removeAccents(mb_strtoupper($lastNameFather ? $lastNameFather : static::randomElement(static::$lastNames)));
        $lastNameMother = static::removeAccents(mb_strtoupper($lastNameMother ? $lastNameMother : static::randomElement(static::$lastNames)));
        $birthDate = $birthDate ? $birthDate : \Faker\Provider\DateTime::dateTimeBetween();

        $rfc = static::commonPartBetweenCurpAndRfc('rfc', $firstName, $lastNameFather, $lastNameMother, $birthDate);
        $rfc .= strtoupper(static::lexify('???'));

        return $rfc;
    }

    /**
     * HELPERS
     */

    protected static function commonPartBetweenCurpAndRfc($type, $firstName = null, $lastNameFather = null, $lastNameMother = null, $birthDate = null)
    {
        $common  = substr($lastNameFather, 0, 1);
        $common .= static::firstInternalVowel($lastNameFather);
        $common .= $lastNameMother ? substr($lastNameMother, 0, 1) : 'X';
        $common .= substr($firstName, 0, 1);
        if ($type == 'curp') {
            $common = str_replace(array_keys(static::$badWordsCURP), array_values(static::$badWordsCURP), $common);
        } else {
            $common = str_replace(array_keys(static::$badWordsRFC), array_values(static::$badWordsRFC), $common);
        }
        $common .= $birthDate->format('ymd');
        return $common;
    }

    protected static function firstInternalVowel($word)
    {
        if (preg_match('/([AEIOU])/', substr($word, 1), $matches)) {
            return $matches[1];
        }
        return 'X'; // If first internal vowel is not found, then it should be X
    }

    protected static function secondInternalConsonant($word)
    {
        if (preg_match('/.[AEIOU]*([BCDFGHJKLMNPQRSTUVWXYZ]{1})/', $word, $matches)) {
            return $matches[1];
        }
        return 'X'; // If second internal consonant is not found, then it should be X
    }

    protected static function removeCommonNames($name)
    {
        foreach (static::$notAcceptedNames as $notAcceptedName) {
            $name = preg_replace($notAcceptedName, '', $name);
        }
        return $name;
    }
    
    protected static function removePrefixes($name)
    {
        foreach (static::$prefixes as $prefix) {
            $name = preg_replace($prefix, '', $name);
        }
        return $name;
    }

    protected static function removeAccents($name)
    {
        return str_replace(array_keys(static::$accents), array_values(static::$accents), $name);
    }

    protected static $notAcceptedNames = array(
        '/^MARIA DEL /',
        '/^MARIA DE LOS /',
        '/^MARIA /',
        '/^JOSE DE /',
        '/^JOSE /',
        '/^MA. /',
        '/^MA /',
        '/^M. /',
        '/^J. /',
        '/^J /'
    );

    protected static $prefixes = array(
        '/^DE /',
        '/^DEL /'
    );

    /**
     * @link https://github.com/hectorip/RFC-CURP-Mexico/blob/master/src/mxk.js
     */
    protected static $badWordsCURP = array(
        'BACA' => 'BXCA',
        'LOCO' => 'LXCO',
        'BAKA' => 'BXKA',
        'BUEI' => 'BXEI',
        'BUEY' => 'BXEY',
        'CACA' => 'CXCA',
        'CACO' => 'CXCO',
        'CAGA' => 'CXGA',
        'CAGO' => 'CXGO',
        'CAKA' => 'CXKA',
        'CAKO' => 'CXKO',
        'COGE' => 'CXGE',
        'COGI' => 'CXGI',
        'COJA' => 'CXJA',
        'COJE' => 'CXJE',
        'COJI' => 'CXJI',
        'COJO' => 'CXJO',
        'COLA' => 'CXLA',
        'CULO' => 'CXLO',
        'FALO' => 'FXLO',
        'FETO' => 'FXTO',
        'GETA' => 'GXTA',
        'GUEI' => 'GXEI',
        'GUEY' => 'GXEY',
        'JETA' => 'JXTA',
        'JOTO' => 'JXTO',
        'KACA' => 'KXCA',
        'KACO' => 'KXCO',
        'KAGA' => 'KXGA',
        'KAGO' => 'KXGO',
        'KAKA' => 'KXKA',
        'KAKO' => 'KXKO',
        'KOGE' => 'KXGE',
        'KOGI' => 'KXGI',
        'KOJA' => 'KXJA',
        'KOJE' => 'KXJE',
        'KOJI' => 'KXJI',
        'KOJO' => 'KXJO',
        'KOLA' => 'KXLA',
        'KULO' => 'KXLO',
        'LILO' => 'LXLO',
        'LOKA' => 'LXKA',
        'LOKO' => 'LXKO',
        'MAME' => 'MXME',
        'MAMO' => 'MXMO',
        'MEAR' => 'MXAR',
        'MEAS' => 'MXAS',
        'MEON' => 'MXON',
        'MIAR' => 'MXAR',
        'MION' => 'MXON',
        'MOCO' => 'MXCO',
        'MOKO' => 'MXKO',
        'MULA' => 'MXLA',
        'MULO' => 'MXLO',
        'NACA' => 'NXCA',
        'NACO' => 'NXCO',
        'PEDA' => 'PXDA',
        'PEDO' => 'PXDO',
        'PENE' => 'PXNE',
        'PIPI' => 'PXPI',
        'PITO' => 'PXTO',
        'POPO' => 'PXPO',
        'PUTA' => 'PXTA',
        'PUTO' => 'PXTO',
        'QULO' => 'QXLO',
        'RATA' => 'RXTA',
        'ROBA' => 'RXBA',
        'ROBE' => 'RXBE',
        'ROBO' => 'RXBO',
        'RUIN' => 'RXIN',
        'SENO' => 'SXNO',
        'TETA' => 'TXTA',
        'VACA' => 'VXCA',
        'VAGA' => 'VXGA',
        'VAGO' => 'VXGO',
        'VAKA' => 'VXKA',
        'VUEI' => 'VXEI',
        'VUEY' => 'VXEY',
        'WUEI' => 'WXEI',
        'WUEY' => 'WXEY'
    );

    /**
     * @link https://github.com/hectorip/RFC-CURP-Mexico/blob/master/src/mxk.js
     */
    protected static $badWordsRFC = array(
        'BUEI' => 'BUEX',
        'BUEY' => 'BUEX',
        'CACA' => 'CACX',
        'CACO' => 'CACX',
        'CAGA' => 'CAGX',
        'CAGO' => 'CAGX',
        'CAKA' => 'CAKX',
        'COGE' => 'COGX',
        'COJA' => 'COJX',
        'COJE' => 'COJX',
        'COJI' => 'COJX',
        'COJO' => 'COJX',
        'CULO' => 'CULX',
        'FETO' => 'FETX',
        'GUEY' => 'GUEX',
        'JOTO' => 'JOTX',
        'KACA' => 'KACX',
        'KACO' => 'KACX',
        'KAGA' => 'KAGX',
        'KAGO' => 'KAGX',
        'KOGE' => 'KOGX',
        'KOJO' => 'KOJX',
        'KAKA' => 'KAKX',
        'KULO' => 'KULX',
        'MAME' => 'MAMX',
        'MAMO' => 'MAMX',
        'MEAR' => 'MEAX',
        'MEON' => 'MEOX',
        'MION' => 'MIOX',
        'MOCO' => 'MOCX',
        'MULA' => 'MULX',
        'PEDA' => 'PEDX',
        'PEDO' => 'PEDX',
        'PENE' => 'PENX',
        'PUTA' => 'PUTX',
        'PUTO' => 'PUTX',
        'QULO' => 'QULX',
        'RATA' => 'RATX',
        'RUIN' => 'RUIX',
    );

    /**
     * @link https://github.com/hectorip/RFC-CURP-Mexico/blob/master/src/mxk.js
     */
    protected static $accents = array(
        'Á' => 'A',
        'É' => 'E',
        'Í' => 'I',
        'Ó' => 'O',
        'Ú' => 'U'
    );

    protected static $states = array('AS', 'BC', 'BS', 'CC', 'CL', 'CM', 'CS', 'CH', 'DF', 'DG', 'GT', 'GR', 'HG', 'JC', 'MC', 'MN', 'MS', 'NT', 'NL', 'OC', 'PL', 'QT', 'QR', 'SP', 'SL', 'SR', 'TC', 'TS', 'TL', 'VZ', 'YN', 'ZS');
}
