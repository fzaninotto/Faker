<?php

namespace Faker\Provider\es_MX;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameFather}} {{lastNameMother}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFather}} {{lastNameMother}}',
    );

    protected static $stateAbbr = array(
        'AS', 'BC', 'BS', 'CC', 'CL', 'CM', 'CS', 'CH', 'DF', 'DG', 'GT', 'GR', 'HG', 'JC', 'MC', 'MN', 'MS', 'NT', 'NL', 'OC', 'PL', 'QT', 'QR', 'SP', 'SL', 'SR', 'TC', 'TS', 'TL', 'VZ', 'YN', 'ZS'
    );

    /**
     * {@link} http://www.studentsoftheworld.info/penpals/stats.php3?Pays=MEX
     */
    protected static $firstNameMale = array('Carlos', 'Daniel', 'Jose', 'Eduardo', 'Luis', 'Jorge', 'Angel', 'Alejandro', 'Fernando', 'Sergio', 'Ivan', 'Jesus', 'Isaac', 'Cesar', 'Christian', 'Juan Carlos', 'Juan', 'Oscar', 'Adrian', 'Arturo', 'David', 'Diego', 'Enrique', 'Rafael', 'Emmanuel', 'Alex', 'Armando', 'Antonio', 'Rodrigo', 'Erick', 'Alberto', 'José Luis', 'Roberto', 'Andrès', 'Pablo', 'Jonathan', 'Alexis', 'Julio', 'Kevin', 'Edgar', 'Ramiro', 'Miguel', 'Martin', 'Francisco', 'Hugo', 'Ricardo', 'Victor', 'Ruben', 'Humberto', 'MARIO', 'Luis Fernando', 'Gabriel', 'Mauricio', 'Joaquín', 'Israel', 'Heriberto', 'Mariana', 'Rene', 'Raul', 'Hector', 'Hibram', 'Bryan', 'Horacio', 'Benjamin', 'Fede', 'Alan', 'Moises', 'Pepe', 'Fidel', 'Frank', 'Marco antonio', 'Chris', 'Michael', 'Omar', 'Saul Omar', 'Sebastian', 'Aldair', 'Diana', 'Gerardo', 'Eliseo', 'Brian', 'Alexander', 'Roger', 'Juan Manuel', 'Brandon', 'Yoet', 'Abraham', 'Cristian', 'Javier', 'Lalo', 'Marco', 'Maximiliano', 'Salvador', 'Fredy', 'Claudio', 'Esteban', 'Memo', 'Andre', 'Rivera', 'Josue');

    protected static $firstNameFemale = array('Diana', 'Daniela', 'Fernanda', 'Andrea', 'Ana', 'María', 'Alejandra', 'Mariana', 'Karla', 'Gabriela', 'Adriana', 'Jazmin', 'Samantha', 'Itzel', 'Rosa', 'Elizabeth', 'Viridiana', 'Brenda', 'Melissa', 'Sara', 'Jessica', 'Gaby', 'Miriam', 'Karen', 'Esmeralda', 'Laura', 'Frida', 'Alondra', 'Rocio', 'Karina', 'Paola', 'Marisol', 'Ali', 'Dulce', 'Valeria', 'Flor', 'Marian', 'Alexa', 'Tania', 'Paula', 'Michelle', 'Alma', 'Carolina', 'Claudia', 'Yazmin', 'Paulina', 'Cynthia', 'Liz', 'Lorna', 'Erika', 'Denisse', 'Clarisa', 'Perla', 'Natalia', 'Lizeth', 'Rebeca', 'Anahí', 'Fanny', 'LETICIA', 'Mayra', 'Maribel', 'Maria Fernanda', 'Marcela', 'Julia', 'Cecilia', 'Giselle', 'Violeta', 'Nelly', 'Sandy', 'Estefania', 'Abril', 'Cris', 'Silvia', 'Sofia', 'Lupita', 'Beatriz', 'Areli', 'Aimee', 'Victoria', 'Susy Benvidez', 'Noemi', 'Aranza', 'Cristina', 'Naomi', 'LeTy', 'Yesenia', 'Gabby', 'Eunice', 'Jenny', 'Leonor', 'Clarissa', 'Vale', 'Pasett', 'Sarai', 'Jhoaly', 'Annie', 'Angie', 'Dafne', 'Tonantzin', 'Lucy');

    /**
     * {@link} http://surnames.behindthename.com/submit/names/usage/mexican
     */
    protected static $lastNames = array('Abrego', 'Acero', 'Achio', 'Acuna', 'Aguayo', 'Agüero', 'Águila', 'Alarcón', 'Aldea', 'Alegre', 'Alejandro', 'Alires', 'Almonte', 'Alonso', 'Álvaro', 'Alza', 'Amaro', 'Ambrìz', 'Amore', 'Anguino', 'Apollo', 'Aponte', 'Aràbia', 'Aragon', 'Arands', 'Araquistain', 'Archuleta', 'Arellano', 'Arencibia', 'Arganda', 'Arguedas', 'Ariza', 'Arjona', 'Armenteros', 'Armijo', 'Arrisola', 'Arroyo', 'Arroz', 'Arviso', 'Ascencio', 'Atencio', 'Avamilano', 'Aveiro', 'Avelino', 'Avena', 'Avenida', 'Ávila', 'Azconovieta', 'Badilla', 'Badillo', 'Baez', 'Baeza', 'Baglietto', 'Balceiro', 'Baliao', 'Ballon', 'Banez', 'Barcelona', 'Bardomiano', 'Barrino', 'Barrios', 'Basora', 'Bea', 'Beas', 'Becerra', 'Bega', 'Belasco', 'Benibamonde', 'Bezos', 'Biurrarena', 'Blasco', 'Bolar', 'Bomba', 'Bragado', 'Bravo', 'Brell', 'Bretaña', 'Bustamante', 'Caba', 'Caballero', 'Cabaña', 'Cabañas', 'Cabunilas', 'Caceres', 'Caldera', 'Calderón', 'Calero', 'Calvete', 'Camacho', 'Camargo', 'Campuzano', 'Can', 'Canomanuel', 'Cansino', 'Capella', 'Capriel', 'Caravantes', 'Cárave', 'Cáraves', 'Cárdenas', 'Carrasco', 'Carrasquillo', 'Carrera', 'Casa', 'Casabuena', 'Casagrande', 'Castanati', 'Castañeda', 'Caulin', 'Cava', 'Ceballos', 'Cedena', 'Ceja', 'Celda', 'Cendejas', 'Cespedes', 'Chapin', 'Charvel', 'Chavos', 'Chica', 'Cintron', 'Comica', 'Contreras', 'Cordero', 'Córdoba', 'Córdova', 'Corona', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortéz', 'Covarrubias', 'Covarubbias', 'Creus', 'Criado', 'Cuba', 'Cuenca', 'Cuesta', 'Cuneo', 'Cunillera', 'Davila', 'Dealava', 'Debain', 'Delassandis', 'De la torre', 'Delfino', 'De lima', 'Delringo', 'Del río', 'Del rio', 'Del rosario', 'Del yando', 'Descalzo', 'Diego', 'Diez', 'Diola', 'Dos santos', 'Enciñias', 'Enoc', 'Enríquez', 'España', 'Espejo', 'Espinosa de los monteros', 'Estes', 'Estol', 'Estrada', 'Evidente', 'Ferrando', 'Figueroa', 'Fontañez', 'Franch', 'Galarraga', 'Galarza', 'Galíndez', 'Galindo', 'Gall', 'Gamarra', 'Gamio', 'Garnica', 'Garzon', 'Gat', 'Gato', 'Gil de montes', 'Ginebra', 'Gordillo', 'Granado', 'Granados', 'Grande', 'Griego', 'Griminesa', 'Guevera', 'Guillermez', 'Guzmán', 'Hay', 'Henares', 'Hilario', 'Hurtado', 'Ibáñes', 'Iglesias', 'Iniesta', 'Innerarity', 'Jara', 'Jaramillo', 'Jareño', 'Jeremias', 'Junious', 'Kenobi', 'Kuilan', 'Labrador', 'Lacerda', 'Laguna', 'Larrazabal', 'Lazo', 'Leal', 'Ledo', 'León', 'Leonado', 'Leones', 'Leyva', 'Linde', 'Liz', 'Llamas', 'Lorén', 'Lorona', 'Lozano', 'Lucero', 'Lucía', 'Lugo', 'Luján', 'Luna', 'Macarro', 'Madera', 'Madrid', 'Madrigal', 'Madrigale', 'Madriz', 'Maestre', 'Magano', 'Maldonado', 'Manuel', 'Marchant', 'Marco', 'Marrero', 'Marroquin', 'Martelle', 'Marzo', 'Mathias', 'Matias', 'Matta', 'Matute', 'Mauleon', 'Mejia', 'Méla', 'Melillo', 'Mercado', 'Mesa', 'Mesías', 'Milán', 'Miranda', 'Mondragon', 'Montaña', 'Montano', 'Monteblanco', 'Montemayor', 'Montenegro', 'Montoya', 'Monzon', 'Morell', 'Moros', 'Moyano', 'Muñoz', 'Murcia', 'Naranjo', 'Navarrete', 'Navarro', 'Negro', 'Neico', 'Nessim', 'Niave', 'Nieto', 'Niño', 'Odilia', 'Orozco', 'Osuna', 'Pacana', 'Pacheco', 'Padilla', 'Palafox', 'Palencia', 'Pantoja', 'Pardo', 'Paz', 'Pedrosa', 'Pedroza');


    public function lastName()
    {
        return static::randomElement(static::$lastName).' '.static::randomElement(static::$lastName);
    }

    public function lastNameMother()
    {
        return static::randomElement(static::$lastNames);
    }

    public function lastNameFather()
    {
        return static::randomElement(static::$lastNames);
    }
    /**
     * generates CURP
     *
     * @param      string  $firstName       First name
     * @param      string  $lastNameFather  Fathers last name
     * @param      string  $lastNameMother  Mothers last name
     * @param      \DateTime  $birthDate    Birth date
     * @param      string  $gender          Gender
     * @param      string  $state           State of birth
     *
     * @return     string  generated curp
     *
     * @link       https://github.com/hectorip/RFC-CURP-Mexico/blob/master/src/mxk.js ported from this
     * @link       https://en.wikipedia.org/wiki/Unique_Population_Registry_Code
     */
    public static function curp($firstName = null, $lastNameFather = null, $lastNameMother = null, $birthDate = null, $gender = null, $state = null)
    {
        $gender = in_array($gender, array(Person::GENDER_MALE,Person::GENDER_FEMALE))?$gender:static::randomElement(array(Person::GENDER_MALE,Person::GENDER_FEMALE));

        if ($gender === Person::GENDER_MALE) {
            $firstName = self::removeAccents(self::removeCommonNames(mb_strtoupper($firstName?$firstName: static::firstNameMale())));
        } else {
            $firstName = self::removeAccents(self::removeCommonNames(mb_strtoupper($firstName?$firstName: static::firstNameFemale())));
        }

        $lastNameFather = self::removeAccents(self::removePrefixes(mb_strtoupper($lastNameFather?$lastNameFather: static::lastNameFather())));
        $lastNameMother = self::removeAccents(self::removePrefixes(mb_strtoupper($lastNameMother?$lastNameMother: static::lastNameMother())));
        $birthDate = $birthDate?$birthDate:\Faker\Provider\DateTime::dateTimeBetween();

        $curp = self::commonPart('curp', $firstName, $lastNameFather, $lastNameMother, $birthDate);

        if ($gender == Person::GENDER_MALE) {
            $curp .='H';
        } else {
            $curp .='M';
        }
        $curp .= in_array($state, self::$states)?$state: 'NE';

        $curp .= self::firstInternalConsonant($lastNameFather);
        $curp .= self::firstInternalConsonant($lastNameMother);
        $curp .= self::firstInternalConsonant($firstName);

        if ($birthDate->format('Y')<=2000) {
            $curp .= strtoupper(static::bothify('??'));
        } else {
            $curp .= static::bothify('##');
        }

        return $curp;
    }

    /**
     * generates RFC
     *
     * @param      string  $firstName       First name
     * @param      string  $lastNameFather  Fathers last name
     * @param      string  $lastNameMother  Mothers last name
     * @param      \DateTime  $birthDate    Birth date
     * @param      string  $gender          Gender
     *
     * @return     string  Generated RFC
     * 
     * @link       https://github.com/hectorip/RFC-CURP-Mexico/blob/master/src/mxk.js ported from this
     * @link       https://es.wikipedia.org/wiki/Registro_Federal_de_Contribuyentes_(México)
     */
    public static function personRfc($firstName = null, $lastNameFather = null, $lastNameMother = null, $birthDate = null, $gender = null)
    {
        $gender = in_array($gender, array(Person::GENDER_MALE,Person::GENDER_FEMALE))?$gender:static::randomElement(array(Person::GENDER_MALE,Person::GENDER_FEMALE));

        if ($gender === Person::GENDER_MALE) {
            $firstName = self::removeAccents(mb_strtoupper($firstName?$firstName: static::firstNameMale()));
        } else {
            $firstName = self::removeAccents(mb_strtoupper($firstName?$firstName: static::firstNameFemale()));
        }

        $lastNameFather = self::removeAccents(mb_strtoupper($lastNameFather?$lastNameFather: static::lastNameFather()));
        $lastNameMother = self::removeAccents(mb_strtoupper($lastNameMother?$lastNameMother: static::lastNameMother()));
        $birthDate = $birthDate?$birthDate:\Faker\Provider\DateTime::dateTimeBetween();

        $rfc = self::commonPart('rfc', $firstName, $lastNameFather, $lastNameMother, $birthDate);
        $rfc .= strtoupper(static::lexify('???'));

        return $rfc;
    }

    /**
     * HELPERS
     */

    protected static function commonPart($type, $firstName = null, $lastNameFather = null, $lastNameMother = null, $birthDate = null)
    {
        $common  = substr($lastNameFather, 0,1);
        $common .= self::firstInternalVowel($lastNameFather);
        $common .= $lastNameMother?substr($lastNameMother, 0,1):'X';
        $common .= substr($firstName, 0,1);
        if ($type == 'curp') {
            $common = str_replace(array_keys(self::$badWordsCURP), array_values(self::$badWordsCURP), $common);
        } else {
            $common = str_replace(array_keys(self::$badWordsRFC), array_values(self::$badWordsRFC), $common);
        }
        $common .=$birthDate->format('ymd');
        return $common;
    }

    protected static function firstInternalVowel($word)
    {
        if(preg_match('([AEIOU])', $word, $matches)){
            return $matches[0];
        }
        return 'X';
    }

    protected static function firstInternalConsonant($word)
    {
        if(preg_match('([BCDFGHJKLMNPQRSTUVWXYZ])', $word, $matches)){
            return $matches[0];
        }
        return 'X';
    }

    protected static function removeCommonNames($name)
    {
        foreach (self::$notAcceptedNames as $notAcceptedName) {
            $name = preg_replace($notAcceptedName,'',$name);
        }
        return $name;
    }
    protected static function removePrefixes($name)
    {
        foreach (self::$prefixes as $prefix) {
            $name = preg_replace($prefix,'',$name);
        }
        return $name;
    }
    protected static function removeAccents($name)
    {
        return str_replace(array_keys(self::$accents), array_values(self::$accents), $name);
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

    protected static $badWordsCURP = array(
        "BACA" => "BXCA",
        "LOCO" => "LXCO",
        "BAKA" => "BXKA",
        "BUEI" => "BXEI",
        "BUEY" => "BXEY",
        "CACA" => "CXCA",
        "CACO" => "CXCO",
        "CAGA" => "CXGA",
        "CAGO" => "CXGO",
        "CAKA" => "CXKA",
        "CAKO" => "CXKO",
        "COGE" => "CXGE",
        "COGI" => "CXGI",
        "COJA" => "CXJA",
        "COJE" => "CXJE",
        "COJI" => "CXJI",
        "COJO" => "CXJO",
        "COLA" => "CXLA",
        "CULO" => "CXLO",
        "FALO" => "FXLO",
        "FETO" => "FXTO",
        "GETA" => "GXTA",
        "GUEI" => "GXEI",
        "GUEY" => "GXEY",
        "JETA" => "JXTA",
        "JOTO" => "JXTO",
        "KACA" => "KXCA",
        "KACO" => "KXCO",
        "KAGA" => "KXGA",
        "KAGO" => "KXGO",
        "KAKA" => "KXKA",
        "KAKO" => "KXKO",
        "KOGE" => "KXGE",
        "KOGI" => "KXGI",
        "KOJA" => "KXJA",
        "KOJE" => "KXJE",
        "KOJI" => "KXJI",
        "KOJO" => "KXJO",
        "KOLA" => "KXLA",
        "KULO" => "KXLO",
        "LILO" => "LXLO",
        "LOKA" => "LXKA",
        "LOKO" => "LXKO",
        "MAME" => "MXME",
        "MAMO" => "MXMO",
        "MEAR" => "MXAR",
        "MEAS" => "MXAS",
        "MEON" => "MXON",
        "MIAR" => "MXAR",
        "MION" => "MXON",
        "MOCO" => "MXCO",
        "MOKO" => "MXKO",
        "MULA" => "MXLA",
        "MULO" => "MXLO",
        "NACA" => "NXCA",
        "NACO" => "NXCO",
        "PEDA" => "PXDA",
        "PEDO" => "PXDO",
        "PENE" => "PXNE",
        "PIPI" => "PXPI",
        "PITO" => "PXTO",
        "POPO" => "PXPO",
        "PUTA" => "PXTA",
        "PUTO" => "PXTO",
        "QULO" => "QXLO",
        "RATA" => "RXTA",
        "ROBA" => "RXBA",
        "ROBE" => "RXBE",
        "ROBO" => "RXBO",
        "RUIN" => "RXIN",
        "SENO" => "SXNO",
        "TETA" => "TXTA",
        "VACA" => "VXCA",
        "VAGA" => "VXGA",
        "VAGO" => "VXGO",
        "VAKA" => "VXKA",
        "VUEI" => "VXEI",
        "VUEY" => "VXEY",
        "WUEI" => "WXEI",
        "WUEY" => "WXEY"
    );

    protected static $badWordsRFC = array(
        "BUEI" => "BUEX",
        "BUEY" => "BUEX",
        "CACA" => "CACX",
        "CACO" => "CACX",
        "CAGA" => "CAGX",
        "CAGO" => "CAGX",
        "CAKA" => "CAKX",
        "COGE" => "COGX",
        "COJA" => "COJX",
        "COJE" => "COJX",
        "COJI" => "COJX",
        "COJO" => "COJX",
        "CULO" => "CULX",
        "FETO" => "FETX",
        "GUEY" => "GUEX",
        "JOTO" => "JOTX",
        "KACA" => "KACX",
        "KACO" => "KACX",
        "KAGA" => "KAGX",
        "KAGO" => "KAGX",
        "KOGE" => "KOGX",
        "KOJO" => "KOJX",
        "KAKA" => "KAKX",
        "KULO" => "KULX",
        "MAME" => "MAMX",
        "MAMO" => "MAMX",
        "MEAR" => "MEAX",
        "MEON" => "MEOX",
        "MION" => "MIOX",
        "MOCO" => "MOCX",
        "MULA" => "MULX",
        "PEDA" => "PEDX",
        "PEDO" => "PEDX",
        "PENE" => "PENX",
        "PUTA" => "PUTX",
        "PUTO" => "PUTX",
        "QULO" => "QULX",
        "RATA" => "RATX",
        "RUIN" => "RUIX",
    );

    protected static $accents = array(
        'Á' => 'A',
        'É' => 'E',
        'Í' => 'I',
        'Ó' => 'O',
        'Ú' => 'U'
    );

    protected static $states = array('AS', 'BC', 'BS', 'CC', 'CL', 'CM', 'CS', 'CH', 'DF', 'DG', 'GT', 'GR', 'HG', 'JC', 'MC', 'MN', 'MS', 'NT', 'NL', 'OC', 'PL', 'QT', 'QR', 'SP', 'SL', 'SR', 'TC', 'TS', 'TL', 'VZ', 'YN', 'ZS');
}