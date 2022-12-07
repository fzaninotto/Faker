<?php

namespace Faker\Test\Provider\kk_KZ;

use Faker\Provider\kk_KZ\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testBusinessIdentificationNumberIsValid(): void
    {
        $registrationDate = new \DateTime('now');
        $businessIdentificationNumber = $this->faker->businessIdentificationNumber($registrationDate);
        $registrationDateAsString = $registrationDate->format('ym');

        self::assertMatchesRegularExpression(
            '/^(' . $registrationDateAsString . ')([4-6]{1})([0-3]{1})(\\d{6})$/',
            $businessIdentificationNumber,
        );
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
