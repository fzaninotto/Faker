<?php

namespace Faker\Provider\ImageContracts;

use Faker\Provider\Base;

abstract class ImageContract extends Base 
{

    protected abstract static function categories();

    protected abstract static function baseUrl();

    public abstract static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false);
}
