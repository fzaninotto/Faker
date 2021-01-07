<?php

declare(strict_types=1);

namespace Faker\Core;

use Faker\Extension;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class Barcode implements Extension\BarcodeExtension
{
    private function ean(int $length = 13): string
    {
        $code = Extension\Helper::numerify(str_repeat('#', $length - 1));

        return sprintf('%s%s', $code, \Faker\Calculator\Ean::checksum($code));
    }

    /**
     * Get a random EAN13 barcode.
     *
     * @example '4006381333931'
     */
    public function ean13(): string
    {
        return $this->ean();
    }

    /**
     * Get a random EAN8 barcode.
     *
     * @example '73513537'
     */
    public function ean8(): string
    {
        return $this->ean(8);
    }

    /**
     * Get a random ISBN-10 code
     *
     * @see http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @example '4881416324'
     */
    public function isbn10(): string
    {
        $code = Extension\Helper::numerify(str_repeat('#', 9));

        return sprintf('%s%s', $code, \Faker\Calculator\Isbn::checksum($code));
    }

    /**
     * Get a random ISBN-13 code
     *
     * @see http://en.wikipedia.org/wiki/International_Standard_Book_Number
     *
     * @example '9790404436093'
     */
    public function isbn13(): string
    {
        $code = '97' . mt_rand(8, 9) . Extension\Helper::numerify(str_repeat('#', 9));

        return sprintf('%s%s', $code, \Faker\Calculator\Ean::checksum($code));
    }
}
