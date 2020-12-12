<?php

namespace Faker\Provider\es_MX;

class Person extends \Faker\Provider\Person
{
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

    protected static $firstNameMale = array(
        'Aarón','Adrián','Agustín','Alejandro','Alexander','Álvaro','Andrés','Ángel','Anthony','Antonio','Axel',
        'Bautista','Benjamín','Bruno',
        'Carlos','César','Christopher','Cristian','Cristóbal',
        'Daniel','David','Diego','Diego Alejandro','Dylan',
        'Eduardo','Emiliano','Emilio','Emmanuel','Erick','Esteban',
        'Facundo','Felipe','Fernando','Francisco','Franco',
        'Gabriel','Gael','Gonzalo','Guillermo',
        'Hugo',
        'Ian','Ignacio','Iker','Isaac','Iván',
        'Javier','Jerónimo','Jesús','Joaquín','Jonathan','Jorge','José','Joshua','Josué','Juan','Juan Andrés','Juan David','Juan José','Juan Manuel','Juan Pablo','Juan Sebastián','Julián',
        'Kevin',
        'Leonardo','Luca','Lucas','Luciano','Luis',
        'Manuel','Marcos','Mario','Martín','Mateo','Matías','Matthew','Mauricio','Maximiliano','Miguel','Miguel Ángel',
        'Nicolás',
        'Oscar',
        'Pablo','Patricio','Pedro',
        'Rafael','Ricardo','Roberto','Rodrigo',
        'Samuel','Santiago','Santino','Sebastián','Sergio','Simón',
        'Thiago','Tomás',
        'Valentín','Valentino','Vicente',
    );

    protected static $firstNameFemale = array(
        'Abigail','Abril','Adriana','Agustina','Aitana','Alba','Alejandra','Alexa','Alexandra','Allison','Amanda','Ana','Ana María','Ana María','Ana Sofía','Andrea','Angela','Antonella','Antonia','Ariana','Ashley',
        'Bárbara','Bianca','Briana',
        'Camila','Candela','Carla','Carolina','Catalina','Clara','Claudia','Constanza',
        'Daniela','Delfina','Diana',
        'Elena','Emilia','Emily','Emma',
        'Fátima','Fernanda','Florencia',
        'Gabriela','Génesis','Guadalupe',
        'Isabel','Isabella','Isidora',
        'Jazmín','Josefina','Juanita','Julia','Juliana','Julieta',
        'Laura','Laura Sofía','Lola','Lucía','Luciana','Luna',
        'Manuela','María','María Camila','María Fernanda','María José','Mariana','Marta','Martina','Melanie','Melissa','Mía','Micaela','Michelle','Miranda','Monserrat','Morena',
        'Naomí','Natalia','Natalie','Nicole',
        'Paloma','Paola','Paula','Paulin','Pilar',
        'Rebeca','Regina','Renata',
        'Sabrina','Samantha','Sara','Sofía','Stephanie',
        'Valentina','Valeria','Valerie','Vanessa','Victoria',
        'Ximena',
        'Zoe',
    );

    protected static $lastName = array(
        'Águilar', 'Álvarez', 'Ávalos', 'Ávila', 'Abad', 'Abeyta', 'Abrego', 'Abreu', 'Acevedo', 'Acosta', 'Acuña', 'Adame', 'Adorno', 'Agosto', 'Aguado', 'Aguayo', 'Aguilar', 'Aguilera', 'Aguirre', 'Alanis', 'Alaniz', 'Alarcón', 'Alba', 'Alcala', 'Alcaráz', 'Alcántar', 'Alejandro', 'Alemán', 'Alfaro', 'Alfonso', 'Alicea', 'Almanza', 'Almaráz', 'Almonte', 'Alonso', 'Alonzo', 'Altamirano', 'Alva', 'Alvarado', 'Amador', 'Amaya', 'Anaya', 'Andreu', 'Andrés', 'Anguiano', 'Angulo', 'Antón', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Aranda', 'Araña', 'Arce', 'Archuleta', 'Arellano', 'Arenas', 'Arevalo', 'Arguello', 'Arias', 'Armas', 'Armendáriz', 'Armenta', 'Armijo', 'Arredondo', 'Arreola', 'Arriaga', 'Arribas', 'Arroyo', 'Arteaga', 'Asensio', 'Atencio', 'Avilés', 'Ayala',
        'Baca', 'Badillo', 'Baeza', 'Bahena', 'Balderas', 'Ballesteros', 'Banda', 'Barajas', 'Barela', 'Barragán', 'Barraza', 'Barrera', 'Barreto', 'Barrientos', 'Barrios', 'Barroso', 'Batista', 'Bautista', 'Bañuelos', 'Becerra', 'Beltrán', 'Benavides', 'Benavídez', 'Benito', 'Benítez', 'Bermejo', 'Bermúdez', 'Bernal', 'Berríos', 'Blanco', 'Blasco', 'Blázquez', 'Bonilla', 'Borrego', 'Botello', 'Bravo', 'Briones', 'Briseño', 'Brito', 'Bueno', 'Burgos', 'Bustamante', 'Bustos', 'Báez', 'Betancourt',
        'Caballero', 'Cabello', 'Cabrera', 'Cabán', 'Cadena', 'Caldera', 'Calderón', 'Calero', 'Calvillo', 'Calvo', 'Camacho', 'Camarillo', 'Campos', 'Canales', 'Candelaria', 'Cano', 'Cantú', 'Caraballo', 'Carbajal', 'Carballo', 'Carbonell', 'Cárdenas', 'Cardona', 'Carmona', 'Caro', 'Carranza', 'Carrasco', 'Carrasquillo', 'Carrera', 'Carrero', 'Carretero', 'Carreón', 'Carrillo', 'Carrión', 'Carvajal', 'Casado', 'Casanova', 'Casares', 'Casas', 'Casillas', 'Castañeda', 'Castaño', 'Castellano', 'Castellanos', 'Castillo', 'Castro', 'Casárez', 'Cavazos', 'Cazares', 'Ceballos', 'Cedillo', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chavarría', 'Chávez', 'Cintrón', 'Cisneros', 'Clemente', 'Cobo', 'Collado', 'Collazo', 'Colunga', 'Colón', 'Concepción', 'Conde', 'Contreras', 'Cordero', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortez', 'Cortés', 'Costa', 'Cotto', 'Covarrubias', 'Crespo', 'Cruz', 'Cuellar', 'Cuenca', 'Cuesta', 'Cuevas', 'Curiel', 'Córdoba', 'Córdova',
        'de Anda', 'de Jesús', 'De la Cruz', 'De la Fuente', 'De la Torre', 'Del Río', 'Delacrúz', 'Delafuente', 'Delagarza', 'Delao', 'Delapaz', 'Delarosa', 'Delatorre', 'Deleón', 'Delgadillo', 'Delgado', 'Delrío', 'Delvalle', 'Díez', 'Domenech', 'Domingo', 'Domínguez', 'Domínquez', 'Duarte', 'Dueñas', 'Duran', 'Dávila', 'Díaz',
        'Echevarría', 'Elizondo', 'Enríquez', 'Escalante', 'Escamilla', 'Escobar', 'Escobedo', 'Escribano', 'Escudero', 'Esparza', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquibel', 'Esquivel', 'Esteban', 'Esteve', 'Estrada', 'Estévez', 'Expósito',
        'Fajardo', 'Farías', 'Feliciano', 'Fernández', 'Ferrer', 'Fierro', 'Figueroa', 'Flores', 'Flórez', 'Fonseca', 'Font', 'Franco', 'Frías', 'Fuentes',
        'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Gallego', 'Gallegos', 'Galván', 'Galán', 'Gamboa', 'Gámez', 'Gaona', 'Garay', 'García', 'Garibay', 'Garica', 'Garrido', 'Garza', 'Gastélum', 'Gaytán', 'Gil', 'Gimeno', 'Giménez', 'Girón', 'Godoy', 'Godínez', 'Gonzáles', 'González', 'Gracia', 'Granado', 'Granados', 'Griego', 'Grijalva', 'Guajardo', 'Guardado', 'Guerra', 'Guerrero', 'Guevara', 'Guillen', 'Gurule', 'Gutiérrez', 'Guzmán', 'Gálvez', 'Gómez',
        'Haro', 'Henríquez', 'Heredia', 'Hernándes', 'Hernando', 'Hernádez', 'Hernández', 'Herrera', 'Herrero', 'Hidalgo', 'Hinojosa', 'Holguín', 'Huerta', 'Hurtado',
        'Ibarra', 'Ibáñez', 'Iglesias', 'Irizarry', 'Izquierdo',
        'Jaime', 'Jaimes', 'Jaramillo', 'Jasso', 'Jiménez', 'Jimínez', 'Juan', 'Jurado', 'Juárez', 'Jáquez',
        'Laboy', 'Lara', 'Laureano', 'Leal', 'Lebrón', 'Ledesma', 'Leiva', 'Lemus', 'Lerma', 'Leyva', 'León', 'Limón', 'Linares', 'Lira', 'Llamas', 'Llorente', 'Loera', 'Lomeli', 'Longoria', 'Lorente', 'Lorenzo', 'Lovato', 'Loya', 'Lozada', 'Lozano', 'Lucas', 'Lucero', 'Lucio', 'Luevano', 'Lugo', 'Luis', 'Luján', 'Luna', 'Luque', 'Lázaro', 'López',
        'Macias', 'Macías', 'Madera', 'Madrid', 'Madrigal', 'Maestas', 'Magaña', 'Malave', 'Maldonado', 'Manzanares', 'Manzano', 'Marco', 'Marcos', 'Mares', 'Marrero', 'Marroquín', 'Martos', 'Martí', 'Martín', 'Martínez', 'Marín', 'Más', 'Mascareñas', 'Mata', 'Mateo', 'Mateos', 'Matos', 'Matías', 'Maya', 'Mayorga', 'Medina', 'Medrano', 'Mejía', 'Melgar', 'Meléndez', 'Mena', 'Menchaca', 'Mendoza', 'Menéndez', 'Meraz', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miguel', 'Millán', 'Miramontes', 'Miranda', 'Mireles', 'Mojica', 'Molina', 'Mondragón', 'Monroy', 'Montalvo', 'Montañez', 'Montaño', 'Montemayor', 'Montenegro', 'Montero', 'Montes', 'Montez', 'Montoya', 'Mora', 'Moral', 'Morales', 'Morán', 'Moreno', 'Mota', 'Moya', 'Munguía', 'Murillo', 'Muro', 'Muñiz', 'Muñoz', 'Márquez', 'Méndez',
        'Naranjo', 'Narváez', 'Nava', 'Navarrete', 'Navarro', 'Navas', 'Nazario', 'Negrete', 'Negrón', 'Nevárez', 'Nieto', 'Nieves', 'Niño', 'Noriega', 'Nájera', 'Núñez',
        'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Oliva', 'Olivares', 'Olivas', 'Oliver', 'Olivera', 'Olivo', 'Olivárez', 'Olmos', 'Olvera', 'Ontiveros', 'Oquendo', 'Ordoñez', 'Ordóñez', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Orta', 'Ortega', 'Ortíz', 'Osorio', 'Otero', 'Ozuna',
        'Pabón', 'Pacheco', 'Padilla', 'Padrón', 'Pagan', 'Palacios', 'Palomino', 'Palomo', 'Pantoja', 'Pardo', 'Paredes', 'Parra', 'Partida', 'Pascual', 'Pastor', 'Patiño', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peláez', 'Perales', 'Peralta', 'Perea', 'Pereira', 'Peres', 'Peña', 'Pichardo', 'Pineda', 'Pizarro', 'Piña', 'Piñeiro', 'Plaza', 'Polanco', 'Polo', 'Ponce', 'Pons', 'Porras', 'Portillo', 'Posada', 'Pozo', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Puig', 'Pulido', 'Páez', 'Pérez',
        'Quesada', 'Quezada', 'Quintana', 'Quintanilla', 'Quintero', 'Quiroz', 'Quiñones', 'Quiñónez',
        'Rael', 'Ramos', 'Ramírez', 'Ramón', 'Rangel', 'Rascón', 'Raya', 'Razo', 'Redondo', 'Regalado', 'Reina', 'Rendón', 'Rentería', 'Requena', 'Reséndez', 'Rey', 'Reyes', 'Reyna', 'Reynoso', 'Rico', 'Riera', 'Rincón', 'Riojas', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Roca', 'Rocha', 'Rodarte', 'Rodrigo', 'Rodríguez', 'Rodríquez', 'Roig', 'Rojas', 'Rojo', 'Roldán', 'Rolón', 'Romero', 'Romo', 'Román', 'Roque', 'Ros', 'Rosa', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Roybal', 'Rubio', 'Rueda', 'Ruelas', 'Ruiz', 'Ruvalcaba', 'Ruíz', 'Ríos',
        'Saavedra', 'Saiz', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Salvador', 'Samaniego', 'Sanabria', 'Sánchez', 'Sancho', 'Sandoval', 'Santacruz', 'Santamaría', 'Santana', 'Santiago', 'Santillán', 'Santos', 'Sanz', 'Sarabia', 'Sauceda', 'Saucedo', 'Sedillo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serra', 'Serrano', 'Serrato', 'Sevilla', 'Sierra', 'Silva', 'Simón', 'Sisneros', 'Sola', 'Solano', 'Soler', 'Soliz', 'Solorio', 'Solorzano', 'Solís', 'Soria', 'Soriano', 'Sosa', 'Sotelo', 'Soto', 'Suárez', 'Sáenz', 'Sáez', 'Sánchez',
        'Tafoya', 'Tamayo', 'Tamez', 'Tapia', 'Tejada', 'Tejeda', 'Tello', 'Terrazas', 'Terán', 'Tijerina', 'Tirado', 'Toledo', 'Toro', 'Torres', 'Tovar', 'Trejo', 'Treviño', 'Trujillo', 'Téllez', 'Tórrez',
        'Ulibarri', 'Ulloa', 'Urbina', 'Ureña', 'Uribe', 'Urrutia', 'Urías',
        'Vaca', 'Valadez', 'Valdez', 'Valdivia', 'Valdés', 'Valencia', 'Valentín', 'Valenzuela', 'Valero', 'Valladares', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Vanegas', 'Varela', 'Vargas', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Venegas', 'Vera', 'Verdugo', 'Verduzco', 'Vergara', 'Vicente', 'Vidal', 'Viera', 'Vigil', 'Vila', 'Villa', 'Villagómez', 'Villalba', 'Villalobos', 'Villalpando', 'Villanueva', 'Villar', 'Villareal', 'Villarreal', 'Villaseñor', 'Villegas', 'Vásquez', 'Vázquez', 'Vélez', 'Véliz',
        'Ybarra', 'Yáñez',
        'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate', 'Zavala', 'Zayas', 'Zelaya', 'Zepeda', 'Zúñiga',
    );

    protected static $titleMale = array('Sr.', 'Dn.', 'Dr.', 'Lic.', 'Ing.');

    protected static $titleFemale = array('Sra.', 'Srita.', 'Dr.', 'Lic.', 'Ing.');

    private static $suffix = array('Hijo', 'Segundo', 'Tercero');

    /**
     * @example 'Hijo'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
