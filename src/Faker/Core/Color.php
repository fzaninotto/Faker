<?php

declare(strict_types=1);

namespace Faker\Core;

use Faker\Extension;
use Faker\Extension\Helper;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class Color implements Extension\ColorExtension
{
    /**
     * @var string[]
     */
    private $safeColorNames = [
        'black', 'maroon', 'green', 'navy', 'olive',
        'purple', 'teal', 'lime', 'blue', 'silver',
        'gray', 'yellow', 'fuchsia', 'aqua', 'white',
    ];

    /**
     * @var string[]
     */
    private $allColorNames = [
        'AliceBlue', 'AntiqueWhite', 'Aqua', 'Aquamarine',
        'Azure', 'Beige', 'Bisque', 'Black', 'BlanchedAlmond',
        'Blue', 'BlueViolet', 'Brown', 'BurlyWood', 'CadetBlue',
        'Chartreuse', 'Chocolate', 'Coral', 'CornflowerBlue',
        'Cornsilk', 'Crimson', 'Cyan', 'DarkBlue', 'DarkCyan',
        'DarkGoldenRod', 'DarkGray', 'DarkGreen', 'DarkKhaki',
        'DarkMagenta', 'DarkOliveGreen', 'Darkorange', 'DarkOrchid',
        'DarkRed', 'DarkSalmon', 'DarkSeaGreen', 'DarkSlateBlue',
        'DarkSlateGray', 'DarkTurquoise', 'DarkViolet', 'DeepPink',
        'DeepSkyBlue', 'DimGray', 'DimGrey', 'DodgerBlue', 'FireBrick',
        'FloralWhite', 'ForestGreen', 'Fuchsia', 'Gainsboro', 'GhostWhite',
        'Gold', 'GoldenRod', 'Gray', 'Green', 'GreenYellow', 'HoneyDew',
        'HotPink', 'IndianRed', 'Indigo', 'Ivory', 'Khaki', 'Lavender',
        'LavenderBlush', 'LawnGreen', 'LemonChiffon', 'LightBlue', 'LightCoral',
        'LightCyan', 'LightGoldenRodYellow', 'LightGray', 'LightGreen', 'LightPink',
        'LightSalmon', 'LightSeaGreen', 'LightSkyBlue', 'LightSlateGray', 'LightSteelBlue',
        'LightYellow', 'Lime', 'LimeGreen', 'Linen', 'Magenta', 'Maroon', 'MediumAquaMarine',
        'MediumBlue', 'MediumOrchid', 'MediumPurple', 'MediumSeaGreen', 'MediumSlateBlue',
        'MediumSpringGreen', 'MediumTurquoise', 'MediumVioletRed', 'MidnightBlue',
        'MintCream', 'MistyRose', 'Moccasin', 'NavajoWhite', 'Navy', 'OldLace', 'Olive',
        'OliveDrab', 'Orange', 'OrangeRed', 'Orchid', 'PaleGoldenRod', 'PaleGreen',
        'PaleTurquoise', 'PaleVioletRed', 'PapayaWhip', 'PeachPuff', 'Peru', 'Pink', 'Plum',
        'PowderBlue', 'Purple', 'Red', 'RosyBrown', 'RoyalBlue', 'SaddleBrown', 'Salmon',
        'SandyBrown', 'SeaGreen', 'SeaShell', 'Sienna', 'Silver', 'SkyBlue', 'SlateBlue',
        'SlateGray', 'Snow', 'SpringGreen', 'SteelBlue', 'Tan', 'Teal', 'Thistle', 'Tomato',
        'Turquoise', 'Violet', 'Wheat', 'White', 'WhiteSmoke', 'Yellow', 'YellowGreen',
    ];

    /**
     * @example '#fa3cc2'
     */
    public function hexColor(): string
    {
        $number = new Number();

        return '#' . str_pad(dechex($number->numberBetween(1, 16777215)), 6, '0', STR_PAD_LEFT);
    }

    /**
     * @example '#ff0044'
     */
    public function safeHexColor(): string
    {
        $number = new Number();
        $color = str_pad(dechex($number->numberBetween(0, 255)), 3, '0', STR_PAD_LEFT);

        return sprintf(
            '#%s%s%s%s%s%s',
            $color[0],
            $color[0],
            $color[1],
            $color[1],
            $color[2],
            $color[2]
        );
    }

    /**
     * @example 'array(0,255,122)'
     *
     * @return int[]
     */
    public function rgbColorAsArray(): array
    {
        $color = $this->hexColor();

        return [
            hexdec(substr($color, 1, 2)),
            hexdec(substr($color, 3, 2)),
            hexdec(substr($color, 5, 2)),
        ];
    }

    /**
     * @example '0,255,122'
     */
    public function rgbColor(): string
    {
        return implode(',', $this->rgbColorAsArray());
    }

    /**
     * @example 'rgb(0,255,122)'
     */
    public function rgbCssColor(): string
    {
        return sprintf(
            'rgb(%s)',
            $this->rgbColor()
        );
    }

    /**
     * @example 'rgba(0,255,122,0.8)'
     */
    public function rgbaCssColor(): string
    {
        $number = new Number();

        return sprintf(
            'rgba(%s,%s)',
            $this->rgbColor(),
            $number->randomFloat(1, 0, 1)
        );
    }

    /**
     * @example 'blue'
     */
    public function safeColorName(): string
    {
        return Helper::randomElement($this->safeColorNames);
    }

    /**
     * @example 'NavajoWhite'
     */
    public function colorName(): string
    {
        return Helper::randomElement($this->allColorNames);
    }

    /**
     * @example '340,50,20'
     */
    public function hslColor(): string
    {
        $number = new Number();

        return sprintf(
            '%s,%s,%s',
            $number->numberBetween(0, 360),
            $number->numberBetween(0, 100),
            $number->numberBetween(0, 100)
        );
    }

    /**
     * @example array(340, 50, 20)
     *
     * @return int[]
     */
    public function hslColorAsArray(): array
    {
        $number = new Number();

        return [
            $number->numberBetween(0, 360),
            $number->numberBetween(0, 100),
            $number->numberBetween(0, 100),
        ];
    }
}
