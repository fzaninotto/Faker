<?php

namespace Faker\Provider;

class Commerce  extends Base
{
    protected static $departments = array(
        'Men Clothes', 'Kids', 'Toys', 'Cosmetics', 'Perfume', 'Office Supplies'
    );
    protected static $materials = array(
        'Steel', 'Plastic', 'Wool', 'Iron'
    );
    protected static $product_names = array(
        'Shoe', 'Shirt', 'Toy', 'Book', 'Clothes', 'Phone', 'Tablet', 'Socks', 'Skates', 'Ball',
        'Bag', 'Lipstick', 'Perfume'
    );
    /**
     * @example 'Grocery'
     */
    public function department()
    {
        return static::randomElement(static::$departments);
    }

    /**
     * @example 'Steel'
     */
    public static function material()
    {
        return static::randomElement(static::$materials);
    }

    /**
     * @example 'Shirt'
     */
    public function product_name()
    {
        return static::randomElement(static::$product_names);
    }

    /**
     * @example '44.6'
     */
    public function price()
    {
        return numberBetween($min = 25, $max = 50000)/100;
    }

}
