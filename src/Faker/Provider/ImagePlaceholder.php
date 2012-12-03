<?php

namespace Faker\Provider;

class ImagePlaceholder extends \Faker\Provider\Base
{
	
	const DEFAULT_WIDTH = 400;
	const DEFAULT_HEIGHT = 300; 
	
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
		$tags = count($tags) > 0 ? '/' . implode(',', $tags) : '';
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
		$query 	= $text ? '&' . http_build_query(array('text' => $text)) : '';
		$colors = $bgColor ? "/{$bgColor}/{$fgColor}" : '';
		 
		return "http://placehold.it/{$size}{$colors}.{$extension}{$query}";
	}
	
	/**
	 * @example http://instasrc.com/400x300/food/greyscale/new
	 * @param int $width
	 * @param int $height
	 * @param string $category
	 * @param bool $bw
	 * @param bool $new
	 */
	public function instasrc($width = self :: DEFAULT_WIDTH, $height = self :: DEFAULT_HEIGHT, 
		$category = null, $bw = false, $new = false)
	{
		$category 	= $category ? "/{$category}" : '';
		$effect		= $bw ? '/greyscale' : '';
		$new		= $new ? '/new' : ''; 
		return "http://instasrc.com/{$width}x{$height}{$category}{$effect}{$new}";
	}
	
}