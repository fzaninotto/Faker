<?php

namespace Faker\Provider\id_ID;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',

        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',

        '{{prefixMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{prefixFemale}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameMale}} {{lastNameMale}} {{suffix}}',
        '{{firstNameFemale}} {{lastNameFemale}} {{suffix}}',
        '{{prefixMale}} {{firstNameMale}} {{lastNameMale}} {{suffix}}',
        '{{prefixFemale}} {{firstNameFemale}} {{lastNameFemale}} {{suffix}}',
    );

    protected static $firstNameMale     = array();
    protected static $firstNameFemale   = array();
    protected static $firstName         = array();
    protected static $lastName          = array();
    protected static $prefixMale        = array('H.', 'Prof.', 'Ir.', 'Dr', 'Drs.');
    protected static $prefixFemale      = array('Hj.', 'Dr', 'Drs.');
    protected static $suffix            = array('S.Pd', 'S.Sn', 'S.H', 'S.Kom', 'S.E');


    /***************************************************************************************/

    public static function firstNameMale()
    {
        $data = file(dirname(__FILE__) . '/data/person.male.firstname.txt');
        return static::randomElement($data);
    }

    public static function lastNameMale()
    {
        $data = file(dirname(__FILE__) . '/data/person.male.lastname.txt');
        return static::randomElement($data);
    }

    /***************************************************************************************/
  
    public static function firstNameFemale()
    {
        $data = file(dirname(__FILE__) . '/data/person.female.firstname.txt');
        return static::randomElement($data);
    }

    public static function lastNameFemale()
    {
        $data = file(dirname(__FILE__) . '/data/person.female.lastname.txt');
        return static::randomElement($data);
    }

    /***************************************************************************************/

    public static function prefixMale()
    {
        return static::randomElement(static::$prefixMale);
    }

    public static function prefixFemale()
    {
        return static::randomElement(static::$prefixFemale);
    }

    public static function suffix()
    {
        return static::randomElement(static::$suffix);
    }
}
