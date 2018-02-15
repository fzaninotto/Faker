<?php

namespace Faker\Provider;

use Faker\Provider\Color;

class Product extends Base
{
    /**
     * Returns a simple formatted product name
     *
     * @example 'Chromium Pants'
     */
    public function simpleProduct()
    {
        $format = static::randomElement(static::$simpleFormats);

        return $this->generator->parse($format);
    }

    /**
     * Returns a fancy formatted product name
     *
     * @example 'Medium Sand Blasted Purse'
     */
    public function fancyProduct()
    {
        $format = static::randomElement(static::$fancyFormats);

        return $this->generator->parse($format);
    }

    /**
     * Returns a complexly formatted product name
     *
     * @example 'Fabulously Clever Low Carbon Toaster'
     */
    public function complexProduct()
    {
        $format = static::randomElement(static::$complexFormats);

        return $this->generator->parse($format);
    }

    /**
     * Returns an elaborately formatted product name
     *
     * @example 'Exorbitantly Wide Incredibly Sparkling Amoled Shirt'
     */
    public function elaborateProduct()
    {
        $format = static::randomElement(static::$elaborateFormats);

        return $this->generator->parse($format);
    }

    /**
     * Returns a random adjective
     *
     * @example 'High-class'
     */
    public static function adjective()
    {
        return static::randomElement(static::$adjectives);
    }

    /**
     * Returns a random adverb
     *
     * @example 'Astonishingly'
     */
    public static function adverb()
    {
        return static::randomElement(static::$adverbs);
    }

    /**
     * Returns a random color, provided by Faker\Color
     *
     * @example 'Alice Blue'
     */
    public static function color()
    {
        $color = preg_split('/(?=[A-Z])/', Color::colorName());

        return implode(' ', $color);
    }

    /**
     * Returns a random size
     *
     * @example 'Miniature'
     */
    public static function size()
    {
        return static::randomElement(static::$sizes);
    }

    /**
     * Returns a random shape
     *
     * @example 'Spherical'
     */
    public static function shape()
    {
        return static::randomElement(static::$shapes);
    }

    /**
     * Returns a random material
     *
     * @example 'Chromium'
     */
    public static function material()
    {
        return static::randomElement(static::$materials);
    }

    /**
     * Returns a random product
     *
     * @example 'Pants'
     */
    public static function product()
    {
        return static::randomElement(static::$products);
    }

    /**
     * Returns a random price
     *
     * @param  integer $min
     * @param  integer $max
     * @param  boolean $real  Determines if price is in integer or real
     * @return [numeric]
     *
     * @example '100.00'
     */
    public static function price($min = 1, $max = 9999, $real = false)
    {
        $padding = ($real == true) ? 100 : 1;
        $price = mt_rand($min * $padding, $max * $padding);

        if ($real == true) {
            $price = number_format($price / 100, 2, '.', '');
        }

        return $price;
    }

    /**
     * Returns a random industry
     *
     * @example 'Pharmaceuticals'
     */
    public static function industry()
    {
        return static::randomElement(static::$industries);
    }
}
