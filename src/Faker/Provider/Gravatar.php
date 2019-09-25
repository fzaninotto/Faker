<?php

namespace Faker\Provider;

class Gravatar extends Base
{
    private static $modes = array(
        'blank',
        'identicon',
        'monsterid',
        'mp',
        'retro',
        'robohash',
        'wavatar',
    );

    private static $url = 'https://www.gravatar.com/avatar/%s.jpg?d=%s&size=%d';

    public static function gravatarUrl($mode = null, $email = null, $size = 80)
    {
        if (!$mode || !in_array($mode, static::$modes, true)) {
            $mode = 'retro';
        }

        if ($email) {
            $hash = md5(static::toLower($email));
        } else {
            $hash = static::randomNumber(5, true);
        }

        return sprintf(static::$url, $hash, $mode, $size);
    }

    public static function gravatar($dir = null, $mode = null, $email = null, $size = 80, $fullPath = true)
    {
        $dir = null === $dir ? sys_get_temp_dir() : $dir;

        if (!is_dir($dir) || !is_writable($dir)) {
            throw new \InvalidArgumentException(sprintf('Cannot write to directory "%s"', $dir));
        }

        $name = md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true));
        $filename = $name.'.jpg';
        $filepath = $dir.DIRECTORY_SEPARATOR.$filename;

        $url = static::gravatarUrl($mode, $email, $size);

        // save file
        if (function_exists('curl_exec')) {
            // use cURL
            $fp = fopen($filepath, 'w');
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_FILE, $fp);
            $success = curl_exec($ch) && 200 === curl_getinfo($ch, CURLINFO_HTTP_CODE);
            fclose($fp);
            curl_close($ch);

            if (!$success) {
                unlink($filepath);

                // could not contact the distant URL or HTTP error - fail silently.
                return false;
            }
        } elseif (ini_get('allow_url_fopen')) {
            copy($url, $filepath);
        } else {
            return new \RuntimeException('The image formatter downloads an image from a remote HTTP server. Therefore, it requires that PHP can request remote hosts, either via cURL or fopen()');
        }

        return $fullPath ? $filepath : $filename;
    }
}
