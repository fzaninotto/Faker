<?php

namespace Faker\Test\Provider\ms_MY;

use Faker\Generator;
use Faker\Provider\ms_MY\Person;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    /**
     * @group  ms_MY
     * Test the validity of Name
     */
    public function testNameCanReturnData()
    {
        $name = $this->faker->name();
        $this->assertNotEmpty($name);
        $this->assertInternalType('string', $name);
    }

    /**
     * @group  ms_MY
     * Test the validity of Name
     */
    public function testNameWithParameterMaleCanReturnData()
    {
        $name = $this->faker->name('male');
        $this->assertNotEmpty($name);
        $this->assertInternalType('string', $name);
    }

    /**
     * @group  ms_MY
     * Test the validity of Name
     */
    public function testNameWithParameterFemaleCanReturnData()
    {
        $name = $this->faker->name('female');
        $this->assertNotEmpty($name);
        $this->assertInternalType('string', $name);
    }

    /**
     * @group  ms_MY
     * Test the validity of FirstName
     */
    public function testIfFirstNameCanReturnData()
    {
        $firstName = $this->faker->firstName();
        $this->assertNotEmpty($firstName);
        $this->assertInternalType('string', $firstName);
    }

    /**
     * @group  ms_MY
     * Test the validity of FirstNameMaleWithParameter
     */
    public function testIfFirstNameMaleWithParameterCanReturnData()
    {
        $firstNameMale = $this->faker->firstName('male');
        $this->assertNotEmpty($firstNameMale);
        $this->assertInternalType('string', $firstNameMale);
    }

    /**
     * @group  ms_MY
     * Test the validity of FirstNameFemaleWithParameter
     */
    public function testIfFirstNameFemaleWithParameterCanReturnData()
    {
        $firstNameFemale = $this->faker->firstName('female');
        $this->assertNotEmpty($firstNameFemale);
        $this->assertInternalType('string', $firstNameFemale);
    }
    /**
     * @group  ms_MY
     * Test the validity of FirstNameMale
     */
    public function testIfFirstNameMaleCanReturnData()
    {
        $firstNameMale = $this->faker->firstNameMale();
        $this->assertNotEmpty($firstNameMale);
        $this->assertInternalType('string', $firstNameMale);
    }

    /**
     * @group  ms_MY
     * Test the validity of FirstNameFemale
     */
    public function testIfFirstNameFemaleCanReturnData()
    {
        $firstNameFemale = $this->faker->firstNameFemale();
        $this->assertNotEmpty($firstNameFemale);
        $this->assertInternalType('string', $firstNameFemale);

    }

    /**
     * @group  ms_MY
     * Test the validity of secondPersonalNameMale
     */
    public function testIfSecondaryPersonalNameMaleCanReturnData()
    {
        $secondPersonalNameMale = $this->faker->secondPersonalNameMale;
        $this->assertNotEmpty($secondPersonalNameMale);
        $this->assertInternalType('string', $secondPersonalNameMale);
    }

    /**
     * @group  ms_MY
     * Test the validity of secondPersonalNameFemale
     */
    public function testIfSecondaryPersonalNameFemaleCanReturnData()
    {
        $secondPersonalNameMale = $this->faker->secondPersonalNameFemale;
        $this->assertNotEmpty($secondPersonalNameMale);
        $this->assertInternalType('string', $secondPersonalNameMale);
    }

}
?>
