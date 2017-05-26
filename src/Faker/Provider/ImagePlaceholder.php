<?php

namespace Faker\Provider;

class ImagePlaceholder extends \Faker\Provider\Base
{
	
	const DEFAULT_WIDTH = 400;
	const DEFAULT_HEIGHT = 200;
	
	private static $INSTASRC_TAGS = array(
		'dimensions', 'ad', 'adrenaline', 'agriculture', 
		'animal', 'architecture', 'art', 'aurora', 'boat', 'book', 
		'botanical', 'cemetery', 'city', 'climbing', 'culinary', 
		'dessert', 'exposure', 'fractal', 'future', 'geek', 
		'history', 'instrument', 'kitten', 'machine', 'map', 
		'military', 'nature', 'people', 'quote', 'road', 
		'room', 'sky', 'space', 'statue', 'village', 'water'
	);
	
	private static $LOREM_PIXEL_CATEGORIES = array(
		'abstract', 'animals', 'city', 'food', 
		'night', 'life', 'fashion', 'people', 'nature', 
		'sports', 'technics', 'transport'
	);
	
	/**
	 * @example http://flickholdr.com/200/300/sea,sun/bw
	 * @param int $width
	 * @param int $height
	 * @param array $tags
	 * @param bool $bw
	 */
	public function flickholdr($width = self :: DEFAULT_WIDTH, $height = self :: DEFAULT_HEIGHT, 
		$tags = array(), $bw = false)
	{
		if (count($tags) == 0) {
			$mix = array_merge(self :: $INSTASRC_TAGS, self :: $LOREM_PIXEL_CATEGORIES);
			for ($i = 0; $i < 2; $i++) {
				$tags[] = static :: randomElement($mix); 				
			}
		}
		$tags = '/' . implode(',', $tags);
		$bw = $bw ? '/bw' : '';
		return "http://flickholdr.com/{$width}/{$height}{$tags}{$bw}";
	}
	
	/**
	 * @example http://placekitten.com/200/300
	 * @param int $width
	 * @param int $height
	 * @param bool $bw
	 */
	public function placekitten($width = self :: DEFAULT_WIDTH, $height = self :: DEFAULT_HEIGHT, $bw = false)
	{
		return sprintf('http://placekitten.com/%s%d/%d', ($bw ? 'g/' : ''), $width, $height);
	}
	
	/**
	 * @example http://placehold.it/350x150
	 * @param int $width
	 * @param int $height
	 * @param string $extension Image extension, defaults to GIF
	 * @param string $bgColor Background color, in hex
	 * @param string $fgColor Foreground color, in hex
	 * @param string $text Optional text, defaults to image size
	 * @return string
	 */
	public function placeholdit($width = self :: DEFAULT_WIDTH, $height = null, $extension = 'gif',  
		$bgColor = null, $fgColor = null, $text = null)
	{
		$size 	= $height ? "{$width}x{$height}" : $width;
		$text	= $text ?: \Faker\Provider\Lorem :: words(2, true);
		$query 	= http_build_query(array('text' => $text));
		$colors = $bgColor ? "/{$bgColor}/{$fgColor}" : '';
		 
		return "http://placehold.it/{$size}{$colors}.{$extension}&{$query}";
	}
	
	/**
	 * @example http://instasrc.com/400x300/art/greyscale/new
	 * @param int $width
	 * @param int $height
	 * @param string $category
	 * @param bool $bw
	 * @param bool $new
	 */
	public function instasrc($width = self :: DEFAULT_WIDTH, $height = self :: DEFAULT_HEIGHT, 
		$category = null, $bw = false, $new = true)
	{
		$category 	= $category ? "/{$category}" : '/' . static :: randomElement(self :: $INSTASRC_TAGS);
		$effect		= $bw ? '/greyscale' : '/normal';
		$new		= $new ? '/new' : ''; 
		return "http://instasrc.com/{$width}x{$height}{$category}{$effect}{$new}";
	}
	
	/**
	 * @example http://lorempixel.com/400/200/sports/1
	 */
	public function lorempixel($width = self :: DEFAULT_WIDTH, $height = self :: DEFAULT_HEIGHT, 
		$category = null, $number = null)
	{
		$category 	= $category ?: static :: randomElement(self :: $LOREM_PIXEL_CATEGORIES);
		$number 	= $number ?: static :: numberBetween(1, 10);
		return "http://lorempixel.com/{$width}/{$height}/{$category}/{$number}";
	}
	
}