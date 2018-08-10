<?php

namespace Faker\Provider\ImageContracts;

class Placeholder extends ImageContract {

    static function categories()
    {
        return array();
    }

    static function baseUrl()
    {
        return "http://via.placeholder.com/";
    }

    static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
    {
        $url = "{$width}x{$height}/";

        return static::baseUrl() . $url;
    }
}