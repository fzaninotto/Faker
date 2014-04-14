<?php

namespace Faker\Provider;

class Person extends \Faker\Provider\Base
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    
    protected static $titleFormat = array(
      '{{titleMale}}',
      '{{titleFemale}}',
    );
    
    protected static $firstNameFormat = array(
      '{{firstNameMale}}',
      '{{firstNameFemale}}',
    );
    
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
    );

    protected static $firstNameMale = array(
        'John',
    );

    protected static $firstNameFemale = array(
        'Jane',
    );

    protected static $lastName = array('Doe');

    protected static $titleMale = array('Mr.', 'Dr.', 'Prof.');

    protected static $titleFemale = array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.');

    /**
     * @param string|null $gender 'male', 'female' or null for any 
     * @example 'John Doe'
     */
    public function name($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            $format = static::randomElement(static::$maleNameFormats);
        } elseif ($gender === static::GENDER_FEMALE) {
            $format = static::randomElement(static::$femaleNameFormats);
        } else {
            $format = static::randomElement(array_merge(static::$maleNameFormats, static::$femaleNameFormats));
        }
        
        return $this->generator->parse($format);
    }

    /**
     * @param string|null $gender 'male', 'female' or null for any 
     * @example 'John'
     */
    public function firstName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return static::firstNameMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return static::firstNameFemale();
        }
        
        return $this->generator->parse(static::randomElement(static::$firstNameFormat));
    }

    public static function firstNameMale()
    {
        return static::randomElement(static::$firstNameMale);
    }

    public static function firstNameFemale()
    {
        return static::randomElement(static::$firstNameFemale);
    }

    /**
     * @example 'Doe'
     */
    public function lastName()
    {
        return static::randomElement(static::$lastName);
    }

    /**
     * @example 'Mrs.'
     */
    public function title($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return static::titleMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return static::titleFemale();
        }
        
        return $this->generator->parse(static::randomElement(static::$titleFormat));
    }

    /**
     * @example 'Mr.'
     */
    public static function titleMale()
    {
        return static::randomElement(static::$titleMale);
    }

    /**
     * @example 'Mrs.'
     */
    public static function titleFemale()
    {
        return static::randomElement(static::$titleFemale);
    }
}
