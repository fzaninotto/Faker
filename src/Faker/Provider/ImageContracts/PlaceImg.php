<?php

namespace Faker\Provider\ImageContracts;

class PlaceImg extends ImageContract
{

    protected static function categories()
    {
        return array(
            'animals', 'architecture', 'nature', 'people', 'tech'
        );
    }

    protected static function baseUrl()
    {
        return "http://placeimg.com/";
    }

    public static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
    {
        $url = "{$width}/{$height}/";

        if ($category) {
            if (!in_array($category, static::categories())) {
                throw new \InvalidArgumentException(sprintf('Unknown image category "%s"', $category));
            }
            $url .= "{$category}/";
        }

        if ($gray) {
            $url .= "grayscale/";
        }

        return static::baseUrl() . $url;
    }
}
