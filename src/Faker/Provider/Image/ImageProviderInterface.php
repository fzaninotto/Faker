<?php

namespace Faker\Provider\Image;

interface ImageProviderInterface
{
    public function generateUrl($width, $height, $category, $randomize, $word, $gray);
}
