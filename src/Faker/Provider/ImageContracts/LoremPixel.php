<?php

namespace Faker\Provider\ImageContracts;

class LoremPixel extends ImageContract {

    static function categories()
    {
        return array(
            'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
            'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
        );
    }

    static function baseUrl()
    {
        return "http://lorempixel.com/";
    }

    static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
    {
        $url = "{$width}/{$height}/";

        if ($gray) {
            $url = "gray/" . $url;
        }

        if ($category) {
            if (!in_array($category, static::categories())) {
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

        return static::baseUrl() . $url;
    }
}