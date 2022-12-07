<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Provider\es_ES\Payment;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PaymentTest extends TestCase
{
    public function testVAT(): void
    {
        $vat = $this->faker->vat();

        self::assertTrue($this->isValidCIF($vat));
    }

    /**
     * Validation taken from https://github.com/amnesty/drupal-nif-nie-cif-validator/
     *
     * @see https://github.com/amnesty/drupal-nif-nie-cif-validator/blob/master/includes/nif-nie-cif.php
     */
    public function isValidCIF($docNumber)
    {
        $fixedDocNumber = strtoupper($docNumber);

        return $this->isValidCIFFormat($fixedDocNumber);
    }

    public function isValidCIFFormat($docNumber)
    {
        return $this->respectsDocPattern($docNumber, '/^[PQSNWR][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]/')
               || $this->respectsDocPattern($docNumber, '/^[ABCDEFGHJUV][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/');
    }

    public function respectsDocPattern($givenString, $pattern)
    {
        $isValid = false;
        $fixedString = strtoupper($givenString);

        if (is_int($fixedString[0])) {
            $fixedString = substr('000000000' . $givenString, -9);
        }

        if (preg_match($pattern, $fixedString)) {
            $isValid = true;
        }

        return $isValid;
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
