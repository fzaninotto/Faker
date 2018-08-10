<?php

namespace Faker\Provider\ImageContracts;

class PicsumPhotos extends ImageContract 
{

    protected static function categories()
    {
        return array();
    }

    protected static function baseUrl()
    {
        return "http://picsum.photos/";
    }

    public static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
    {
        $url = "{$width}/{$height}/";

        if ($gray) {
            $url = "g/" . $url;
        }

        if ($randomize) {
            $url .= '?random';
        }

        return static::baseUrl() . $url;
    }
}
