<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\Barcode;
use PHPUnit\Framework\TestCase;

final class BarcodeTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Barcode($faker));
        $faker->seed(0);
        $this->faker = $faker;
    }

    public function testEan8()
    {
        $code = $this->faker->ean8();
        $this->assertRegExp('/^\d{8}$/i', $code);
        $codeWithoutChecksum = substr($code, 0, -1);
        $checksum = substr($code, -1);
        $this->assertEquals(TestableBarcode::eanChecksum($codeWithoutChecksum), $checksum);
    }

    public function testEan13()
    {
        $code = $this->faker->ean13();
        $this->assertRegExp('/^\d{13}$/i', $code);
        $codeWithoutChecksum = substr($code, 0, -1);
        $checksum = substr($code, -1);
        $this->assertEquals(TestableBarcode::eanChecksum($codeWithoutChecksum), $checksum);
    }
}

final class TestableBarcode extends Barcode
{
    public static function eanChecksum($input)
    {
        return parent::eanChecksum($input);
    }
}
