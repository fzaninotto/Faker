<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Company;

/**
 * @see http://www.pixelastic.com/blog/13:validation-et-generation-de-numero-de-siret 
 */
class IsValidSiret extends \PHPUnit_Framework_Constraint
{
	
    protected function matches($other)
    {
    	$siret = str_replace(' ', '', $other);
		$sum = 0;
		for($i = 0; $i != 14; $i++) {
			$tmp = ((($i + 1) % 2) + 1 ) * intval($siret[$i]);
			if ($tmp >= 10) $tmp -= 9;
			$sum += $tmp;
		}
		return ($sum % 10 === 0);
    }
    
    public function toString() {
    	return 'is a valid SIRET number';
    }
    
}

class CompanyTest extends \PHPUnit_Framework_TestCase
{
	
	private static function isValidSiret()
    {
        return new IsValidSiret();
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

		$this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 00[\d]{3}/", $siret);
	}

	public function testParagraphWithValidNbDigitsReturnsAWellFormattedSiret()
	{
		$siret1 = Company::siret(1);
		$siret2 = Company::siret(2);
		$siret3 = Company::siret(3);
		$siret4 = Company::siret(4);

		$this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 000[\d]{2}/", $siret1);
		$this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 00[\d]{3}/", $siret2);
		$this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 0[\d]{4}/", $siret3);
		$this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} [\d]{5}/", $siret4);
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
