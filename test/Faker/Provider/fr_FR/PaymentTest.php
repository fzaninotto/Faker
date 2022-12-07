<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Calculator\Luhn;
use Faker\Provider\fr_FR\Payment;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PaymentTest extends TestCase
{
    public function testFormattedVat(): void
    {
        $vat = $this->faker->vat(true);
        self::assertMatchesRegularExpression("/^FR\s\w{2}\s\d{3}\s\d{3}\s\d{3}$/", $vat);

        $vat = str_replace(' ', '', $vat);
        $siren = substr($vat, 4, 12);
        self::assertTrue(Luhn::isValid($siren));

        $key = (int) substr($siren, 2, 2);

        if ($key === 0) {
            self::assertEquals($key, (12 + 3 * ($siren % 97)) % 97);
        }
    }

    public function testUnformattedVat(): void
    {
        $vat = $this->faker->vat(false);
        self::assertMatchesRegularExpression("/^FR\w{2}\d{9}$/", $vat);

        $siren = substr($vat, 4, 12);
        self::assertTrue(Luhn::isValid($siren));

        $key = (int) substr($siren, 2, 2);

        if ($key === 0) {
            self::assertEquals($key, (12 + 3 * ($siren % 97)) % 97);
        }
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
