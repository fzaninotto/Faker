<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Company;

class CompanyTest extends \PHPUnit_Framework_TestCase
{
	public function testParagraphWithNegativeNbDigitsReturnsAWellFormattedSiret()
	{
		$siret = Company::siret(-1);

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