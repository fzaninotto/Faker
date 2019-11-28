<?php

namespace Faker\Test\Provider\zh_TW;

use Faker\Generator;
use Faker\Provider\zh_TW\Person;
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

    /**
     * @see https://zh.wikipedia.org/wiki/%E4%B8%AD%E8%8F%AF%E6%B0%91%E5%9C%8B%E5%9C%8B%E6%B0%91%E8%BA%AB%E5%88%86%E8%AD%89
     */
    public function testPersonalIdentityNumber()
    {
        $id = $this->faker->personalIdentityNumber;

        $firstChar = substr($id, 0, 1);
        $codesString = Person::$idBirthplaceCode[$firstChar] . substr($id, 1);

        // After transfer the first alphabet word into 2 digit number, there should be totally 11 numbers
        $this->assertRegExp("/^[0-9]{11}$/", $codesString);

        $total = 0;
        $codesArray = str_split($codesString);
        foreach ($codesArray as $key => $code) {
            $total += $code * Person::$idDigitValidator[$key];
        }

        // Validate
        $this->assertEquals(0, $total % 10);
    }
}
