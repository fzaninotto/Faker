<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Company;

/**
 * @see http://www.pixelastic.com/blog/13:validation-et-generation-de-numero-de-siret
 * @see http://fr.wikipedia.org/wiki/Syst%C3%A8me_d%E2%80%99identification_du_r%C3%A9pertoire_des_%C3%A9tablissements
 * @see http://fr.wikipedia.org/wiki/SIREN
 */

abstract class IsValidSirenSiret extends \PHPUnit_Framework_Constraint 
{
	
	protected function matches($other)
    {
    	
    	$code = str_replace(' ', '', $other);
    	
    	if (strlen($code) != $this->getLength())
    		return false;

    	$sum = 0;
    	// IMPORTANT : from right to left
    	$position = 1;
    	for ($i = strlen($code) - 1; $i >= 0; $i--) {
    		$isEven = (($position++ % 2) === 0);
    		$tmp = $isEven ? $code[$i] * 2 : $code[$i];
    		if ($tmp >= 10) $tmp -= 9;
			$sum += $tmp;
    	}
    	return ($sum % 10 === 0);
    	
    }
    
    public function toString() {
    	return sprintf('is a valid %s number', $this->getName());
    }
    
    abstract protected function getLength();
    
    abstract protected function getName();

}

class IsValidSiret extends IsValidSirenSiret
{
	
	protected function getLength() {
		return 14;
	}
    
	protected function getName() {
		return 'SIRET';
	}
    
}

class IsValidSiren extends IsValidSirenSiret
{
	
	protected function getLength() {
		return 9;
	}
    
	protected function getName() {
		return 'SIREN';
	}
    
}

class CompanyTest extends \PHPUnit_Framework_TestCase
{
	
	private static function isValidSiret()
    {
        return new IsValidSiret();
    }
	
	private static function isValidSiren()
    {
        return new IsValidSiren();
    }
    
	public function testParagraphWithNegativeNbDigitsReturnsAValidAndWellFormattedSiret()
	{
		$siret = Company::siret(-1);
		
		$this->assertThat($siret, self :: isValidSiret());
		$this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 00[\d]{3}/", $siret);
	}

	public function testParagraphWithInvalidNbDigitsReturnsAValidAndWellFormattedSiret()
	{
		$siret = Company::siret(6);
		
		$this->assertThat($siret, self :: isValidSiret());
		$this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3} 00[\d]{3}/", $siret);
	}
	
	public function testSirenReturnsAValidAndWellFormattedSiren()
	{
		$siret = Company::siren();
		
		$this->assertThat($siret, self :: isValidSiren());
		$this->assertRegExp("/[\d]{3} [\d]{3} [\d]{3}/", $siret);
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
