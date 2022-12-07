<?php

namespace Faker\Test\Provider\zh_TW;

use Faker\Provider\zh_TW\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    /**
     * @see https://zh.wikipedia.org/wiki/%E4%B8%AD%E8%8F%AF%E6%B0%91%E5%9C%8B%E5%9C%8B%E6%B0%91%E8%BA%AB%E5%88%86%E8%AD%89
     */
    public function testPersonalIdentityNumber(): void
    {
        $id = $this->faker->personalIdentityNumber;

        $firstChar = substr($id, 0, 1);
        $codesString = Person::$idBirthplaceCode[$firstChar] . substr($id, 1);

        // After transfer the first alphabet word into 2 digit number, there should be totally 11 numbers
        self::assertMatchesRegularExpression('/^[0-9]{11}$/', $codesString);

        $total = 0;
        $codesArray = str_split($codesString);

        foreach ($codesArray as $key => $code) {
            $total += $code * Person::$idDigitValidator[$key];
        }

        // Validate
        self::assertSame(0, $total % 10);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
