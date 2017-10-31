<?php

namespace Faker\Provider;

class Vehicle extends Base
{
    protected static $make = array('BMW', 'Ford', 'Mazda', 'Mercedes-Benz', 'Suzuki', 'Toyota', 'Volkswagen', 'Volvo');

    protected static $model = array(
        'BMW' => array('120d', '220i', '320d', '520i', 'X3', 'x5'),
        'Ford' => array('Fiesta', 'Focus'),
        'Mazda' => array('2', '3'),
        'Mercedes-Benz' => array('A160', 'C200', 'E350', 'ML350', 'S500'),
        'Suzuki' => array('Swift'),
        'Toyota' => array('Corolla', 'Yaris'),
        'Volkswagen' => array('Golf', 'Up!'),
        'Volvo' => array('V40', 'V60', 'XC60', 'XC90'),
    );

    protected static $makeModelFormat = '%s %s';

    /**
     * @return string
     * @example 'Ford Fiesta'
     */
    public function makeModel()
    {
        $make = static::randomElement(static::$make);
        $model = static::randomElement(static::$model[$make]);

        return sprintf(static::$makeModelFormat, $make, $model);
    }
}
