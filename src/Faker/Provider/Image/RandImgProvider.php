<?php

namespace Faker\Provider\Image;
use Faker\Provider\Base;

class RandImgProvider implements ImageProviderInterface
{
    private $baseUrl = 'http://www.rand-img.com/';
    private static $categories = array(
        'abstract', 'animals', 'business', 'cats', 'city', 'food', 'nightlife',
        'fashion', 'people', 'nature', 'sports', 'technics', 'transport'
    );

    public function generateUrl($width, $height, $category, $randomize, $word, $gray)
    {
        $url = "{$width}/{$height}/";

        if ($category) {
            if (!in_array($category, self::$categories)) {
                throw new \InvalidArgumentException(sprintf('Unknown image category "%s"', $category));
            }
            $url .= "{$category}/";
        }

        if ($randomize) {
            $url .= '?rand=' . Base::randomNumber(5, true);
        }

        if ($gray) {
            $url = "?gray";
        }

        return $this->baseUrl . $url;
    }

}