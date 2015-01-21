<?php

namespace Faker\Provider;

/**
 * Depends on image generation from http://lorempixel.com/
 */
class Image extends Base
{
    protected static $categories = array(
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
    );

    protected static $placeimg_cats = array(
        'animals', 'arch', 'nature', 'people', 'tech', 'any'
    );


    /**
     * Generate the URL that will return a random image
     *
     * Set randomize to false to remove the random GET parameter at the end of the url.
     *
     * @example 'http://lorempixel.com/640/480/?12345'
     */
    public static function imageUrl($service = 'lorem', $width = 640, $height = 480, $category = null, $randomize = true, $filter = null, $blur = null, $gravity = null)
    {

        if ($service == 'Unsplash')
        {
            return self::Unsplash($width, $height, $randomize, $filter, $blur, $gravity);
        }
        elseif ($service == 'placeimg')
        {
            return self::placeImg($width, $height, $category, $filter);
        }
        else
        {
            $url = "http://lorempixel.com/{$width}/{$height}/";

            if ($category) {
                if (!in_array($category, static::$categories)) {
                    throw new \InvalidArgumentException(sprintf('Unkown image category "%s"', $category));
                }
                $url .= "{$category}/";
            }

            if ($randomize) {
                $url .= '?' . static::randomNumber(5, true);
            }

            return $url;
        }

    }

    /**
     * https://unsplash.it/
     * @param integer $width     [inherit]
     * @param integer $height    [inherit]
     * @param [type]  $randomize [Generate a Random image]
     * @param [type]  $filter    [GrayScale]
     * @param [type]  $blur      [Blur]
     * @param [type]  $gravity   [Crop Gravity]
     */
    private static function Unsplash($width, $height, $randomize, $filter = null, $blur = null, $gravity = null)
    {

        // check if user wants the image to be in grayscale or use standard
        if ($filter) {
            $url = "https://unsplash.it/g/{$width}/{$height}/";
        } else {
            $url = "https://unsplash.it/{$width}/{$height}/";
        }

        if ($gravity) {
            if (!in_array($gravity, static::$gravity_dir)) {
                throw new \InvalidArgumentException($gravity . ' is invalid ,use any of (north, east, south, west, center)');
            }
        }

        // check what was given to construct the url
        // this is a better/different approach from of the native "?random"
        if ($randomize) {
            $url .= '?image=' . rand(0, 605);
            if ($blur) {
                $url .= "&blur";
            }
            if ($gravity) {
               $url .= "&gravity=$gravity";
            }
        } elseif ($blur) {
            $url .= "?blur";
            if ($gravity) {
               $url .= "&gravity=$gravity";
            }
        } elseif ($gravity) {
           $url .= "?gravity=$gravity";
        }

        return $url;
    }


    /**
     * http://placeimg.com/
     * @param  integer $width    [inherit]
     * @param  integer $height   [inherit]
     * @param  [type]  $category [search in a specific category]
     * @param  [type]  $filter   [GrayScale or sepia]
     * @return [type]            [url]
     */
    private static function placeImg($width, $height, $category, $filter)
    {
        $url = "http://placeimg.com/{$width}/{$height}/";
        if ($category) {
           if (!in_array($category, static::$placeimg_cats)) {
                throw new \InvalidArgumentException('Unkown image category ' . $category);
            }
            $url .= "{$category}";
        }

        $filters = ['grayscale','sepia'];

        if ($filter) {
            if (!in_array($filter, $filters)) {
                throw new \InvalidArgumentException($filter . ' is invalid ,use either (grayscale or sepia)');
            }
            $url .= '/' . $filter;
        }

        return $url;
    }

    /**
     * Download a remote random image to disk and return its location
     *
     * Requires curl, or allow_url_fopen to be on in php.ini.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    public static function image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true)
    {
        $dir = is_null($dir) ? sys_get_temp_dir() : $dir; // GNU/Linux / OS X / Windows compatible
        // Validate directory path
        if (!is_dir($dir) || !is_writable($dir)) {
            throw new \InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir));
        }

        // Generate a random filename. Use the server address so that a file
        // generated at the same time on a different server won't have a collision.
        $name = md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true));
        $filename = $name .'.jpg';
        $filepath = $dir . DIRECTORY_SEPARATOR . $filename;

        $url = static::imageUrl($width, $height, $category);

        // save file
        if (function_exists('curl_exec')) {
            // use cURL
            $fp = fopen($filepath, 'w');
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_FILE, $fp);
            $success = curl_exec($ch);
            curl_close($ch);
            fclose($fp);
        } elseif (ini_get('allow_url_fopen')) {
            // use remote fopen() via copy()
            $success = copy($url, $filepath);
        } else {
            return new \RuntimeException('The image formatter downloads an image from a remote HTTP server. Therefore, it requires that PHP can request remote hosts, either via cURL or fopen()');
        }

        if (!$success) {
            // could not contact the distant URL or HTTP error - fail silently.
            return false;
        }

        return $fullPath ? $filepath : $filename;
    }
}
