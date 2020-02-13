<?php

namespace Faker\Provider;

class ComputerComponents extends Base
{
    protected static $computerComponents = array('Motherboard', 'CPU', 'RAM', 'Power supply', 'HDD', 'SSD', 'Video Card');

    protected static $ramModules = array(
        'Ballistix Sport LT Gray 16GB DDR4-2400 UDIMM',
        'Crucial 4GB DDR4-2400 UDIMM',
        'Ballistix Sport LT Gray 8GB DDR3-1333 UDIMM',
        'Crucial 16GB DDR4-2400 SODIMM'
    );

    public static function computerComponents()
    {
        return static::randomElement(static::$computerComponents);
    }

    public static function ram()
    {
        return static::randomElement(static::$ramModules);
    }
}
