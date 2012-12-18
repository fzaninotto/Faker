<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Company;
use Faker\PHPUnit\Framework\Constraint as Constraint;

require_once __DIR__ . '/../../PHPUnit/Framework/Constraint/IsValidSirenSiret.php';
require_once __DIR__ . '/../../PHPUnit/Framework/Constraint/IsValidSiret.php';
require_once __DIR__ . '/../../PHPUnit/Framework/Constraint/IsValidSiren.php';

class CompanyTest extends \PHPUnit_Framework_TestCase
{
    private static function isValidSiret()
    {
        return new Constraint\IsValidSiret();
    }
    
    private static function isValidSiren()
    {
        return new Constraint\IsValidSiren();
    }
    
    public function testParagraphWithNegativeNbDigitsReturnsAWellFormattedSiret()
    {
        $siret = Company::siret(-1);
        
        $this->assertThat($siret, self :: isValidSiret());
        $this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 00[\d]{3}/", $siret);
    }

    public function testParagraphWithInvalidNbDigitsReturnsAWellFormattedSiret()
    {
        $siret = Company::siret(6);
        
        $this->assertThat($siret, self :: isValidSiret());
        $this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 00[\d]{3}/", $siret);
    }

    public function testParagraphWithValidNbDigitsReturnsAWellFormattedSiret()
    {
        $siret1 = Company::siret(1);
        $siret2 = Company::siret(2);
        $siret3 = Company::siret(3);
        $siret4 = Company::siret(4);
        
        $this->assertThat($siret1, self :: isValidSiret());
        $this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 000[\d]{2}/", $siret1);
        $this->assertThat($siret2, self :: isValidSiret());
        $this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 00[\d]{3}/", $siret2);
        $this->assertThat($siret3, self :: isValidSiret());
        $this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 0[\d]{4}/", $siret3);
        $this->assertThat($siret4, self :: isValidSiret());
        $this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} [\d]{5}/", $siret4);
    }
    
    public function testSirenReturnsAValidAndWellFormattedSiren()
    {
        $siret = Company::siren();
        
        $this->assertThat($siret, self :: isValidSiren());
        $this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3}/", $siret);
    }

    public function testCatchPhraseValidationReturnsFalse()
    {
        $isCatchPhraseValid = Company::isCatchPhraseValid('La sécurité de rouler en toute sécurité');

        $this->assertFalse($isCatchPhraseValid);
    }

    public function testCatchPhraseValidationReturnsTrue()
    {
        $isCatchPhraseValid = Company::isCatchPhraseValid('La sécurité de rouler en toute simplicité');

        $this->assertTrue($isCatchPhraseValid);
    }
}
