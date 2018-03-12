<?php

namespace Faker\Test\Provider\dv_MV;

use Faker\Generator;
use Faker\Provider\dv_MV\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testNationalIdNumberIsValid()
    {
        $nationalIdNumber = $this->faker->nationalIdNumber();
        $this->assertRegExp('/^[A][0-9]{6}$/', $nationalIdNumber);
    }

    public function testPrefix()
    {
        $prefix = $this->faker->prefix();
        $this->assertNotEmpty($prefix);
        $this->assertInternalType('string', $prefix);
    }

    public function testFirstName()
    {
        $this->faker->seed(1);
        $this->assertEquals('ހާނީ', $this->faker->firstName());
    }

    public function testFirstNameFemale()
    {
        $this->faker->seed(1);
        $this->assertEquals('ސާނިޔާ', $this->faker->firstName('female'));
    }

    public function testFirstNameMale()
    {
        $this->faker->seed(1);
        $this->assertEquals('ދިހާޤު', $this->faker->firstName('male'));
    }

    public function testLastName()
    {
        $this->faker->seed(1);
        $this->assertEquals('ޢަލީ', $this->faker->lastName());
    }

    public function testLastNameFemale()
    {
        $this->faker->seed(1);
        $this->assertEquals('ޢަލީ', $this->faker->lastName('female'));
    }

    public function testLastNameMale()
    {
        $this->faker->seed(1);
        $this->assertEquals('ޢަލީ', $this->faker->lastName('male'));
    }

    public function testNameFemale()
    {
        $this->faker->seed(1);
        $this->assertEquals('ހާނީ ޖަޢްފަރް އާދަމް', $this->faker->name('female'));
    }

    public function testNameMale()
    {
        $this->faker->seed(1);
        $this->assertEquals('ހަޔާމް ޖަޢްފަރް އާދަމް', $this->faker->name('male'));
    }

    public function testTitle()
    {
        $this->faker->seed(1);
        $this->assertEquals('އަލްފާޟިލާ', $this->faker->title());
    }

    public function testTitleFemale()
    {
        $this->faker->seed(1);
        $this->assertEquals('އަލް އުސްތާޛާ', $this->faker->title('female'));
    }

    public function testTitleMale()
    {
        $this->faker->seed(1);
        $this->assertEquals('އަލް އުސްތާޛު', $this->faker->title('male'));
    }
    

}
