<?php

namespace Faker\Test\Provider\ne_NP;

use Faker\Provider\ne_NP\Payment;
use Faker\Test\TestCase;

final class PaymentTest extends TestCase
{
    public function testCommercialBank(): void
    {
        $str = $this->faker->commercialBank();
        self::assertIsString($str);

        $this->faker->seed(1);

        $strNext = $this->faker->commercialBank();
        self::assertSame($str, $strNext);
    }

    public function testDevelopmentBank(): void
    {
        $str = $this->faker->developmentBank();
        self::assertIsString($str);

        $this->faker->seed(1);

        $strNext = $this->faker->developmentBank();
        self::assertSame($str, $strNext);
    }

    public function testFinanceCompany(): void
    {
        $str = $this->faker->financeCompany();
        self::assertIsString($str);

        $this->faker->seed(1);

        $strNext = $this->faker->financeCompany();
        self::assertSame($str, $strNext);
    }

    public function testMicroFinance(): void
    {
        $str = $this->faker->microFinance();
        self::assertIsString($str);
        self::assertStringContainsString('Laghubitta', $str);

        $this->faker->seed(1);

        $strNext = $this->faker->microFinance();
        self::assertSame($str, $strNext);
    }

    public function testDigitalWallet(): void
    {
        $str = $this->faker->digitalWallet();
        self::assertIsString($str);

        $this->faker->seed(1);

        $strNext = $this->faker->digitalWallet();
        self::assertSame($str, $strNext);
    }

    public function testSwiftCode(): void
    {
        $str = $this->faker->swiftCode();
        self::assertIsString($str);

        $this->faker->seed(1);

        $strNext = $this->faker->swiftCode();
        self::assertSame($str, $strNext);
    }

    public function testBankAccountNumber(): void
    {
        $str = $this->faker->bankAccountNumber();
        self::assertIsString($str);
        self::assertGreaterThanOrEqual(9, strlen($str));
        self::assertLessThanOrEqual(20, strlen($str));

        $this->faker->seed(1);

        $strNext = $this->faker->bankAccountNumber();
        self::assertSame($str, $strNext);
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
