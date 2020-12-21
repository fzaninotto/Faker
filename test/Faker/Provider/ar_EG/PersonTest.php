<?php


namespace Faker\Test\Provider\ar_EG;


use Faker\Generator;
use Faker\Provider\ar_EG\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    /** @var Generator $faker */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));

        $this->faker = $faker;
    }

    public function testValidLengthOfNationalIdNumber()
    {
        $nationalIdNumber = $this->faker->nationalIdNumber;

        $this->assertInternalType('string', $nationalIdNumber);
        $this->assertEquals(14, strlen($nationalIdNumber));
    }

    public function testIfNamePrefixIsCorrect()
    {
        $prefix = $this->faker->prefix;

        $this->assertContains('.', $prefix);
    }

    public function testIfFirstNameMaleCanReturnData()
    {
        $firstNameMale = $this->faker->firstNameMale;
        $this->assertNotEmpty($firstNameMale);
    }

    public function testIfFirstNameFemaleCanReturnData()
    {
        $firstNameFemale = $this->faker->firstNameFemale;
        $this->assertNotEmpty($firstNameFemale);
    }
}