<?php

namespace Faker\Test\Provider\ar_DZ;

use Faker\Generator;
use Faker\Provider\ar_DZ\Person;
use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testTitle()
    {
        $title = $this->faker->title();
        $this->assertNotEmpty($title);
        $this->assertInternalType('string', $title);
    }
    public function testPersonFullName()
    {
        $name = $this->faker->name;
        $this->assertNotEmpty($name);
        $this->assertInternalType('string', $name);
    }

    public function testPersonMaleName()
    {
        $name = $this->faker->firstNameMale;
        $this->assertNotEmpty($name);
        $this->assertInternalType('string', $name);
    }
    public function testPersonFemaleName()
    {
        $name = $this->faker->firstNameFemale;
        $this->assertNotEmpty($name);
        $this->assertInternalType('string', $name);
    }

    public function testPersonPrefix()
    {
        $prefix = $this->faker->prefix;
        $this->assertNotEmpty($prefix);
        $this->assertInternalType('string', $prefix);
    }
}
