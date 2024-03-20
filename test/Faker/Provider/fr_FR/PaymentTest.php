<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Calculator\Luhn;
use Faker\Generator;
use Faker\Provider\fr_FR\Payment;
use PHPUnit\Framework\TestCase;

final class PaymentTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testFormattedVat(): void
    {
        $vat = $this->faker->vat(true);
        $this->assertMatchesRegularExpression("/^FR\s\w{2}\s\d{3}\s\d{3}\s\d{3}$/", $vat);

        $vat = \str_replace(' ', '', $vat);
        $siren = \substr($vat, 4, 12);
        $this->assertTrue(Luhn::isValid($siren));

        $key = (int) \substr($siren, 2, 2);
        if (0 === $key) {
            $this->assertEqual($key, (12 + 3 * ($siren % 97)) % 97);
        }
    }

    public function testUnformattedVat(): void
    {
        $vat = $this->faker->vat(false);
        $this->assertMatchesRegularExpression("/^FR\w{2}\d{9}$/", $vat);

        $siren = \substr($vat, 4, 12);
        $this->assertTrue(Luhn::isValid($siren));

        $key = (int) \substr($siren, 2, 2);
        if (0 === $key) {
            $this->assertEqual($key, (12 + 3 * ($siren % 97)) % 97);
        }
    }
}
