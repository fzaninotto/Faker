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
    public static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null)
    {
        $url = "http://lorempixel.com/{$width}/{$height}/";
        if ($category) {
            if (! in_array($category, static::$categories)) {
                throw new \InvalidArgumentException(sprintf('Unknown image category "%s"', $category));
            }
            $url .= "{$category}/";
            if ($word) {
                $url .= "{$word}/";
            }
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
    public static function image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null)
    {
        $dir = is_null($dir) ? sys_get_temp_dir() : $dir; // GNU/Linux / OS X / Windows compatible
                                                          // Validate directory path
        if (! is_dir($dir) || ! is_writable($dir)) {
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

        if (! $success) {
            // could not contact the distant URL or HTTP error - fail silently.
            return false;
        }

        return $fullPath ? $filepath : $filename;
    }

    /**
     * Generate a new image to disk and return its location
     *
     * Requires gd (default in most PHP setup).
     *
     * @example '/path/to/dir/13b73edae8443990be1aa8f1a483bc27.jpg'
     *
     * @param string $dir Path of the generated file
     * @param integer $width Width of the picture in pixels
     * @param integer $height Height of the picture in pixels
     * @param string $format Image format, jpg or png. Default as jpg
     * @param bool $fullPath Return full pathfile if true
     * @param string $word Text to generate on the picture, default to width and height.
     * @param string $backgroundColor Background color in hexadecimal format (eg. #7f7f7f), default to black
     * @param string $textColor Text color in hexadecimal format, default to white
     */
    public function imageGenerator($dir = null, $width = 640, $height = 480, $format = 'jpg', $fullPath = true, $word = null, $backgroundColor = null, $textColor = null)
    {
        $dir = is_null($dir) ? sys_get_temp_dir() : $dir; // GNU/Linux / OS X / Windows compatible
                                                          // Validate directory path
        if (! is_dir($dir) || ! is_writable($dir)) {
            throw new \InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir));
        }

        // Generate a random filename. Use the server address so that a file
        // generated at the same time on a different server won't have a collision.
        $name = md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true));
        $filename = $name . '.' . $format;
        $filepath = $dir . DIRECTORY_SEPARATOR . $filename;

        if (function_exists('imagecreate')) {
            $image = imagecreate($width, $height);
            if ($backgroundColor) {
                $rgb = str_split(substr($backgroundColor, 1), 2);
                imagecolorallocate($image, hexdec($rgb[0]), hexdec($rgb[1]), hexdec($rgb[2]));
            } else {
                imagecolorallocate($image, 0, 0, 0);
            }

            if (is_null($word)) {
                $word = $width . 'x' . $height;
            }

            if ($textColor) {
                $rgb = str_split(substr($textColor, 1), 2);
                $text_color = imagecolorallocate($image, hexdec($rgb[0]), hexdec($rgb[1]), hexdec($rgb[2]));
            } else {
                $text_color = imagecolorallocate($image, 255, 255, 255);
            }

            $fontSize = 200;
            $textBoundingBox = imagettfbbox($fontSize, 0, __DIR__ . '/font/Roboto-Regular.ttf', $word);
            // decrease the default font size until it fits nicely within the image - Code adapted from https://github.com/img-src/placeholder
            while (((($width - ($textBoundingBox[2] - $textBoundingBox[0])) < 10) || (($height - ($textBoundingBox[1] - $textBoundingBox[7])) < 10)) && ($fontSize > 1)) {
                $fontSize --;
                $textBoundingBox = imagettfbbox($fontSize, 0, __DIR__ . '/font/Roboto-Regular.ttf', $word);
            }
            imagettftext($image, $fontSize, 0, ($width / 2) - (($textBoundingBox[2] - $textBoundingBox[0]) / 2), ($height / 2) + (($textBoundingBox[1] - $textBoundingBox[7]) / 2), $text_color, __DIR__ . '/font/Roboto-Regular.ttf', $word);

            switch ($format) {
                case 'jpg':
                case 'jpeg':
                case 'JPG':
                case 'JPEG':
                default:
                    $success = imagejpeg($image, $filepath);
                    break;
                case 'png':
                case 'PNG':
                    $success = imagepng($image, $filepath);
            }
            $success = imagedestroy($image);
        } else {
            return new \RuntimeException('GD is not available on this PHP installation. Impossible to generate image.');
        }

        if (! $success) {
            // could not save the file - fail silently.
            return false;
        }

        return $fullPath ? $filepath : $filename;
    }
}
