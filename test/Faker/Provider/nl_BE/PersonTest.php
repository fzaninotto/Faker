<?php

namespace Faker\Test\Provider\nl_BE;

use Faker\Generator;
use Faker\Provider\nl_BE\Person;
use PHPUnit\Framework\TestCase;

/**
 * @group Person
 */
final class PersonTest extends TestCase
{
    private Generator $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testRrnIsValid(): void
    {
        $rrn = $this->faker->rrn();

        $this->assertEquals(11, \strlen($rrn));

        $ctrlNumber = (int) \substr($rrn, 9, 2);
        $calcCtrl = 97 - (\substr($rrn, 0, 9) % 97);
        $altcalcCtrl = 97 - ((2 .\substr($rrn, 0, 9)) % 97);
        $this->assertContains($ctrlNumber, [$calcCtrl, $altcalcCtrl]);

        $middle = \substr($rrn, 6, 3);
        $this->assertGreaterThan(1, $middle);
        $this->assertLessThan(997, $middle);
    }

    public function testRrnIsMale(): void
    {
        $rrn = $this->faker->rrn('male');
        $this->assertEquals(1, \substr($rrn, 6, 3) % 2);
    }

    public function testRrnIsFemale(): void
    {
        $rrn = $this->faker->rrn('female');
        $this->assertEquals(0, \substr($rrn, 6, 3) % 2);
    }
}
