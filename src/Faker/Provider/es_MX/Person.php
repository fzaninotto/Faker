<?php

namespace Faker\Provider\es_ES;

class Person extends \Faker\Provider\Person
{
    private static $crcMap=array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T');

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{suffix}}',
        '{{firstNameMale}} {{lastName}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{suffix}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{suffix}}',
    );

    /**
     * {@link} http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm
     */
    protected static $firstNameMale = array(
        'Aaron', 'Abel', 'Abimael', 'Abraham', 'Adalberto', 'Adan', 'Adiel', 'Adrian', 'Agustin', 'Aitor', 'Alan', 'Alberto', 'Aldayr', 'Aldo', 'Alejandro', 'Alex', 'Alexis', 'Alfonso', 'Alonso', 'Alvaro', 'Andres', 'Angel', 'Antonio', 'Ariberto', 'Arturo', 'Benjamin', 'Brandon', 'Brayan', 'Bruno', 'Bryan', 'Carlos', 'Cesar', 'César', 'Cristian', 'Christian', 'Daniel', 'Dagoberto', 'Dario', 'David', 'Diego', 'Edgard', 'Edson', 'Eduardo', 'Edwin', 'Efren', 'Eloy', 'Emmanuel', 'Emilio', 'Emiliano', 'Enrique', 'Ernesto', 'Eric', 'Erick', 'Erik', 'Esteban', 'Fausto', 'Favio', 'Flavio', 'Felipe', 'Fermín', 'Fernando', 'Francisco', 'Francisco Javier', 'Gabriel', 'Gael', 'Gerardo', 'German', 'Gonzalo', 'Guadalupe', 'Guillermo', 'Gustavo', 'Hector', 'Heriberto', 'Hernan', 'Hugo', 'Humberto', 'Ian', 'Ignacio', 'Iker', 'Irvin', 'Irving', 'Isaac', 'Ismael', 'Ivan', 'Jaime', 'Javier', 'Jesus', 'Jesús', 'Joel', 'Jordi', 'Jorge', 'Jorge Antonio', 'Jose', 'Jose Antonio', 'Jose Manuel', 'Josue', 'Juan', 'Juan de Dios', 'Juan Jose', 'Juan Manuel', 'Julio', 'Lucas', 'Luis', 'Manuel', 'Marco', 'Marcos', 'Mario', 'Mario Alberto', 'Martin', 'Marvin', 'Mateo', 'Miguel', 'Miguel Angel', 'Miguel Eduardo', 'Nicolas', 'Oliver', 'Omar', 'Oscar', 'Pablo', 'Pedro', 'Polo', 'Rafael', 'Raul', 'Rigoberto', 'Roberto', 'Rodrigo', 'Ruben', 'Samuel', 'Santiago', 'Saul', 'Sergio', 'Vicente', 'Victor',
    );

    protected static $firstNameFemale = array(
        'Abisai', 'Abril', 'Adelina', 'Aida', 'Aimar', 'Abigail', 'Abisai', 'Adriana', 'Alba', 'Alejandra', 'Alexandra', 'Alexia', 'Alicia', 'Alma', 'Ana', 'Ambar', 'Ana', 'Ana Karen', 'Anahi', 'Andrea', 'Angela', 'Angelica', 'Araceli', 'Ariana', 'Ariel', 'Aurora', 'Azarel', 'Barbara', 'Beatriz', 'Berta', 'Bianca', 'Blanca', 'Brenda', 'Brisa', 'Camila', 'Candelaria', 'Carla', 'Carlota', 'Carmen', 'Carolina', 'Cecilia', 'Celia', 'Chelsie', 'Cinthia', 'Clara', 'Claudia', 'Cristina', 'Cynthia', 'Daniela', 'Damaris', 'Danna', 'Delia', 'Deyanira', 'Diana', 'Dora', 'Edith', 'Elena', 'Elizabeth', 'Elsa', 'Emma', 'Erika', 'Esperanza', 'Eva', 'Evelyn', 'Fabiola', 'Fatima', 'Fernanda', 'Gabriela', 'Georgina', 'Gisela', 'Gloria', 'Guadalupe', 'Imelda', 'Ines', 'Irene', 'Isabel', 'Isela', 'Itzel', 'Ivana', 'Ivette', 'Jacqueline', 'Janeth', 'Jazmin', 'Jeannette', 'Jennifer', 'Jessica', 'Johana', 'Jimena', 'Julia', 'Juana', 'Karen', 'Karina', 'Karla', 'Karol', 'Katia', 'Kenia', 'Kimberly', 'Laura', 'Leslie', 'Lesly', 'Leticia', 'Libia', 'Lidia', 'Liliana', 'Linda', 'Lizeth', 'Lorena', 'Lourdes', 'Lucero', 'Lucia', 'Luz', 'Manuela', 'Mar', 'Mara', 'Marcela', 'Maria', 'Margarita', 'Mariana', 'Maribel', 'Marina', 'Marisol', 'Marta', 'Martha', 'Martina', 'Melissa', 'Mireia', 'Miriam', 'Monica', 'Nadia', 'Nancy', 'Natalia','Nayeli', 'Noelia', 'Nora', 'Norma', 'Odette', 'Olga', 'Olivia', 'Paola', 'Patricia', 'Paola', 'Paula', 'Perla', 'Raquel', 'Regina', 'Rene', 'Rita', 'Rocio', 'Romina', 'Rosa', 'Rosalia', 'Roxana', 'Salma', 'Samantha', 'Sandra', 'Sandy', 'Sara', 'Sarai', 'Sheyla', 'Silvia', 'Sofia', 'Stephanie', 'Susana', 'Teresa', 'Tania', 'Valentina', 'Valeria', 'Vanessa', 'Veronica','Vianey', 'Victoria', 'Viridiana', 'Viviana', 'Wendy', 'Xochitl', 'Yazmin', 'Yesenia', 'Yohanna', 'Yolanda', 'Yuriria', 'Zoe',
    );

    protected static $lastName = array(
        'Abrego', 'Abreu', 'Acevedo', 'Acosta', 'Acuña', 'Adame', 'Aguayo', 'Aguilar', 'Aguilera', 'Aguirre', 'Alanis', 'Alaniz', 'Alarcón', 'Alba', 'Alcala', 'Alcaraz', 'Alcántar', 'Alejandro', 'Alemán', 'Alfaro', 'Almanza', 'Almaraz', 'Almonte', 'Alonso', 'Altamirano', 'Alva', 'Alvarado', 'Amador', 'Amaya', 'Anaya', 'Andreu', 'Anguiano', 'Angulo', 'Antón', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Aranda', 'Arce', 'Arellano', 'Arenas', 'Arguello', 'Arias', 'Armas', 'Armendáriz', 'Armenta', 'Arredondo', 'Arreola', 'Arriaga', 'Arribas', 'Arroyo', 'Arteaga', 'Atempa', 'Avilés', 'Ayala', 'Baca', 'Badillo', 'Baeza', 'Bahena', 'Balderas', 'Ballesteros', 'Barajas', 'Barragán', 'Barraza', 'Barrera', 'Barrientos', 'Barrios', 'Barroso', 'Batista', 'Bautista', 'Bañuelos', 'Becerra', 'Beltrán', 'Benavides', 'Benito', 'Benítez', 'Bermúdez', 'Bernal', 'Blanco', 'Bonilla', 'Borrego', 'Bravo', 'Briones', 'Briseño', 'Brito', 'Bueno', 'Burgos', 'Bustamante', 'Bustos', 'Báez', 'Bétancourt', 'Caballero', 'Cabrera', 'Cadena', 'Caldera', 'Calderón', 'Calvillo', 'Camacho', 'Camarillo', 'Campos', 'Canales', 'Cano', 'Cantú', 'Caraballo', 'Carbajal', 'Carballo', 'Cardenas', 'Cardona', 'Carmona', 'Caro', 'Carranza', 'Carrillo', 'Carrion', 'Carrión', 'Carvajal', 'Casado', 'Casanova', 'Casares', 'Casas', 'Casillas', 'Castañeda', 'Castellano', 'Castellanos', 'Castillo', 'Castro', 'Casárez', 'Cavazos', 'Cazares', 'Ceballos', 'Cedillo', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chavarría', 'Chávez', 'Cisneros', 'Cobo', 'Colunga', 'Colón', 'Concepción', 'Conde', 'Contreras', 'Cordero', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortes', 'Cortez', 'Cortés', 'Costa', 'Covarrubias', 'Cruz', 'Cuellar', 'Cuenca', 'Cuevas', 'Curiel', 'Córdoba', 'Córdova', 'De la cruz', 'De la fuente', 'De la torre', 'Del río', 'Delgadillo', 'Delgado', 'Del valle', 'Diez', 'Domingo', 'Domínguez', 'Duarte', 'Dueñas', 'Duran', 'Dávila', 'Díaz', 'Echevarría', 'Elizondo', 'Enríquez', 'Escalante', 'Escamilla', 'Escobar', 'Escobedo', 'Esparza', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquivel', 'Estrada', 'Expósito', 'Fajardo', 'Farías', 'Feliciano', 'Fernández', 'Fierro', 'Figueroa', 'Flores', 'Flórez', 'Fonseca', 'Franco', 'Frías', 'Fuentes', 'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Gallego', 'Gallegos', 'Galván', 'Galán', 'Gamboa', 'Gamez', 'Gaona', 'Garay', 'García', 'Garibay', 'Garica', 'Garrido', 'Garza', 'Gastélum', 'Gaytán', 'Gil', 'Giménez', 'Girón', 'Godoy', 'Godínez', 'Gonzales', 'González', 'Granado', 'Granados', 'Guajardo', 'Guardado', 'Guerra', 'Guerrero', 'Guevara', 'Guillen', 'Gutiérrez', 'Guzmán', 'Gálvez', 'Gómez', 'Haro', 'Henríquez', 'Heredia', 'Hernandes', 'Hernando', 'Hernádez', 'Hernández', 'Herrera', 'Herrero', 'Hidalgo', 'Hinojosa', 'Holguín', 'Huerta', 'Hurtado', 'Ibarra', 'Ibáñez', 'Iglesias', 'Irizarry', 'Izquierdo', 'Jaime', 'Jaimes', 'Jaramillo', 'Jasso', 'Jiménez', 'Jurado', 'Juárez', 'Jáquez', 'Lara', 'Leal', 'Lebrón', 'Ledesma', 'Leiva', 'Lemus', 'Lerma', 'Leyva', 'León', 'Limón', 'Linares', 'Lira', 'Llamas', 'Llorente', 'Loera', 'Lomeli', 'Longoria', 'López', 'Lorente', 'Lorenzo', 'Lovato', 'Loya', 'Lozada', 'Lozano', 'Lucas', 'Lucero', 'Lucio', 'Luevano', 'Lugo', 'Luis', 'Luján', 'Luna', 'Luque', 'Lázaro', 'López', 'Macias', 'Macías', 'Madera', 'Madrigal', 'Magaña', 'Malave', 'Maldonado', 'Manzanares', 'Manzano', 'Marco', 'Marcos', 'Mares', 'Marrero', 'Marroquín', 'Martos', 'Martí', 'Martín', 'Martínez', 'Marín', 'Mas', 'Mascareñas', 'Mata', 'Mateo', 'Mateos', 'Matos', 'Matías', 'Maya', 'Mayorga', 'Medina', 'Medrano', 'Mejía', 'Melgar', 'Meléndez', 'Mena', 'Menchaca', 'Mendoza', 'Menéndez', 'Meraz', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miguel', 'Millán', 'Miramontes', 'Miranda', 'Mireles', 'Mojica', 'Molina', 'Mondragón', 'Monroy', 'Montalvo', 'Montañez', 'Montaño', 'Montemayor', 'Montenegro', 'Montero', 'Montes', 'Montez', 'Montoya', 'Mora', 'Moral', 'Morales', 'Moran', 'Moreno', 'Mota', 'Moya', 'Munguía', 'Murillo', 'Muro', 'Muñiz', 'Muñoz', 'Muñóz', 'Márquez', 'Méndez', 'Naranjo', 'Narváez', 'Nava', 'Navarrete', 'Navarro', 'Navas', 'Nazario', 'Negrete', 'Negrón', 'Nevárez', 'Nieto', 'Nieves', 'Niño', 'Noriega', 'Nájera', 'Núñez', 'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Oliva', 'Olivares', 'Olivas', 'Oliver', 'Olivera', 'Olivo', 'Olivárez', 'Olmos', 'Olvera', 'Ontiveros', 'Oquendo', 'Ordoñez', 'Ordóñez', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Orta', 'Ortega', 'Ortiz', 'Ortíz', 'Osorio', 'Otero', 'Ozuna', 'Pabón', 'Pacheco', 'Padilla', 'Padrón', 'Pagan', 'Palacios', 'Palomino', 'Palomo', 'Pantoja', 'Pardo', 'Paredes', 'Parra', 'Partida', 'Pascual', 'Pastor', 'Patiño', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peláez', 'Perales', 'Peralta', 'Perea', 'Pereira', 'Peres', 'Peña', 'Pichardo', 'Pineda', 'Pizarro', 'Piña', 'Piñeiro', 'Plaza', 'Polanco', 'Polo', 'Ponce', 'Pons', 'Porras', 'Portillo', 'Posada', 'Pozo', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Puig', 'Pulido', 'Páez', 'Pérez', 'Quesada', 'Quezada', 'Quintana', 'Quintanilla', 'Quintero', 'Quiroz', 'Quiñones', 'Quiñónez', 'Ramos', 'Ramírez', 'Rangel', 'Rascón', 'Raya', 'Razo', 'Regalado', 'Reina', 'Rendón', 'Rentería', 'Reséndez', 'Rey', 'Reyes', 'Reyna', 'Reynoso', 'Rico', 'Rincón', 'Riojas', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Roca', 'Rocha', 'Rodarte', 'Rodríguez', 'Rojas', 'Rojo', 'Roldan', 'Roldán', 'Rolón', 'Romero', 'Romo', 'Román', 'Roque', 'Ross', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Rubio', 'Rueda', 'Ruelas', 'Ruiz', 'Ruvalcaba', 'Ruíz', 'Ríos', 'Saavedra', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Samaniego', 'Sandoval', 'Santacruz', 'Santamaría', 'Santana', 'Santiago', 'Santillán', 'Santos', 'Sanz', 'Sarabia', 'Sauceda', 'Saucedo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serra', 'Serrano', 'Sierra', 'Silva', 'Sola', 'Solano', 'Soler', 'Soliz', 'Solorio', 'Solorzano', 'Solís', 'Soria', 'Soriano', 'Sosa', 'Sotelo', 'Soto', 'Suárez', 'Sáenz', 'Sánchez', 'Tafoya', 'Tamayo', 'Tamez', 'Tapia', 'Tejada', 'Tejeda', 'Tello', 'Terrazas', 'Terán', 'Tijerina', 'Tirado', 'Toledo', 'Tomas', 'Toro', 'Torres', 'Tovar', 'Trejo', 'Treviño', 'Trujillo', 'Téllez', 'Tórrez', 'Ulloa', 'Urbina', 'Ureña', 'Uribe', 'Urrutia', 'Urías', 'Vaca', 'Valadez', 'Valdez', 'Valdivia', 'Valdés', 'Valencia', 'Valenzuela', 'Valero', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Varela', 'Vargas', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Venegas', 'Vera', 'Verdugo', 'Verduzco', 'Vergara', 'Vidal', 'Viera', 'Villa', 'Villagómez', 'Villalba', 'Villalobos', 'Villalpando', 'Villanueva', 'Villar', 'Villareal', 'Villaseñor', 'Villegas', 'Vásquez', 'Vázquez', 'Vélez', 'Véliz', 'Ybarra', 'Yáñez', 'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate', 'Zavala', 'Zayas', 'Zelaya', 'Zepeda', 'Zúñiga'
    );

    protected static $titleMale = array('Sr.', 'Dr.', 'Lic.', 'Ing.');

    protected static $titleFemale = array('Sra.', 'Srita.', 'Dr.', 'Lic.', 'Ing.');

    private static $suffix = array('Hijo', 'Segundo', 'Tercero');

    /**
     * @example 'Hijo'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }

    /**
     * Generate a Documento Nacional de Identidad (DNI) number
     *
     * @example '77446565E'
     *
     * @link https://es.wikibooks.org/wiki/Algoritmo_para_obtener_la_letra_del_NIF#Algoritmo
     */
    public static function dni()
    {
        $number = static::numerify('########');
        $letter = self::$crcMap[$number%23];

        return $number . $letter;
    }
}
