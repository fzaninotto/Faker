<?php

namespace Faker\Provider\Image;
use Faker\Provider\Base;

class LoremPixelProvider implements ImageProviderInterface
{
    private $baseUrl = "https://lorempixel.com/";
    private static $categories = array(
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
    );

    public function generateUrl($width, $height, $category, $randomize, $word, $gray)
    {
        $url = "{$width}/{$height}/";

        if ($gray) {
            $url = "gray/" . $url;
        }

        if ($category) {
            if (!in_array($category, self::$categories)) {
                throw new \InvalidArgumentException(sprintf('Unknown image category "%s"', $category));
            }
            $url .= "{$category}/";
            if ($word) {
                $url .= "{$word}/";
            }
        }

        if ($randomize) {
            $url .= '?' . Base::randomNumber(5, true);
        }

        return $this->baseUrl . $url;
    }

}