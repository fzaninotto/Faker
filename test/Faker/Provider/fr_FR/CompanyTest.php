<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Calculator\Luhn;
use Faker\Generator;
use Faker\Provider\fr_FR\Company;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Company($faker));
        $this->faker = $faker;
    }

    public function testSiretReturnsAValidSiret()
    {
        $siret = $this->faker->siret(false);
        $this->assertRegExp("/^\d{14}$/", $siret);
        $this->assertTrue(Luhn::isValid($siret));
    }

    public function testSiretReturnsAWellFormattedSiret()
    {
        $siret = $this->faker->siret();
        $this->assertRegExp("/^\d{3}\s\d{3}\s\d{3}\s\d{5}$/", $siret);
        $siret = str_replace(' ', '', $siret);
        $this->assertTrue(Luhn::isValid($siret));
    }

    public function testSirenReturnsAValidSiren()
    {
        $siren = $this->faker->siren(false);
        $this->assertRegExp("/^\d{9}$/", $siren);
        $this->assertTrue(Luhn::isValid($siren));
    }

    public function testSirenReturnsAWellFormattedSiren()
    {
        $siren = $this->faker->siren();
        $this->assertRegExp("/^\d{3}\s\d{3}\s\d{3}$/", $siren);
        $siren = str_replace(' ', '', $siren);
        $this->assertTrue(Luhn::isValid($siren));
    }

    public function testCatchPhraseReturnsValidCatchPhrase()
    {
        $this->assertTrue(TestableCompany::isCatchPhraseValid($this->faker->catchPhrase()));
    }

    public function testIsCatchPhraseValidReturnsFalseWhenAWordsAppearsTwice()
    {
        $isCatchPhraseValid = TestableCompany::isCatchPhraseValid('La sécurité de rouler en toute sécurité');
        $this->assertFalse($isCatchPhraseValid);
    }

    public function testIsCatchPhraseValidReturnsTrueWhenNoWordAppearsTwice()
    {
        $isCatchPhraseValid = TestableCompany::isCatchPhraseValid('La sécurité de rouler en toute simplicité');
        $this->assertTrue($isCatchPhraseValid);
    }
}

class TestableCompany extends Company
{
    public static function isCatchPhraseValid($catchPhrase)
    {
        return parent::isCatchPhraseValid($catchPhrase);
    }
}
