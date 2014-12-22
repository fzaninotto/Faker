<?php

namespace Faker\Provider\es_Cl;

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

    /**
     * 
     * {@link} https://www.registrocivil.cl/Servicios/Estadisticas/Archivos/NombresComunes/damas.html
     * {@link} https://www.registrocivil.cl/Servicios/Estadisticas/Archivos/NombresComunes/varones.html
     */
    protected static $firstNameMale = array(
         'Benjamin', 'Vicente', 'Martin', 'Matias', 'Joaquin', 'Agustin', 'Cristobal', 'Maximiliano', 'Sebastian', 'Tomas', 'Diego', 'Jose', 'Nicolas', 'Felipe', 'Lucas', 'Alonso', 'Bastian', 'Juan', 'Gabriel', 'Ignacio', 'Francisco', 'Renato', 'Maximo', 'Mateo', 'Javier', 'Daniel', 'Luis', 'Gaspar', 'Angel', 'Fernando', 'Carlos', 'Emilio', 'Franco', 'Cristian', 'Pablo', 'Santiago', 'Esteban', 'David', 'Damian', 'Jorge', 'Camilo', 'Alexander', 'Rodrigo', 'Amaro', 'Luciano', 'Bruno', 'Alexis', 'Victor', 'Thomas', 'Julian'
    );

    protected static $firstNameFemale = array(
        'Martina','Sofia','Florencia','Valentina','Isidora','Antonella','Antonia','Emilia','Catalina','Fernanda','Constanza','Javiera','Maite','Maria','Francisca','Agustina','Josefa','Amanda','Camila','Monserrat','Trinidad','Ignacia','Belen','Paz','Anais','Victoria','Laura','Pia','Renata','Magdalena','Isabella','Matilda','Julieta','Rocio','Daniela','Emily','Mia','Gabriela','Barbara','Josefina','Matilde','Anahis','Pascal','Paula','Thiare','Rayen','Genesis','Paloma','Carolina','Millaray'
    );

    protected static $lastName = array(
        'González','Muñoz','Rojas','Díaz','Pérez','Soto','Contreras','Silva','Martínez','Sepúlveda','Morales','Rodríguez','López','Fuentes','Hernández','Torres','Araya','Flores','Espinoza','Valenzuela','Castillo','Ramírez','Reyes','Gutiérrez','Castro','Vargas','Álvarez','Vásquez','Tapia','Fernández','Sánchez','Carrasco','Gómez','Cortés','Herrera','Núñez','Jara','Vergara','Rivera','Figueroa','Riquelme','García','Miranda','Bravo','Vera','Molina','Vega','Campos','Sandoval','Orellana','Zúñiga','Olivares','Alarcón','Gallardo','Ortiz','Garrido','Salazar','Guzmán','Henríquez','Saavedra','Navarro','Aguilera','Parra','Romero','Aravena','Pizarro','Godoy','Peña','Cáceres','Leiva','Escobar','Yáñez','Valdés','Vidal','Salinas','Cárdenas','Jiménez','Ruiz','Lagos','Maldonado','Bustos','Medina','Pino','Palma','Moreno','Sanhueza','Carvajal','Navarrete','Sáez','Alvarado','Donoso','Poblete','Bustamante','Toro','Ortega','Venegas','Guerrero','Paredes','Farías','San Martín'
    );  

    protected static $titleMale = array('Sr.', 'Don');

    protected static $titleFemale = array('Sra.', 'Srita.', );

    private static $suffix = array('Hijo', 'Segundo', 'Tercero');

    /**
     * @example 'Hijo'
     */
    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
