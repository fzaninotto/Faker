<?php

namespace Faker\Provider\es_CO;

class Person extends \Faker\Provider\Person
{
    /**
     * @link https://culturalatlas.sbs.com.au/colombian-culture/naming-4ad0be20-a64e-4505-aaa1-e4ade4c7ba05#naming-4ad0be20-a64e-4505-aaa1-e4ade4c7ba05
     */
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} de {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{preposition}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{preposition}} {{firstNameMale}} {{lastName}} {{lastName}}',
    );

    /**
     * @link https://culturalatlas.sbs.com.au/colombian-culture/naming-4ad0be20-a64e-4505-aaa1-e4ade4c7ba05#naming-4ad0be20-a64e-4505-aaa1-e4ade4c7ba05
     */
    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} de {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}} {{lastName}} de {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{preposition}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}} de {{lastName}}',
        '{{firstNameFemale}} {{preposition}} {{firstNameFemale}} {{lastName}} {{lastName}} de {{lastName}}',
    );

    /**
     * @link https://www.elespectador.com/noticias/politica/estos-fueron-los-nombres-mas-populares-del-2018-en-colombia-segun-la-registraduria-articulo-828629
     */
    protected static $firstNameMale = array(
        'Santiago', 'Matías' , 'Emmanuel', 'Emiliano', 'Jerónimo', 'Maximiliano', 'Mathias', 'Thiago', 'Martín',
        'Juan', 'José', 'Miguel', 'Sebastián', 'Samuel', 'Pablo', 'Andrés', 'Felipe', 'Diego', 'Ángel', 'David', 'Esteban'
    );

    /**
     * @link https://www.elespectador.com/noticias/politica/estos-fueron-los-nombres-mas-populares-del-2018-en-colombia-segun-la-registraduria-articulo-828629
     */
    protected static $firstNameFemale = array(
        'Luciana', 'Salomé', 'Isabella', 'Mariana', 'Antonella', 'Gabriela', 'Mariángel', 'Samantha', 'Victoria', 'Valentina',
        'María', 'Dulce', 'Celeste', 'Sara', 'Paula', 'Luisa', 'Fernanda', 'Danna', 'Sofía', 'Ana', 'Lucía',
    );

    /**
     * @link https://www.elespectador.com/noticias/politica/estos-fueron-los-nombres-mas-populares-del-2018-en-colombia-segun-la-registraduria-articulo-828629
     */
    protected static $lastName = array(
        'Rodríguez', 'González', 'Martínez', 'García', 'López', 'Hernández', 'Pérez', 'Gómez', 'Díaz', 'Sánchez'
    );

    /**
     * @link https://culturalatlas.sbs.com.au/colombian-culture/naming-4ad0be20-a64e-4505-aaa1-e4ade4c7ba05#naming-4ad0be20-a64e-4505-aaa1-e4ade4c7ba05
     */
    protected static $preposition = array(
        'de', 'el', 'la', 'los', 'las'
    );

    public static function preposition()
    {
        return self::randomElement(static::$preposition);
    }


    /**
     * Generate random national identification number (Número Único de Identificación Personal). Ex 1234567890
     * @param string $separator
     * @return string
     * @link https://en.wikipedia.org/wiki/National_identification_number#Colombia
     */
    public function nuip()
    {
        return $this->numerify('%#########');
    }
}
