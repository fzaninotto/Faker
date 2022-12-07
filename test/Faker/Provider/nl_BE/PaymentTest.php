<?php

namespace Faker\Test\Provider\nl_BE;

use Faker\Provider\nl_BE\Payment;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PaymentTest extends TestCase
{
    public function testVatIsValid(): void
    {
        $vat = $this->faker->vat();
        $unspacedVat = $this->faker->vat(false);
        self::assertMatchesRegularExpression('/^(BE 0\d{9})$/', $vat);
        self::assertMatchesRegularExpression('/^(BE0\d{9})$/', $unspacedVat);

        $this->validateChecksum($vat);
        $this->validateChecksum($unspacedVat);
    }

    private function validateChecksum($vat): void
    {
        // Remove the "BE " part from the beginning
        $numbers = trim(substr($vat, 2));

        $len = strlen($numbers);

        self::assertEquals(10, $len);
        self::assertStringStartsWith('0', $numbers);

        // Mod97 check on first 8 digits
        $checksum = 97 - fmod(substr($numbers, 0, 8), 97);
        // Make sure checksum is 2 characters long
        $checksum = sprintf('%02d', $checksum);

        self::assertEquals((string) $checksum, substr($numbers, 8, 10));
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
