<?php

namespace Faker\Provider\ImageContracts;

use Faker\Provider\Base;

abstract class ImageContract extends Base {

    abstract static function categories();

    abstract static function baseUrl();

    abstract static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false);
}