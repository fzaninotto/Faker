<?php

namespace Faker\Provider;

/**
 * Class Commerce
 * @author Ahmad Priatama <ahmad.priatama@gmail.com>
 */
class Commerce extends Base
{

    protected static $departementNames = array(
        "Books", "Movies", "Music", "Games", "Electronics", "Computers", "Home", "Garden", "Tools", "Grocery",
        "Health", "Beauty", "Toys", "Kids", "Baby", "Clothing", "Shoes", "Jewelry", "Sports", "Outdoors",
        "Automotive", "Industrial"
    );

    protected static $adjectives = array(
        "Small", "Ergonomic", "Rustic", "Intelligent", "Gorgeous", "Incredible", "Fantastic", "Practical", "Sleek",
        "Awesome", "Enormous", "Mediocre", "Synergistic", "Heavy Duty", "Lightweight", "Aerodynamic", "Durable"
    );

    protected static $materialNames = array(
        "Steel", "Wooden", "Concrete", "Plastic", "Cotton", "Granite", "Rubber", "Leather", "Silk", "Wool", "Linen",
        "Marble", "Iron", "Bronze", "Copper", "Aluminum", "Paper"
    );

    protected static $productNames = array(
        "Chair", "Car", "Computer", "Gloves", "Pants", "Shirt", "Table", "Shoes", "Hat", "Plate", "Knife", "Bottle",
        "Coat", "Lamp", "Keyboard", "Bag", "Bench", "Clock", "Watch", "Wallet"
    );

    protected static $formats = array(
        '{{adjective}} {{materialName}} {{product}}',
    );

    public function adjective()
    {
        return static::randomElement(static::$adjectives);
    }

    public function materialName()
    {
        return static::randomElement(static::$materialNames);
    }

    public function product()
    {
        return static::randomElement(static::$productNames);
    }

    public function productName()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    public function departmentName()
    {
        return static::randomElement(static::$departementNames);
    }
}
