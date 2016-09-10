<?php

namespace Faker\Provider\ng_NG;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('%', '%#', '%#', '%#', '%##');
    protected static $postcode = array('#####', '## ###');

    private static $county = array(
        'Abuja', 'Abia', 'Adamawa', 'Akwa Ibom', 'Anambra',
        'Bauchi', 'Bayelsa', 'Benue', 'Borno',
        'Cross River',
        'Delta',
        'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Gombe',
        'Imo', 'Jigawa',
        'Kaduna', 'Kano', 'Katsina', 'Kebbi', 'Kogi', 'Kwara',
        'Lagos',
        'Nasarawa', 'Niger',
        'Ogun', 'Ondo', 'Osun', 'Oyo',
        'Plateau',
        'Rivers',
        'Sokoto',
        'Taraba',
        'Yobe',
        'Zamfara'
    );

    /**
     * Randomly returns a Nigerian state or county.
     *
     * @example 'Lagos'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::$county);
    }
}
