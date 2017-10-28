<?php

namespace Faker\Provider;

/**
 * Depends on image generation from http://lorempixel.com/
 */
class Image extends Base
{
    protected static $engine = null;
    protected static $engines = array(
        'lorempixel',
        'source.unsplash',
        'loremflickr'
    );

    protected static $baseUrl = null;
    protected static $categories = null;

    /**
     * Get the list of available image categories
     *
     * @return array
     */
    public static function imageEngine($engine = null)
    {
        if (empty($engine)) {
            reset(static::$engines);
            $engine = current(static::$engines);
        }

        if (in_array($engine, static::$engines)) {
            static::$engine = $engine;

            switch ($engine) {
                case 'lorempixel':
                    static::$baseUrl = 'https://lorempixel.com/';
                    static::$categories = array(
                        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
                        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
                    );
                    break;

                case 'source.unsplash':
                    static::$baseUrl = 'https://source.unsplash.com/';
                    static::$categories = null;
                    break;

                case 'loremflickr':
                    static::$baseUrl = 'https://loremflickr.com/';
                    static::$categories = null;
                    break;
            }
        }
    }

    /**
     * Get the list of available image categories
     *
     * @return array
     */
    public static function imageCategories()
    {
        return static::$categories;
    }

    /**
     * Generate the URL that will return a random image
     *
     * Set randomize to false to remove the random GET parameter at the end of the url.
     *
     * @example 'http://lorempixel.com/640/480/?12345'
     *
     * @param integer $width
     * @param integer $height
     * @param string|null $category
     * @param bool $randomize
     * @param string|null $word
     * @param bool $gray
     *
     * @return string
     */
    public static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
    {
        if (empty(static::$engine)) {
            static::imageEngine();
        }


        switch (static::$engine) {
            case 'lorempixel':
                $url = "{$width}/{$height}/";

                if ($gray) {
                    $url = 'gray/' . $url;
                }

                if ($category) {
                    if (!in_array($category, static::$categories)) {
                        throw new \InvalidArgumentException(sprintf('Unknown image category "%s"', $category));
                    }
                    $url .= "{$category}/";
                    if ($word) {
                        $url .= rawurlencode($word) . '/';
                    }
                }

                if ($randomize) {
                    $url .= '?' . static::randomNumber(5, true);
                }
                break;

            case 'source.unsplash':
                $url = "{$width}x{$height}/";

                if ($category) {
                    $url .= '?' . rawurlencode($category);
                }

                if ($randomize) {
                    if ($category) {
                        $url .= '&';
                    } else {
                        $url .= '?';
                    }
                    $url .= static::randomNumber(5, true);
                }
                break;

            case 'loremflickr':
                $url = "{$width}/{$height}/";

                if ($gray) {
                    $url = 'g/' . $url;
                }

                if ($category) {
                    $url .= rawurlencode($category) . '/';
                }

                if ($randomize) {
                    $url .= '?' . static::randomNumber(5, true);
                }
                break;
        }

        return static::$baseUrl . $url;
    }

    /**
     * Download a remote random image to disk and return its location
     *
     * Requires curl, or allow_url_fopen to be on in php.ini.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    public static function image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null)
    {
        $dir = is_null($dir) ? sys_get_temp_dir() : $dir; // GNU/Linux / OS X / Windows compatible
        // Validate directory path
        if (!is_dir($dir) || !is_writable($dir)) {
            throw new \InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir));
        }

        // Generate a random filename. Use the server address so that a file
        // generated at the same time on a different server won't have a collision.
        $name = md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true));
        $filename = $name . '.jpg';
        $filepath = $dir . DIRECTORY_SEPARATOR . $filename;

        $url = static::imageUrl($width, $height, $category, $randomize, $word);

        // save file
        if (function_exists('curl_exec')) {
            // use cURL
            $fp = fopen($filepath, 'w');
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_FILE, $fp);
            $success = curl_exec($ch) && curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200;

            if ($success) {
                fclose($fp);
            } else {
                unlink($filepath);
            }

            curl_close($ch);
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
