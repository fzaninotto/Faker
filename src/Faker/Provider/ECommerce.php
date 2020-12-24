<?php

namespace Faker\Provider;

class ECommerce extends Base
{

    protected static $productFormat = array(
        '{{brand}} - {{productName}}'
    );

    public static $products = array('iMac', 'MacBook Pro', 'Galaxy M20', 'Galaxy M10');

    public static $brands = array('Apple', 'Samsung');

    protected static $categories = array('Electronics', 'Books');

    /**
     * @return  string
     * @example 'Apple - MacBook | Canon - EOS 5D'
     */
    public function product()
    {
        $format = static::randomElement(static::$productFormat);
        return $this->generator->parse($format);
    }

    /**
     * @return  string
     * @example Apple
     */
    public static function brand()
    {
        return static::randomElement(static::$brands);
    }

    /**
     * @return  string
     * @example Monitor
     */
    public static function category()
    {
        return static::randomElement(static::$categories);
    }

    /**
     * @example 'Macbook Pro'
     * @return  string
     */
    public static function productName()
    {
        return static::randomElement(static::$products);
    }
}
