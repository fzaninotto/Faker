<?php

namespace Faker\Provider;

/**
 * Depends on image generation from http://lorempixel.com/.
 */
class Image extends Base
{
    protected static array $categories = [
        'abstract',
        'animals',
        'business',
        'cats',
        'city',
        'food',
        'nightlife',
        'fashion',
        'people',
        'nature',
        'sports',
        'technics',
        'transport',
    ];

    /**
     * Generate the URL that will return a random image.
     *
     * Set randomize to false to remove the random GET parameter at the end of the url.
     *
     * @example 'http://lorempixel.com/640/480/?12345'
     */
    public static function imageUrl(int $width = 640, int $height = 480, ?string $category = null, bool $randomize = true, ?string $word = null, bool $gray = false): string
    {
        $baseUrl = 'https://lorempixel.com/';
        $url = "{$width}/{$height}/";

        if ($gray) {
            $url = 'gray/'.$url;
        }

        if ($category) {
            if (!\in_array($category, static::$categories, true)) {
                throw new \InvalidArgumentException(\sprintf('Unknown image category "%s"', $category));
            }
            $url .= "{$category}/";
            if ($word) {
                $url .= "{$word}/";
            }
        }

        if ($randomize) {
            $url .= '?'.static::randomNumber(5, true);
        }

        return $baseUrl.$url;
    }

    /**
     * Download a remote random image to disk and return its location.
     *
     * Requires curl, or allow_url_fopen to be on in php.ini.
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     */
    public static function image(?string $dir = null, int $width = 640, int $height = 480, ?string $category = null, bool $fullPath = true, bool $randomize = true, ?string $word = null, bool $gray = false): string
    {
        $dir = $dir ?? \sys_get_temp_dir(); // GNU/Linux / OS X / Windows compatible
        // Validate directory path
        if (!\is_dir($dir) || !\is_writable($dir)) {
            throw new \InvalidArgumentException(\sprintf('Cannot write to directory "%s"', $dir));
        }

        // Generate a random filename. Use the server address so that a file
        // generated at the same time on a different server won't have a collision.
        $name = \md5(\uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true));
        $filename = $name.'.jpg';
        $filepath = $dir.\DIRECTORY_SEPARATOR.$filename;

        $url = static::imageUrl($width, $height, $category, $randomize, $word, $gray);

        // save file
        if (\function_exists('curl_exec')) {
            // use cURL
            $fp = \fopen($filepath, 'wb');
            $ch = \curl_init($url);
            \curl_setopt($ch, \CURLOPT_FILE, $fp);
            $success = \curl_exec($ch) && 200 === \curl_getinfo($ch, \CURLINFO_HTTP_CODE);
            \fclose($fp);
            \curl_close($ch);

            if (!$success) {
                \unlink($filepath);

                // could not contact the distant URL or HTTP error - fail silently.
                return false;
            }
        } elseif (\ini_get('allow_url_fopen')) {
            // use remote fopen() via copy()
            \copy($url, $filepath);
        } else {
            return new \RuntimeException(
                'The image formatter downloads an image from a remote HTTP server. Therefore, it requires that PHP can request remote hosts, either via cURL or fopen()'
            );
        }

        return $fullPath ? $filepath : $filename;
    }
}
