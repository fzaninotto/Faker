<?php

namespace Faker\Provider;

class ComputerComponent extends Base
{
    /**
     * Possible computer hardware components
     */
    protected static $computerComponents = array('RAM', 'CPU', 'Motherboard', 'Power supply', 'HDD', 'SSD', 'Video Card');

    /**
     * Ram models
     */
    protected static $ramModel = array(
        'Ballistix Sport LT Gray 16GB DDR4-2400 UDIMM',
        'Crucial 4GB DDR4-2400 UDIMM',
        'Ballistix Sport LT Gray 8GB DDR3-1333 UDIMM',
        'Crucial 16GB DDR4-2400 SODIMM'
    );

    /**
     * Generate computer component
     *
     * @return string
     */
    public static function computerComponents()
    {
        return static::randomElement(static::$computerComponents);
    }

    /**
     * Generate ram model
     *
     * @return string
     */
    public static function ram()
    {
        return static::randomElement(static::$ramModel);
    }
}
