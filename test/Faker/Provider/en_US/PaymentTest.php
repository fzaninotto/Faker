<?php

namespace Faker\Provider\en_US;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PaymentTest extends TestCase
{
    public function testBankAccountNumber(): void
    {
        $accNo = $this->faker->bankAccountNumber;
        self::assertTrue(ctype_digit($accNo));
        self::assertLessThanOrEqual(17, strlen($accNo));
    }

    public function testBankRoutingNumber(): void
    {
        $routingNo = $this->faker->bankRoutingNumber;
        self::assertMatchesRegularExpression('/^\d{9}$/', $routingNo);
        self::assertEquals(Payment::calculateRoutingNumberChecksum($routingNo), $routingNo[8]);
    }

    public function routingNumberProvider()
    {
        return [
            ['122105155'],
            ['082000549'],
            ['121122676'],
            ['122235821'],
            ['102101645'],
            ['102000021'],
            ['123103729'],
            ['071904779'],
            ['081202759'],
            ['074900783'],
            ['104000029'],
            ['073000545'],
            ['101000187'],
            ['042100175'],
            ['083900363'],
            ['091215927'],
            ['091300023'],
            ['091000022'],
            ['081000210'],
            ['101200453'],
            ['092900383'],
            ['104000029'],
            ['121201694'],
            ['107002312'],
            ['091300023'],
            ['041202582'],
            ['042000013'],
            ['123000220'],
            ['091408501'],
            ['064000059'],
            ['124302150'],
            ['125000105'],
            ['075000022'],
            ['307070115'],
            ['091000022'],
        ];
    }

    /**
     * @dataProvider routingNumberProvider
     */
    public function testCalculateRoutingNumberChecksum($routingNo): void
    {
        self::assertEquals($routingNo[8], Payment::calculateRoutingNumberChecksum($routingNo), $routingNo);
    }

    protected function getProviders(): iterable
    {
        yield new Payment($this->faker);
    }
}
