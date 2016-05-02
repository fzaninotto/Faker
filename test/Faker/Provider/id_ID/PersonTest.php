<?php

namespace Faker\Test\Provider\id_ID;

use Faker\Generator;
use Faker\Provider\id_ID\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testIfFirstNameMaleCanReturnData()
    {
        $firstNameMale = $this->faker->firstNameMale();
        $this->assertNotEmpty($firstNameMale);
    }

    public function testIfLastNameMaleCanReturnData()
    {
        $lastNameMale = $this->faker->lastNameMale();
        $this->assertNotEmpty($lastNameMale);
    }

    public function testIfFirstNameFemaleCanReturnData()
    {
        $firstNameFemale = $this->faker->firstNameFemale();
        $this->assertNotEmpty($firstNameFemale);
    }

    public function testIfLastNameFemaleCanReturnData()
    {
        $lastNameFemale = $this->faker->lastNameFemale();
        $this->assertNotEmpty($lastNameFemale);
    }
    
    public function testIfVehicleLicenseNumberReturnData()
    {
        $vehicleLicenseNumber = $this->faker->vehicleLicenseNumber();
        $this->assertNotEmpty($vehicleLicenseNumber);
    }
    
    public function testIfPersonalLicenseNumberReturnData()
    {
        $personalLicenseNumber = $this->faker->personalLicenseNumber();
        $this->assertNotEmpty($personalLicenseNumber);
    }
    
    public function testIfGovLicenseNumberReturnData()
    {
        $govLicenseNumber = $this->faker->govLicenseNumber();
        $this->assertNotEmpty($govLicenseNumber);
    }
    
    public function testIfAmbassadorLicenseNumberReturnData()
    {
        $ambassadorLicenseNumber = $this->faker->ambassadorLicenseNumber();
        $this->assertNotEmpty($ambassadorLicenseNumber);
    }
    
    public function testIfVehicleLicenseNumberFormat()
    {
        $pattern = '/^([A-Za-z]{1,2})(\s|-)*([0-9]{1,4})(\s|-)*([A-Za-z]{0,3})/i';
        
        $vehicleLicenseNumber = $this->faker->vehicleLicenseNumber();
        $this->assertRegExp($pattern, $vehicleLicenseNumber);
        
        $personalLicenseNumber = $this->faker->vehicleLicenseNumber();
        $this->assertRegExp($pattern, $personalLicenseNumber);
        
        $govLicenseNumber = $this->faker->vehicleLicenseNumber();
        $this->assertRegExp($pattern, $govLicenseNumber);
        
        $ambassadorLicenseNumber = $this->faker->vehicleLicenseNumber();
        $this->assertRegExp($pattern, $ambassadorLicenseNumber);
    }
}
