<?php

declare(strict_types=1);

namespace Faker\Test\Fixture\Container;

use Faker\Extension;

final class UnconstructableClass implements Extension\Extension
{
    public function __construct()
    {
        throw new \RuntimeException('Sorry, not sorry');
    }
}
