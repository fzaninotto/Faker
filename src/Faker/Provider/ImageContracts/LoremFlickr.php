<?php

namespace Faker\Provider\ImageContracts;

class LoremFlickr extends ImageContract 
{

    protected static function categories()
    {
        return array(
            'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
            'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
        );
    }

    protected static function baseUrl()
    {
        return "http://loremflickr.com/";
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

        if ($randomize) {
            $url .= '?random=' . static::randomNumber(5, true);
        } else {
            $url .= '?lock=1';
        }

        return static::baseUrl() . $url;
    }
}
