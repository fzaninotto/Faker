<?php

namespace Faker\Provider\uz_UZ;

/**
 * Class Color
 * Description: Generates name of colors in uzbek langugae
 *
 * @category  Classes
 * @package   Faker\Provider\uz_UZ
 * @author    Erkin Pardayev <erkin.pardayev@gmail.com>
 * @copyright 2020 Erkin Pardayev
 * @license   GNU https://ru.wikipedia.org/wiki/GNU_General_Public_License
 * @link      https://pardayev.uz
 */

class Color extends \Faker\Provider\Color
{
    /**
     * @var string[]
     */
    protected static $safeColorNames = array(
        'qora', 'yashil', 'siyoh rang', 'pushti', 'ko\'k', 'qizil', 'havorang', 'kumush rang',
        'kulrang', 'sariq', 'oq', 'malla'
    );

    /**
     * @var string[]
     */
    protected static $allColorNames = array(
        'quyuq qizil', 'kokainal', 'qizil rangli', 'alizarinik', 'qizil rangli', 'kardinal',
        'qirmizi', 'patlıcan', 'wisteria', 'limon', 'taup', 'yodgorlik', 'akuamarin', 'indigo',
        'Berlin azure', 'grid-reel', 'antrasit', 'Marengo', 'kinnabar', 'titanium', 'orkide',
        'mandarin', 'xantal', 'armut', 'za\'faron', 'oltin', 'shokolad', 'ocher', 'vanilya',
        'zaytun', 'lavanta', 'ametist', 'kumush', 'nam asfalt', 'qushqo\'nmas', 'yashil yosun',
        'yashil yalpiz (yalpiz)'
    );
}
