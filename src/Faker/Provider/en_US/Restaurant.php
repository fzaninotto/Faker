<?php

namespace Faker\Provider\pt_BR;

class Restaurant extends \Faker\Provider\Base
{

    protected static $foodNames = array(
        'Cheese Pizza', 'Hamburger', 'Cheeseburger', 'Bacon Burger', 'Bacon Cheeseburger',
        'Little Hamburger', 'Little Cheeseburger', 'Little Bacon Burger', 'Little Bacon Cheeseburger',
        'Veggie Sandwich', 'Cheese Veggie Sandwich', 'Grilled Cheese',
        'Cheese Dog', 'Bacon Dog', 'Bacon Cheese Dog', 'Pasta'
    );

    protected static $beverageNames = array(
        'Beer', 'Bud Light', 'Budweiser', 'Miller Lite',
        'Milk Shake', 'Tea', ' Sweet Tea', 'Coffee', 'Hot Tea',
        'Champagne', 'Wine', 'Limonade', 'Coca_cola', 'Diet-Coke',
        'Water', 'Sprite', 'Orange Juice', 'Iced Coffee'
    );

    /**
     * A random Food Name.
     * @return string
     */
    public function foodName()
    {
        return static::randomElement(static::$foodNames);
    }

    /**
     * A random Beverage Name.
     * @return string
     */
    public function beverageName()
    {
        return static::randomElement(static::$beverageNames);
    }
}
