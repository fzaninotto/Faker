<?php

namespace Faker\Test\Provider\fa_IR;

use Faker\Provider\fa_IR\Person;
use Faker\Generator;
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

    public function testNationalCode()
    {
        for ($i = 0; $i < 100; $i++) {
            $nationalCode = $this->faker->nationalCode;

            // nationalCode should be in the format ##########
            $this->assertRegExp('/^[0-9]{10}$/', $nationalCode);

            $areaCode = substr($nationalCode, 0, 3);
            $controlCode = substr($nationalCode, 9, 1);

            // the areaCode must in the format ###, excluding '000'
            $this->assertNotEquals('000', $areaCode);

            // the controlCode should comply with the Iranian National Code validation algorithm
            $sum = 0;
            $count = 0;

            for ($j = 10; $j > 1; $j--) {
                $sum += $nationalCode[$count] * ($j);
                $count++;
            }

            if (($sum % 11) < 2) {
                $this->assertEquals($sum % 11, (int)$controlCode);
            } else {
                $this->assertEquals(11 - ($sum % 11), (int)$controlCode);
            }
        }
    }
}
