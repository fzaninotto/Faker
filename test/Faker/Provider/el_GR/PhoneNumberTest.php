<?php

namespace Faker\Test\Provider\el_GR;

use Faker\Provider\el_GR\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testFixedLineNumber(): void
    {
        $fixedLineNumber = $this->faker->fixedLineNumber();
        self::assertNotSame(' ', $fixedLineNumber[0]);
        self::assertMatchesRegularExpression(
            '/^(\+30)?2(?:1\d\d|2(?:2[1-46-9]|[36][1-8]|4[1-7]|5[1-4]|7[1-5]|[89][1-9])|3(?:1\d|2[1-57]|[35][1-3]|4[13]|7[1-7]|8[124-6]|9[1-79])|4(?:1\d|2[1-8]|3[1-4]|4[13-5]|6[1-578]|9[1-5])|5(?:1\d|[29][1-4]|3[1-5]|4[124]|5[1-6])|6(?:1\d|[269][1-6]|3[1245]|4[1-7]|5[13-9]|7[14]|8[1-5])|7(?:1\d|2[1-5]|3[1-6]|4[1-7]|5[1-57]|6[135]|9[125-7])|8(?:1\d|2[1-5]|[34][1-4]|9[1-57]))\d{6}$/',
            str_replace(' ', '', $fixedLineNumber),
        );
    }

    public function testMobileNumber(): void
    {
        $mobileNumber = $this->faker->mobileNumber();
        self::assertNotSame(' ', $mobileNumber[0]);
        self::assertMatchesRegularExpression(
            '/^(\+30)?68[57-9]\d{7}|(?:69|94)\d{8}$/',
            str_replace(' ', '', $mobileNumber),
        );
    }

    public function testPersonalNumber(): void
    {
        $personalNumber = $this->faker->personalNumber();
        self::assertNotSame(' ', $personalNumber[0]);
        self::assertMatchesRegularExpression(
            '/^(\+30)?70\d{8}$/',
            str_replace(' ', '', $personalNumber),
        );
    }

    public function testTollFreeNumber(): void
    {
        $tollFreeNumber = $this->faker->tollFreeNumber();
        self::assertNotSame(' ', $tollFreeNumber[0]);
        self::assertMatchesRegularExpression(
            '/^(\+30)?800\d{7}$/',
            str_replace(' ', '', $tollFreeNumber),
        );
    }

    public function testSharedCostNumber(): void
    {
        $sharedCostNumber = $this->faker->sharedCostNumber();
        self::assertNotSame(' ', $sharedCostNumber[0]);
        self::assertMatchesRegularExpression(
            '/^(\+30)?8(?:0[16]|12|[27]5|50)\d{7}$/',
            str_replace(' ', '', $sharedCostNumber),
        );
    }

    public function testPremiumRateNumber(): void
    {
        $premiumRateNumber = $this->faker->premiumRateNumber();
        self::assertNotSame(' ', $premiumRateNumber[0]);
        self::assertMatchesRegularExpression(
            '/^(\+30)?90[19]\d{7}$/',
            str_replace(' ', '', $premiumRateNumber),
        );
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
