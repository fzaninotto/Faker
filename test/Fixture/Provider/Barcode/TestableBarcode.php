<?php

declare(strict_types=1);

namespace Faker\Test\Fixture\Provider\Barcode;

use Faker\Provider\Barcode;

class TestableBarcode extends Barcode
{
    public static function eanChecksum($input)
    {
        return parent::eanChecksum($input);
    }
}
