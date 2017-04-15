<?php

namespace Faker\Provider;

/**
 * @author davidmpaz
 */
class Clothe extends \Faker\Provider\Color
{
    protected static $formats = array(
        '{{colorName}} {{clotheName}}',
        '{{colorName}} {{clotheName}}',
        '{{clotheName}}',
        '{{clotheName}}'
    );

    protected static $allClotheNames = array(
        'Vest', 'Top', 'Jean', 'Sock', 'Dress', 'Skirt', 'Blouses', 'Blazer',
        'Trouser', 'Coats', 'Jackets', 'Bikini', 'Bodies', 'Bra', 'Camisole',
         'Shoes', 'Boots', 'Sandals', 'Slippers', 'Belt', 'Hat', 'Scarve',
         'Gloves', 'Shorts', 'Short Pant', 'Suit', 'Jumpers', 'Bag', 'Purse',
         'Wallet', 'Sunglasses'
    );

    /**
     * @example 'T-Shirt'
     */
    public function clothe()
    {
        $format = static::randomElement(static::$formats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Blouse'
     */
    public static function clotheName()
    {
        return static::randomElement(static::$allClotheNames);
    }

}
