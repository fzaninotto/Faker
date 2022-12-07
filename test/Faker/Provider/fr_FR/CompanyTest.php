<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Calculator\Luhn;
use Faker\Provider\fr_FR\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testSiretReturnsAValidSiret(): void
    {
        $siret = $this->faker->siret(false);
        self::assertMatchesRegularExpression("/^\d{14}$/", $siret);
        self::assertTrue(Luhn::isValid($siret));
    }

    public function testSiretReturnsAWellFormattedSiret(): void
    {
        $siret = $this->faker->siret();
        self::assertMatchesRegularExpression("/^\d{3}\s\d{3}\s\d{3}\s\d{5}$/", $siret);
        $siret = str_replace(' ', '', $siret);
        self::assertTrue(Luhn::isValid($siret));
    }

    public function testSirenReturnsAValidSiren(): void
    {
        $siren = $this->faker->siren(false);
        self::assertMatchesRegularExpression("/^\d{9}$/", $siren);
        self::assertTrue(Luhn::isValid($siren));
    }

    public function testSirenReturnsAWellFormattedSiren(): void
    {
        $siren = $this->faker->siren();
        self::assertMatchesRegularExpression("/^\d{3}\s\d{3}\s\d{3}$/", $siren);
        $siren = str_replace(' ', '', $siren);
        self::assertTrue(Luhn::isValid($siren));
    }

    public function testCatchPhraseReturnsValidCatchPhrase(): void
    {
        self::assertTrue(TestableCompany::isCatchPhraseValid($this->faker->catchPhrase()));
    }

    public function testIsCatchPhraseValidReturnsFalseWhenAWordsAppearsTwice(): void
    {
        $isCatchPhraseValid = TestableCompany::isCatchPhraseValid('La sécurité de rouler en toute sécurité');
        self::assertFalse($isCatchPhraseValid);
    }

    public function testIsCatchPhraseValidReturnsTrueWhenNoWordAppearsTwice(): void
    {
        $isCatchPhraseValid = TestableCompany::isCatchPhraseValid('La sécurité de rouler en toute simplicité');
        self::assertTrue($isCatchPhraseValid);
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}

/**
 * @group legacy
 */
final class TestableCompany extends Company
{
    public static function isCatchPhraseValid($catchPhrase)
    {
        return parent::isCatchPhraseValid($catchPhrase);
    }
}
