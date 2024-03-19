<?php

namespace Faker\Test\Provider\es_ES;

use Faker\Generator;
use Faker\Provider\es_ES\Payment;
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

    public function testVAT(): void
    {
        $vat = $this->faker->vat();

        $this->assertTrue($this->isValidCIF($vat));
    }

    /**
     * Validation taken from https://github.com/amnesty/drupal-nif-nie-cif-validator/.
     *
     * @see https://github.com/amnesty/drupal-nif-nie-cif-validator/blob/master/includes/nif-nie-cif.php
     */
    public function isValidCIF($docNumber): bool
    {
        $fixedDocNumber = \strtoupper($docNumber);

        return $this->isValidCIFFormat($fixedDocNumber);
    }

    public function isValidCIFFormat($docNumber): bool
    {
        return $this->respectsDocPattern($docNumber, '/^[PQSNWR][0-9][0-9][0-9][0-9][0-9][0-9][0-9][A-Z0-9]/')
               || $this->respectsDocPattern($docNumber, '/^[ABCDEFGHJUV][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]/');
    }

    public function respectsDocPattern($givenString, $pattern): bool
    {
        $isValid = false;
        $fixedString = \strtoupper($givenString);
        if (\is_int(\substr($fixedString, 0, 1))) {
            $fixedString = \substr('000000000'.$givenString, -9);
        }
        if (\preg_match($pattern, $fixedString)) {
            $isValid = true;
        }

        return $isValid;
    }
}
