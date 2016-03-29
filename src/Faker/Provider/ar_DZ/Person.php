<?php

namespace Faker\Provider\ar_DZ;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    /**
     * @link http://www.studentsoftheworld.info/penpals/stats.php3?Pays=ALG
     */
    protected static $firstNameMale = [
    'محمد',
    'علي',
    ];

    /**
     * @link http://www.studentsoftheworld.info/penpals/stats.php3?Pays=ALG
     */
    protected static $firstNameFemale = [
    'خديجة',
    'سعاد',
    ];

    protected static $lastName = [
    'سعداوي',
    'رحماني',
    ];

    protected static $titleMale = ['السيد', 'الأستاذ', 'الدكتور', 'المهندس'];
    protected static $titleFemale = ['السيدة', 'الآنسة', 'الدكتورة', 'المهندسة'];
    private static $prefix = ['أ.', 'د.'];

    /**
     * @example 'أ.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }
}
