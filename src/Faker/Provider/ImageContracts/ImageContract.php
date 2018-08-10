<?php

namespace Faker\Provider\ImageContracts;

use Faker\Provider\Base;

abstract class ImageContract extends Base
{

    abstract protected static function categories();

    abstract protected static function baseUrl();

    abstract public static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false);
}
