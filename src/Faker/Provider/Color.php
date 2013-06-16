<?php
/**
 * Created by lsv
 * Date: 6/17/13
 * Time: 12:49 AM
 */

namespace Faker\Provider;


class Color extends Base
{

	protected static $hexcodes = array(
		'0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
		'a', 'b', 'c', 'd', 'e', 'f'
	);

	protected static $safeColorNames = array(
		'black', 'maroon', 'green', 'navy', 'olive',
		'purple', 'teal', 'lime', 'blue', 'silver',
		'gray', 'yellow', 'fuchsia', 'aqua', 'white'
	);

	protected static $allColorNames = array(
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
		'HotPink', 'IndianRed ', 'Indigo ', 'Ivory', 'Khaki', 'Lavender',
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
		'Turquoise', 'Violet', 'Wheat', 'White', 'WhiteSmoke', 'Yellow', 'YellowGreen'
	);

	/**
	 * @example '#fa3cc2'
	 */
	public static function hexColor()
	{
		return sprintf('#%s%s%s%s%s%s',
			static::randomElement(static::$hexcodes),
			static::randomElement(static::$hexcodes),
			static::randomElement(static::$hexcodes),
			static::randomElement(static::$hexcodes),
			static::randomElement(static::$hexcodes),
			static::randomElement(static::$hexcodes)
		);
	}

	/**
	 * @example '#ff0044'
	 */
	public static function safeHexColor()
	{
		$color1 = static::randomElement(static::$hexcodes);
		$color2 = static::randomElement(static::$hexcodes);
		$color3 = static::randomElement(static::$hexcodes);
		return sprintf('#%s%s%s%s%s%s',
			$color1,
			$color1,
			$color2,
			$color2,
			$color3,
			$color3
		);
	}

	/**
	 * @example 'array(0,255,122)'
	 */
	public static function rgbColorAsArray()
	{
		$rgb = array();
		$color = str_replace('#', '', static::hexColor());
		$rgb[] = hexdec(substr($color,0,2));
		$rgb[] = hexdec(substr($color,2,2));
		$rgb[] = hexdec(substr($color,4,2));
		return $rgb;
	}

	/**
	 * @example '0,255,122'
	 */
	public static function rgbColor()
	{
		return implode(',', static::rgbColorAsArray());
	}

	/**
	 * @example 'blue'
	 */
	public static function safeColorName()
	{
		return static::randomElement(static::$safeColorNames);
	}

	/**
	 * @example 'NavajoWhite'
	 */
	public static function colorName()
	{
		return static::randomElement(static::$allColorNames);
	}

}