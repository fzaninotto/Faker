<?php

namespace Faker\Test\Provider\es_MX;

use Faker\Generator;

class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testCurp()
    {
        $curp = $this->faker->curp;
        $this->assertEquals('RXTA200111MNEMRDW2', $curp);
    }

    public function testRFC()
    {
        $rfc = $this->faker->personRfc;
        $this->assertRegExp('/^[a-zA-Z]{3,4}[0-9]{2}[0-1]{1}[0-9]{1}[0-3]{1}[0-9]{1}[a-zA-Z0-9]{3}$/', $rfc);
    }

    public function testCurpWithFirstNames()
    {
        $curp = $this->faker->curp('Darío');

        $this->assertEquals('D', substr($curp, 3, 1));
    }

    public function testWithNotAcceptableNames()
    {
        $curp = $this->faker->curp('Jose de Darío');
        $this->assertEquals('D', substr($curp, 3, 1));
    }

    public function testCurpWithFathersLastName()
    {
        $curp = $this->faker->curp('Darío', 'Estrada');
        $this->assertEquals('E', substr($curp, 0, 1));
        $this->assertEquals('A', substr($curp, 1, 1));
    }

    public function testCurpWithMothersLastName()
    {
        $curp = $this->faker->curp(null, null, 'Estrada');
        $this->assertEquals('E', substr($curp, 2, 1));
    }

    public function testCurpFirstPart()
    {
        $curp = $this->faker->curp('Darío', 'Estrada', 'Lucía', new \DateTime('1981-04-27'), Person::GENDER_FEMALE, 'PL');

        $this->assertEquals('EALD810427MPLSCR', substr($curp, 0, 16));
    }

    public function testFullLastName()
    {
        $lastName = $this->faker->fullLastName();

        $this->assertContains(' ', $lastName);
    }

    public function testRemoveAccents()
    {
        $name = Person::removeAccents('LUCÍA');

        $this->assertEquals('LUCIA', $name);
    }
}
