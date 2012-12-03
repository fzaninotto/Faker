<?php

namespace Faker\Provider;

class ImagePlaceholder extends \Faker\Provider\Base
{
	
	const DEFAULT_WIDTH = 400;
	const DEFAULT_HEIGHT = 300; 
	
	public function flickholdr($width = self :: DEFAULT_WIDTH, $height = self :: DEFAULT_HEIGHT, $tags = array(), $bw = false)
	{
		
	}
	
	public function placekitten($width = self :: DEFAULT_WIDTH, $height = self :: DEFAULT_HEIGHT, $bw = false)
	{
		return sprintf('http://placekitten.com/%s%d/%d', ($bw ? 'g/' : ''), $width, $height);
	}
	
	/**
	 * @example http://placehold.it/350x150
	 * @param int $width
	 * @param int $height
	 * @param string $extension
	 * @param string $bgColor
	 * @param string $fgColor
	 * @param string $text
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
	 */
	public function instasrc($width = self :: DEFAULT_WIDTH, $height = self :: DEFAULT_HEIGHT, 
		$category = null, $bw = false, $new = false)
	{
		$category 	= $category ? "/{$category}" : '';
		$effect		= $bw ? '/greyscale' : '/normal';
		$new		= $new ? '/new' : ''; 
		return "http://instasrc.com/{$width}x{$height}{$category}{$effect}{$new}";
	}
	
}