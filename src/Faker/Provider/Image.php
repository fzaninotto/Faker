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

    /**
     * Generate the URL that will return a random image
     *
     * Set randomize to false to remove the random GET parameter at the end of the url.
     *
     * @example 'http://lorempixel.com/640/480/?12345'
     */
    public static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true)
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

    /**
     * Download a remote random image to disk and return its location
     *
     * Requires curl, or allow_url_fopen to be on in php.ini.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    public static function image($dir = '/tmp', $width = 640, $height = 480, $category = null, $fullPath = true)
    {
        // Validate directory path
        if (!is_dir($dir) || !is_writable($dir)) {
            throw new \InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir));
        }

        $filename = self::generateRandomFilename();
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

    /**
     * Create a random image filled with random color on disk and return its location
     *
     * Requires gd extension in php.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    public static function imageColor($dir = '/tmp', $width = 640, $height = 480, $fullPath = true)
    {
        if (!extension_loaded('gd')) {
            throw new \Exception('GD extension is required to generate image');
        }

        // Validate directory path
        if (!is_dir($dir) || !is_writable($dir)) {
            throw new \InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir));
        }

        $filename = self::generateRandomFilename();
        $filepath = $dir . DIRECTORY_SEPARATOR . $filename;

        $imageHandle = imagecreatetruecolor($width, $height);

        $color = imagecolorallocate($imageHandle, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
        imagefill($imageHandle, 0, 0, $color);

        imagejpeg($imageHandle, $filepath);
        imagedestroy($imageHandle);

        return $fullPath ? $filepath : $filename;
    }

    /**
     * Generate a random filename. Use the server address so that a file
     * generated at the same time on a different server won't have a collision.
     */
    private static function generateRandomFilename()
    {
        $name = md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true));
        return $name .'.jpg';
    }
}
