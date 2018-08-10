<?php

namespace Faker\Provider\ImageContracts;

class PlaceKitten extends ImageContract {

    static function categories()
    {
        return array();
    }

    static function baseUrl()
    {
        return "http://placekitten.com/";
    }

    static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
    {
        $url = "{$width}/{$height}/";

        if ($gray) {
            $url = "g/" . $url;
        }

        return static::baseUrl() . $url;
    }
}