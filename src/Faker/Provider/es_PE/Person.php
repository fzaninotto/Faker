<?php

namespace Faker\Provider\es_PE;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{lastName}} {{lastName}}',
        '{{firstName}} {{lastName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}} {{lastName}}',
        '{{firstName}} {{firstName}} {{lastName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}}',
        '{{prefix}} {{firstName}} {{lastName}} {{lastName}}',
        '{{firstName}} {{lastName}} {{suffix}}',
        '{{prefix}} {{firstName}} {{lastName}} {{lastName}} {{suffix}}'
    );

    protected static $firstName = array(
        'Aarón', 'Abigail', 'Abril', 'Adriana', 'Adrián', 'Agustina', 'Agustín', 'Aitana', 'Alan', 'Alejandra', 'Alejandro', 'Alessandra', 'Alex', 'Alexa', 'Alexander', 'Allison', 'Alma', 'Alonso', 'Amanda', 'Amelia', 'Ana Paula', 'Ana Sofía', 'Ana', 'Andrea', 'Andrés', 'Anthony', 'Antonella', 'Antonia', 'Antonio', 'Ariadna', 'Ariana', 'Ashley', 'Axel',
        'Bautista', 'Benjamín', 'Bianca', 'Bruno',
        'Camila', 'Camilo', 'Carla', 'Carlos', 'Carolina', 'Catalina', 'Christian', 'Christopher', 'Clara', 'Constanza', 'Cristóbal',
        'Damián', 'Daniel', 'Daniela', 'Dante', 'David', 'Delfina', 'Diego Alejandro', 'Diego', 'Dylan',
        'Eduardo', 'Elena ', 'Elizabeth', 'Elías', 'Emilia', 'Emiliano', 'Emilio', 'Emily', 'Emma', 'Emmanuel', 'Esteban',
        'Fabiana', 'Facundo', 'Felipe', 'Fernando', 'Florencia', 'Francisco', 'Franco', 'Fátima ',
        'Gabriel', 'Gabriela', 'Gael', 'Guadalupe',
        'Hugo', 'Horacio', 'Hidalgo', 'Hipólito',
        'Ian', 'Ignacio', 'Irene', 'Isaac', 'Isabel', 'Isabella', 'Isidora', 'Ivan', 'Ivanna',
        'Jacobo', 'Javier', 'Jazmín', 'Jerónimo', 'Jesús', 'Joaquín', 'Jorge', 'José', 'Josefa', 'Josefina', 'Joshua', 'Josué', 'Juan David', 'Juan Diego', 'Juan Esteban', 'Juan José', 'Juan Manuel', 'Juan Martín', 'Juan Pablo', 'Juan Sebastián', 'Juan', 'Juana', 'Julia', 'Juliana', 'Julieta', 'Julián',
        'Kevin',
        'Laura', 'Lautaro', 'Leonardo', 'Lola', 'Lorenzo', 'Luana', 'Lucas', 'Luciana', 'Luciano', 'Lucía', 'Luis', 'Luna',
        'Magdalena', 'Maite', 'Malena', 'Manuel', 'Manuela', 'Mariana', 'Mariangel', 'Mario', 'Martina', 'Martín', 'María Alejandra', 'María Camila', 'María Fernanda', 'María José', 'María Paula', 'María', 'Mateo', 'Matthew', 'Matías', 'Maximiliano', 'Micaela', 'Michelle', 'Miguel Ángel', 'Miguel', 'Miranda', 'Montserrat', 'Máximo', 'Mía',
        'Nadia', 'Nahuel', 'Natalia', 'Nicole',
        'Olivia', 'Oliva', 'Ornela',
        'Pablo', 'Paula', 'Paulina', 'Pedro',
        'Rafael', 'Rafaela', 'Rebeca', 'Regina', 'Renata', 'Ricardo', 'Rodrigo', 'Romina',
        'Salomé', 'Samantha', 'Samuel', 'Santiago', 'Santino', 'Sara Sofía', 'Sara', 'Sebastián', 'Sergio', 'Silvana ', 'Simón', 'Sofía', 'Sophie',
        'Thiago', 'Tomas',
        'Valentina', 'Valentino', 'Valentín', 'Valeria', 'Valery ', 'Vicente', 'Victoria', 'Violeta',
        'Ximena/Jimena',
        'Zoe',
    );

    protected static $lastName = array(
        'Acevedo', 'Acosta', 'Acuña', 'Aguayo', 'Águilar', 'Aguilera', 'Aguirre', 'Alanis', 'Alaniz', 'Alarcón', 'Alba', 'Alcala', 'Alcántar', 'Alcaraz', 'Alejandro', 'Alemán', 'Alfaro', 'Alicea', 'Almanza', 'Almaraz', 'Almonte', 'Alonso', 'Alonzo', 'Altamirano', 'Alva', 'Alvarado', 'Álvarez', 'Amador', 'Amaya', 'Anaya', 'Anguiano', 'Angulo', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Araña', 'Aranda', 'Arce', 'Archuleta', 'Arellano', 'Arenas', 'Arevalo', 'Arguello', 'Arias', 'Armas', 'Armendáriz', 'Armenta', 'Armijo', 'Arredondo', 'Arreola', 'Arriaga', 'Arroyo', 'Arteaga', 'Atencio', 'Ávalos', 'Ávila', 'Avilés', 'Ayala',
        'Baca', 'Ballesteros', 'Banda', 'Barela', 'Barragán', 'Barraza', 'Barrera', 'Barreto', 'Barrientos', 'Barrios', 'Batista', 'Becerra', 'Beltrán', 'Benavides', 'Benavídez', 'Benítez', 'Bermúdez', 'Bernal', 'Berríos', 'Bétancourt', 'Blanco', 'Bonilla', 'Borrego', 'Botello', 'Bravo', 'Briones', 'Briseño', 'Brito', 'Bueno', 'Burgos', 'Bustamante', 'Bustos',
        'Caballero', 'Cabán', 'Cabrera', 'Cadena', 'Caldera', 'Calderón','Camacho', 'Campos', 'Canales', 'Candelaria', 'Cano', 'Cantú', 'Caraballo', 'Carbajal', 'Cardenas', 'Cardona', 'Carmona', 'Carranza', 'Carrasco', 'Carrasquillo', 'Carrera', 'Carrero', 'Carrillo', 'Carrion', 'Carvajal', 'Casanova', 'Casares', 'Casárez', 'Casas', 'Casillas', 'Castañeda', 'Castellanos', 'Castillo', 'Castro', 'Cavazos', 'Cazares', 'Ceballos', 'Cedillo', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chavarría', 'Chávez', 'Cisneros', 'Collado', 'Collazo', 'Colón', 'Concepción', 'Contreras', 'Cordero', 'Córdova', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortez', 'Crespo', 'Cruz', 'Cuellar',
        'Dávila', 'de Jesús', 'De La Crúz', 'De La Fuente', 'De La Rosa', 'De La Torre', 'De León', 'Delgadillo', 'Delgado', 'Del Río', 'Del Valle', 'Díaz', 'Domínguez', 'Domínquez', 'Duarte', 'Dueñas', 'Duran',
        'Echevarría', 'Enríquez', 'Escalante', 'Escobar', 'Escobedo', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquibel', 'Esquivel', 'Estévez', 'Estrada',
        'Fajardo', 'Farías', 'Feliciano', 'Fernández', 'Ferrer', 'Fierro', 'Figueroa', 'Flores', 'Flórez', 'Fonseca', 'Franco', 'Frías', 'Fuentes',
        'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Gallegos', 'Galván', 'Gálvez', 'Gamboa', 'Gamez', 'Gaona', 'Garay', 'García', 'Garrido', 'Garza', 'Gaytán', 'Gil', 'Girón', 'Godínez', 'Godoy', 'Gómez', 'Gonzales', 'González', 'Gracia', 'Granado', 'Granados', 'Griego', 'Grijalva', 'Guajardo', 'Guardado', 'Guerra', 'Guerrero', 'Guevara', 'Guillen', 'Gutiérrez', 'Guzmán',
        'Henríquez', 'Heredia', 'Hernádez', 'Hernandes', 'Hernández', 'Herrera', 'Hidalgo', 'Hinojosa', 'Holguín', 'Huerta', 'Hurtado',
        'Ibarra', 'Iglesias',
        'Jaramillo', 'Jiménez', 'Juárez', 'Jurado',
        'Lara', 'Laureano', 'Leal', 'Ledesma', 'Leiva', 'León', 'Leyva', 'Limón', 'Linares', 'Lira', 'Llamas', 'López', 'Lovato', 'Lozada', 'Lozano', 'Lugo', 'Luján', 'Luna',
        'Macías', 'Madera', 'Madrid', 'Madrigal', 'Maldonado', 'Manzanares', 'Marín', 'Márquez', 'Marroquín', 'Martínez', 'Mata', 'Mateo', 'Matías', 'Matos', 'Maya', 'Mayorga', 'Medina', 'Medrano', 'Mejía', 'Meléndez', 'Melgar', 'Mena', 'Méndez', 'Mendoza', 'Menéndez', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miranda', 'Molina', 'Mondragón', 'Montalvo', 'Montañez', 'Montaño', 'Montenegro', 'Montero', 'Montes', 'Montez', 'Montoya', 'Mora', 'Morales', 'Moreno', 'Mota', 'Moya', 'Muñiz', 'Muñoz', 'Murillo', 'Muro',
        'Nájera', 'Naranjo', 'Narváez', 'Nava', 'Navarrete', 'Navarro', 'Nazario', 'Negrete', 'Negrón', 'Nieto', 'Nieves', 'Niño', 'Noriega', 'Núñez',
        'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Olivares', 'Olivárez', 'Olivas', 'Olivera', 'Olivo', 'Olmos', 'Olvera', 'Ontiveros', 'Oquendo', 'Ordóñez', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Ortega', 'Ortiz', 'Osorio', 'Otero', 'Ozuna',
        'Pacheco', 'Padilla', 'Páez', 'Palacios', 'Palomino', 'Palomo', 'Pantoja', 'Paredes', 'Parra', 'Partida', 'Patiño', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peña', 'Perales', 'Peralta', 'Perea', 'Peres', 'Pérez', 'Pichardo', 'Piña', 'Pineda', 'Pizarro', 'Polanco', 'Ponce', 'Porras', 'Portillo', 'Posada', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Pulido',
        'Quesada', 'Quezada', 'Quiñones', 'Quiñónez', 'Quintana', 'Quintanilla', 'Quintero', 'Quiroz',
        'Rael', 'Ramírez', 'Ramón', 'Ramos', 'Rangel', 'Raya', 'Razo', 'Regalado', 'Rendón', 'Rentería', 'Reséndez', 'Reyes', 'Reyna', 'Reynoso', 'Rico', 'Rincón', 'Riojas', 'Ríos', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Rocha', 'Rodarte', 'Rodrígez', 'Rodríguez', 'Rodríquez', 'Rojas', 'Rojo', 'Roldán', 'Rolón', 'Romero', 'Romo', 'Roque', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Roybal', 'Rubio', 'Ruelas', 'Ruiz', 'Ruvalcaba',
        'Saavedra', 'Sáenz', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Samaniego', 'Sanabria', 'Sanches', 'Sánchez', 'Sandoval', 'Santacruz', 'Santana', 'Santiago', 'Santillán', 'Sarabia', 'Sauceda', 'Saucedo', 'Sedillo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serrano', 'Serrato', 'Sevilla', 'Sierra', 'Sisneros', 'Solano', 'Solís', 'Soliz', 'Solorio', 'Solorzano', 'Soria', 'Sosa', 'Sotelo', 'Soto', 'Suárez',
        'Tafoya', 'Tamayo', 'Tamez', 'Tapia', 'Tejada', 'Tejeda', 'Téllez', 'Tello', 'Terán', 'Terrazas', 'Tijerina', 'Tirado', 'Toledo', 'Toro', 'Torres', 'Tórrez', 'Tovar', 'Trejo', 'Treviño', 'Trujillo',
        'Ulibarri', 'Ulloa', 'Urbina', 'Ureña', 'Urías', 'Uribe', 'Urrutia',
        'Vaca', 'Valadez', 'Valdés', 'Valdez', 'Valdivia', 'Valencia', 'Valentín', 'Valenzuela', 'Valladares', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Vanegas', 'Varela', 'Vargas', 'Vásquez', 'Vázquez', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Vélez', 'Véliz', 'Venegas', 'Vera', 'Verdugo', 'Verduzco', 'Vergara', 'Viera', 'Vigil', 'Villa', 'Villagómez', 'Villalobos', 'Villalpando', 'Villanueva', 'Villareal', 'Villarreal', 'Villaseñor', 'Villegas',
        'Yáñez', 'Ybarra',
        'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate', 'Zavala', 'Zayas', 'Zelaya', 'Zepeda', 'Zúñiga'
    );

    private static $prefix = array('Sr.', 'Sra.', 'Srta.', 'Dr.', 'Lic.', 'Ing.');

    private static $suffix = array('Hijo');

    /**
     * @example 'Sra.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

    /**
     * @example 'Hijo'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
