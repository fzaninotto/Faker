<?php

namespace Faker\Provider;

/**
 * Generate image placeholders, inspired by https://dummyimage.com/
 */
class ImagePlaceholder extends Base
{
    /**
     * Generates image and returns its location
     *
     * Inspired by https://dummyimage.com/
     *
     * @param string $dir Directory where to save image. Defaults to system temp dir
     * @param int $width Image width
     * @param int $height Image height
     * @param bool $fullPath Whether to return full path or filename
     * @param string $bgColor Background color
     * @param string $color Text color
     * @param string $format File format - gif, png, jpg
     * @param string $font Font filename, defaults to arial
     * @param string $text What text to show. Defaults to "Width x Height"
     * @return string Filename or fullpath of generated image
     * @throws \Exception
     */
    public static function imagePlaceholder(
        $dir = null,
        $width = 640,
        $height = 480,
        $fullPath = true,
        $bgColor = 'ccc',
        $color = '000',
        $format = 'jpg',
        $font = null,
        $text = null
    ) {
        if (!extension_loaded('gd')) {
            throw new \Exception('GD extension is required to generate image');
        }

        if ($width < 1 || $height < 1) {
            throw new \InvalidArgumentException('Width and height cannot be less than 1');
        }

        $dir = is_null($dir) ? sys_get_temp_dir() : $dir; // GNU/Linux / OS X / Windows compatible
        // Validate directory path
        if (!is_dir($dir) || !is_writable($dir)) {
            throw new \InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir));
        }

        // Generate a random filename. Use the server address so that a file
        // generated at the same time on a different server won't have a collision.
        $name = md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true));
        $filename = $name . '.' . $format;
        $filepath = $dir . DIRECTORY_SEPARATOR . $filename;

        $bgColor = self::hexToRgb($bgColor);
        $color = self::hexToRgb($color);

        $img = imagecreatetruecolor($width, $height);
        $bgColor = imagecolorallocate($img, $bgColor[0], $bgColor[1], $bgColor[2]);
        $color = imagecolorallocate($img, $color[0], $color[1], $color[2]);

        if (!$text) {
            // This is the default text string that will go right in the middle of the rectangle
            // &#215; is the multiplication sign, it is not an 'x'
            $text = $width . " &#215; " . $height;
        }

        if (!$font) {
            $font = __DIR__ . '/../../../fonts/arial.ttf';
        }

        $fontsize = max(min($width / mb_strlen($text) * 1.15, $height * 0.5), 5);
        $textBox = imagettfbbox($fontsize, 0, $font, $text);
        $textWidth = ceil(abs($textBox[4] - $textBox[0]));
        $textHeight = ceil(abs($textBox[5] - $textBox[1]));
        $textX = ceil(($width - $textWidth) / 2);
        $textY = ceil(($height - $textHeight) / 2 + $textHeight);

        imagefilledrectangle($img, 0, 0, $width, $height, $bgColor);
        imagettftext($img, $fontsize, 0, $textX, $textY, $color, $font, $text);

        // Create the final image based on the provided file format.
        switch ($format) {
            case 'gif':
                imagegif($img, $filepath);
                break;
            case 'png':
                imagepng($img, $filepath);
                break;
            case 'jpg':
            case 'jpeg':
                imagejpeg($img, $filepath);
                break;
            default:
                throw new \InvalidArgumentException("Undefined file format '$format'. Must be 'gif', 'png' or 'jpg'");
        }

        return $fullPath ? $filepath : $filename;
    }

    protected static function hexToRgb($hex)
    {
        $hex = strtolower($hex);
        $hex = preg_replace('/#/', '', $hex);
        $hexlength = strlen($hex);

        switch ($hexlength) {
            case 1:
                $hex = $hex . $hex . $hex . $hex . $hex . $hex;
                break;
            case 2:
                $hex = $hex[0] . $hex[1] . $hex[0] . $hex[1] . $hex[0] . $hex[1];
                break;
            case 3:
                $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
                break;
        }

        return array(
            hexdec(substr($hex, 0, 2)),
            hexdec(substr($hex, 2, 2)),
            hexdec(substr($hex, 4, 2))
        );
    }
}
