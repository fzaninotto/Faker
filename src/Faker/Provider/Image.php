<?php

namespace Faker\Provider;

/**
 * Depends on image generation from http://lorempixel.com/
 */
class Image extends Base {
	
    static protected $categories = array('abstract','animals','business','cats','city','food','nightlife','fashion','people','nature','sports','technics','transport');
    
    /**
     * Massage singular and other alternate versions of categories
     */
    static private function singular($category) {
        switch($category) {
            case 'animal':     return 'animals';
            case 'cat':        return 'cats';
            case 'person':     return 'people';
            case 'sport':      return 'sports';
            case 'technic':    return 'tehnics';
            case 'technical':  return 'tehnics';
            default:           return $category;
        }
    }
    
    /**
     * Generate the URL that will return a random image
     * @example 'http://lorempixel.com/1160/1160/'
     */
    static public function imageUrl($width = 1160, $height = 1160, $category = null) 
    {
        $url = "http://lorempixel.com/{$width}/{$height}/";
        if ($category) {
            $category = static::singular($category);
            if (in_array($category, static::$categories)) $url .= "{$category}/";
        }
        return $url;
    }
    
    /**
     * Download a remote URL to disk
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    static public function image($dir, $width = 1160, $height = 1160, $category = null) {
        
        // Validate directory path
         if (!is_dir($dir) || !is_writable($dir)) return false;
        
        // Generate a random filename.  Use the server address so that a file generated at the same
        // time on a different server won't have a collision.
        if (substr($dir, -1, 1) != '/') $dir .= '/';
        $name = md5(uniqid(empty($_SERVER['SERVER_ADDR'])?:$_SERVER['SERVER_ADDR'], true));
        $dst = $dir.$name.'.jpg';
        
        // Save file
        if (copy(static::imageUrl($width, $height, $category), $dst)) return $dst;
        else return false;
        
    }
    
    /**
     * Generate an image using the category name.  Like "Image::natureImageUrl()"
     * @example 'http://lorempixel.com/1160/1160/'
     */
    public static function __callStatic($name, $arguments) {
        
        // Strip the category from the name
        if (!($i = strpos($name, 'Image'))) return false;
        $category = substr($name, 0, $i);
        $function = substr(str_replace('Image', 'image', $name), $i);
        if (!in_array($function, array('image', 'imageUrl'))) return false;
        
        // Call the real function
        return call_user_func_array(__CLASS__.'::'.$function, $arguments);
        
    }
	
}