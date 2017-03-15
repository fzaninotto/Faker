<?php


namespace Faker\Provider\en_US;

use Faker\Generator;

class PaymentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    public function setUp()
    {
        $faker = new Generator();
        $faker->addProvider(new Payment($faker));
        $this->faker = $faker;
    }

    public function testBankAccountNumber()
    {
        $accNo = $this->faker->bankAccountNumber;
        $this->assertTrue(ctype_digit($accNo));
        $this->assertLessThanOrEqual(17, strlen($accNo));
    }

    public function testBankRoutingNumber()
    {
        $routingNo = $this->faker->bankRoutingNumber;
        $this->assertRegExp('/^\d{9}$/', $routingNo);
        $this->assertEquals(Payment::calculateRoutingNumberChecksum($routingNo), $routingNo[8]);
    }

    public function routingNumberProvider()
    {
        return array(
            array('122105155'),
            array('082000549'),
            array('121122676'),
            array('122235821'),
            array('102101645'),
            array('102000021'),
            array('123103729'),
            array('071904779'),
            array('081202759'),
            array('074900783'),
            array('104000029'),
            array('073000545'),
            array('101000187'),
            array('042100175'),
            array('083900363'),
            array('091215927'),
            array('091300023'),
            array('091000022'),
            array('081000210'),
            array('101200453'),
            array('092900383'),
            array('104000029'),
            array('121201694'),
            array('107002312'),
            array('091300023'),
            array('041202582'),
            array('042000013'),
            array('123000220'),
            array('091408501'),
            array('064000059'),
            array('124302150'),
            array('125000105'),
            array('075000022'),
            array('307070115'),
            array('091000022'),
        );
    }

    /**
     * @dataProvider routingNumberProvider
     */
    public function testCalculateRoutingNumberChecksum($routingNo)
    {
        $this->assertEquals($routingNo[8], Payment::calculateRoutingNumberChecksum($routingNo), $routingNo);
    }
}
