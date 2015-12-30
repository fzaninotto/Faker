<?php
/**
 * @author Mev-Rael <mevrael@gmail.com> <https://github.com/mevrael>
 *
 * If you need any support with Geo Provider or have suggestions
 * then mention me with @mevrael
 * on GitHub https://github.com/fzaninotto/Faker/issues
 *
 */

namespace Faker\Provider;

/**
 * Class Geo
 *
 * Geographical (Spatial) data generator
 *
 * @package Faker\Provider
 */
class Geo extends \Faker\Provider\Base
{
    /**
     * @example 77.147489
     * @return float Uses signed degrees format (returns a float number between -90 and 90)
     */
    public static function latitude()
    {
        return static::randomFloat(6, 0, 180) - 90;
    }

    /**
     * @example 86.211205
     * @return float Uses signed degrees format (returns a float number between -180 and 180)
     */
    public static function longitude()
    {
        return static::randomFloat(6, 0, 360) - 180;
    }

    /**
     * @example [77.147489, 86.211205]
     * @return array Numeric array with 2 elements: X (longitude) and Y (latitude)
     */
    public static function geoPoint()
    {
        return [static::longitude(), static::latitude()];
    }

    /**
     * @example 'POINT(77.147489, 86.211205)'
     * @return string An SQL value command used to insert longitude and latitude into POINT column.
     */
    public static function sqlGeoPoint()
    {
        return 'POINT(' . static::longitude() .', ' . static::latitude() .')';
    }
}
